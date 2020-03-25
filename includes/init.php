<?php
// vvv DO NOT MODIFY/REMOVE vvv

// check current php version to ensure it meets 2300's requirements
function check_php_version()
{
  if (version_compare(phpversion(), '7.0', '<')) {
    define(VERSION_MESSAGE, "PHP version 7.0 or higher is required for 2300. Make sure you have installed PHP 7 on your computer and have set the correct PHP path in VS Code.");
    echo VERSION_MESSAGE;
    throw VERSION_MESSAGE;
  }
}
check_php_version();

function config_php_errors()
{
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
}
config_php_errors();

// open connection to database
function open_or_init_sqlite_db($db_filename, $init_sql_filename)
{
  if (!file_exists($db_filename)) {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (file_exists($init_sql_filename)) {
      $db_init_sql = file_get_contents($init_sql_filename);
      try {
        $result = $db->exec($db_init_sql);
        if ($result) {
          return $db;
        }
      } catch (PDOException $exception) {
        // If we had an error, then the DB did not initialize properly,
        // so let's delete it!
        unlink($db_filename);
        throw $exception;
      }
    } else {
      unlink($db_filename);
    }
  } else {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  return null;
}

function exec_sql_query($db, $sql, $params = array())
{
  $query = $db->prepare($sql);
  if ($query and $query->execute($params)) {
    return $query;
  }
  return null;
}
// ^^^ DO NOT MODIFY/REMOVE ^^^

// You may place any of your code here.

$db = open_or_init_sqlite_db('secure/gallery.sqlite', 'secure/init.sql');

define ('SESSION_COOKIE_DURATION', 60*60*1); //session last 1 hr
$session_messages = array();

function log_user_in($username, $password){
  global $db;
  global $current_user;
  global $session_messages;

  if ( isset($username) && isset($password) ) {
    $sql = "SELECT * FROM users WHERE username = :username;"; //looking for username in database
    $params = array(
      ':username' => $username
    );
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    if ($records) {
      $user_account = $records[0]; // since the username is unique, there is only 1 record

      //check if password is correct
      if ( password_verify($password, $user_account['password']) ) {
        $session = session_create_id(); // create a session

        $sql = "INSERT INTO sessions (user_id, session) VALUES (:user_id, :session);"; //storing session id in the sessions database
        $params = array(
          ':user_id' => $user_account['id'],
          ':session' => $session
        );
        $result = exec_sql_query($db, $sql, $params);
        if ($result) { //if session was succesfully stored in DB
          setcookie("session", $session, time() + SESSION_COOKIE_DURATION);

          $current_user = $user_account;
          return $current_user;
        } else {
          array_push($session_messages, "Your log in failed.");
        }
      } else {
        array_push($session_messages, "Please enter a valid username and password");
      }
    } else {
      array_push($session_messages, "We found no account registered with this username. Please try again.");
    }
  } else {
    array_push($session_messages, "Please enter a valid username and password.");
  }
  $current_user = NULL;
  return NULL;
}

function check_user($user_id) { //returns the user with the user_id, if one exists, if one does not exist, return null
  global $db;

  $sql = "SELECT * FROM users WHERE id = :user_id;";
  $params = array(
    ':user_id' => $user_id
  );
  $records = exec_sql_query($db, $sql, $params)->fetchAll();
  if($records) { // since usernames are unique, there should only be 1 record
    return $records[0];
  }
  return NULL;
}

function check_session($session) { //returns that particular session, if one exists
  global $db;

  if (isset($session)) {
    $sql = "SELECT * FROM sessions WHERE session = :session;";
    $params = array(
      ':session' => $session
    );
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    if ($records) {
      return $records[0]; // sessions are also unique, so there should only be one
    }
  }
  return NULL; // if no session existed
}

function session_login() {
  global $db;
  global $current_user;

  if (isset($_COOKIE["session"])) {
    $session = $_COOKIE["session"];
    $record_session = check_session($session); // setting a variable to equal the record of the session, if one exists.  If not, set it to null

    if (isset($record_session) ) {
      $current_user = check_user($record_session['user_id']); //renew the current user's session for one hour
      setcookie("session", $session, time() + SESSION_COOKIE_DURATION);
      return $current_user;
    }
  }
  $current_user = NULL;// if their is no session, current user is NULL
  return NULL;
}

function user_logged_in() {
  global $current_user;
  return ($current_user != NULL); //returns TRUE if a user is logged in
}

function log_user_out() {
  global $current_user;

  setcookie('session', '', time() - 10000000); //removes the session from the cookie and forces it to expire
  $current_user = NULL;
}

//Checking for login or logout requests or checking to keep the user logged in.

//check to login
if ( isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password']) ) {
  $username = trim ($_POST['username']); //removing the white space the user might add to the username and password
  $password = trim($_POST['password']);

  log_user_in($username, $password);
} else {
  session_login();
}

//check to logout the user
if ( isset($current_user) && ( isset($_GET['logout']) || isset($_POST['logout']))) {
  log_user_out();
}

?>
