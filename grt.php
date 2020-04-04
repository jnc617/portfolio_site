<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
  <title>Jacob Chovanec's Portfolio</title>
</head>

<body>

<?php
include("includes/header.php");
?>

    <div class = "eachWorkPageHeading">
        <h2> Access Review Tool </h2>
        <h6> Professional Project Completed During My UX Internship at L3Harris Technologies </h4>
    </div>
    <div class = "pageContent">
        <div class="goalOfProjectSection">
            <h4> Background </h4>

            <p> The process for completing internal access reviews at L3Harris Technologies was quite manual and arduous.  Certain employees would have to spend hours of their week creating spreadsheets from scratch, containing hundreds of manually entered cells to keep track of relevant information. </p>
            <p> There are two types of employees involved in this process: Coordinators - who initialize the access reviews and oversee the completion of the reviews (by making sure everyone is on track, all things going well, etc.) - and reviewers - who complete the access reviews by verifying or revoking access to applications that employees under them currently have access to. </p>
            <p>  I served as the UX Designer on an Agile team that included two developers and one systems engineer.  We were tasked with creating an internal web application that would automate a large portion of this process for employees that had stake in the access review process. </p>

            <h4> Goal </h4>

            <p> Design an internal web application with a positive user experience that improves the efficiency of system access reviews at L3Harris Technologies. This is a new application that needed designed and deployed in the span of the summer of 2019. </p>

        </div>

        <hr>

        <div class="fourDescriptions">
            <div class="descriptionRow">
                <div class="column">
                    <h5> My role: </h5>
                    <p> Sole UX Designer working on an Agile Scrum team.  </p>
                    <p> <strong> Responsible for: </strong> User research, MVP, low-fi prototyping, high-fi prototyping, and user testing.  </p>
                </div>
                <div class="column">
                    <h5> Project type: </h5>
                    <p> Professional project at summer internship. </p>
                </div>
            </div>
            <div class="descriptionRow">
                <div class="column">
                    <h5> Deliverables: </h5>
                    <p> User research, low-fi prototyping, high-fi prototyping, and user testing.  </p>
                </div>
                <div class="column">
                    <h5> Duration: </h5>
                    <p> 10 weeks. </p>
                </div>
            </div>
        </div>

        <hr>

        <div class = "processAndTools">
            <h4> Process: </h4>
            <img class="processPicture1" src = "images/process1.png" alt = "Process for the System Access Review Tool"/>

            <h4> Tools: </h4>
            <img class="toolsPicture1" src = "images/tools1.png" alt = "Tools Used for the System Access Review Tool"/>
        </div>

        <hr>

        <div class="problemSection">
            <h4> The Problem: </h4>

            <p>The access review process was manual, convoluted, and a major time waster for all employees involved.  We needed to automate part of this process with a new internal web application. </p>

            <p>Coordinators of these access reviews spent 15% of their weekly time working on these reviews. This is a huge productivity dampener, especially considering that these coordinators still have to fulfill their normal job functions outside of their access review responsibilities.  At the same time, reviewers had a hard time keeping track of which employees they are responsible for and whether they completed the access review for each employee.</p>
        </div>

        <div class="understandSection">
            <h4> Understand: </h4>

            <p> I sat down with employees that work in the access review process to get a better understanding of the process.  I learned about the pain points employees face as well as the needs and wants of our users. </p>

            <img class="frustrationsAndNeedsPics" src = "images/GRTfrustrations.png" alt = "Frustrations for the Access Review Tool"/>

            <img class="frustrationsAndNeedsPics" src = "images/GRTneeds.png" alt = "Needs for the Access Review Tool"/>
        </div>

        <div class="defineSection">
            <h4>Define: </h4>
            <p> After collecting information from user interviews and research I set out to define the MVP for our project. </p>

            <p>To improve the access review process for coordinators, our application needs:</p>

            <ul>
                <li> A way to generate new access review audits </li>
                <li> Send quick auto generated email reminders to managers to review access (nudge) </li>
                <li> Send quick auto generated email reminders to managers to review access (nudge) </li>
                <li>Ability to review ongoing access reviews and track manager progress</li>
                <li>Ability to view past access reviews</li>
            </ul>

            <p>To improve the access review process for reviewers, our application needs:</p>

            <ul>
                <li> A way for reviewers to see what employees they need to have reviewed </li>
                <li> Need a quick way for managers to approve/disapprove access </li>
            </ul>
        </div>

        <div class="ideateSection">
            <h4> Ideate: </h4>
            <p>Once I defined the problem and the solution, I started to sketch some ideas of what I wanted the site to look like. </p>
            <p>I had to keep in mind that:</p>

            <div class="reviewersAndCoordinatorsLists">
                <ul>
                    <p>Reviewers:</p>
                    <li>Needed to have a list of their employees whose access they are reviewing</li>
                    <li>May have to complete multiple different access reviews at the same time</li>
                </ul>
                <ul>
                    <p>Coordinators:</p>
                    <li>Needed to oversee the review process/the progress reviewers are making</li>
                    <li>Need a way to generate new access reviews</li>
                </ul>
            </div>
        </div>








    </div>


<?php
include("includes/footer.php");
?>


</body>
</html>
