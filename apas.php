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

            <h4> Goal </h4>

            <p> Design an internal web application with a positive user experience that improves the efficiency of system access reviews at L3Harris Technologies. This is a new application that needed designed and deployed in the span of the summer of 2019. </p>

        </div>

        <hr>

        <div class="fourDescriptions">
            <div class="descriptionRow">
                <div class="column">
                    <h5> My role: </h5>
                    <p> UX Designer working on a team with 4 other UX Designers.  </p>
                    <p> <strong> Responsible for: </strong> Contextual Interviews, Creating a Persona, Affinity Mapping, Low-Fi Sketching, Paper Prototyping, Mid-Fi Prototype, Hi-Fi Prototype, Heuristic Evaluation, Usability Testing  </p>
                </div>
                <div class="column">
                    <h5> Project type: </h5>
                    <p> HCI Design School Project </p>
                </div>
            </div>
            <div class="descriptionRow">
                <div class="column">
                    <h5> Deliverables: </h5>
                    <p> Contextual Interviews, Persona, Affinity Map, Low-Fi Sketches, Paper Prototype, Mid-Fi Prototype, Hi-Fi Prototype, Heuristic Evaluation, Usability Tests  </p>
                </div>
                <div class="column">
                    <h5> Duration: </h5>
                    <p> 8 weeks </p>
                </div>
            </div>
        </div>

        <hr>

        <div class = "processAndTools">
            <h4> Process: </h4>
            <img class="processPicture3" src = "images/process3.png" alt = "Process for the Any Person Any Activity"/>

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

        <hr>

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

            <div class="grtUISketches">
                <img class="GRTsketches" src = "images/GRTsketch1a.png" alt = "Manager UI Sketch 1"/>
                <img class="GRTsketches" src = "images/GRTsketch2a.png" alt = "Manager UI Sketch 2"/>
                <img class="GRTsketches" src = "images/GRTsketch3a.png" alt = "Coordinator UI Sketch 1"/>
                <img class="GRTsketches" src = "images/GRTsketch4a.png" alt = "Coordinator UI Sketch 2"/>
            </div>

            <div class="PInotice">
                <p><em>NOTICE:</em> Because it is considered proprietary information, I am not allowed to show any part of the actual sketches or wire frames that I created for this project, as they may contain sensitive information that the company does not permit any of its employees to share.  What you see here are representations of the sketches and wire frames that I created for this project, with a slightly altered color scheme and all pertinent details removed.</p>
            </div>

            <div class ="GRTMockupsContainer">
                <div class="GRTMockupPicsColumn">
                    <img class="GRTMockupPics" src = "images/CoordinatorMockup.png" alt = "Wireframe of Coordinator Page"/>
                    <img class="GRTMockupPics" src = "images/ManagerMockup.png" alt = "Wireframe of Manager Page"/>
                </div>
                <div class="GRTMockupPicCaption">
                    <p>After sketching, I created the wireframes for the main pages of the app.  The coordinator page in which they can view the specific details of a particular access review and the reviewer page where they choose to verify or revoke access for the employees in their review.  This allowed me to start developing my design further and get a better grasp of the features and workflows of the UI.</p>
                    <p><em>These wireframes were originally created with balsamiq, but because I needed to recreate them for this portfolio, I needed to use MockFlow since I do not have a license to use balsamiq.</em></p>
                </div>
            </div>
        </div>

            <hr>

            <div class="prototypeSection">
                <h4> Prototype: </h4>

                <p>Using Axure, I created a high-fidelity prototype of the web application.  These screens represent the typical workflow a user of the application would go through to complete their tasks.  Coordinators have the necessary pages to review different access reviews and see details about each individual one and managers have a clean, easy-to-use UI to allow them to quickly complete their review.</p>

                <p>NOTICE: Because it is considered proprietary information, I am not allowed to show any part of the actual hi-fidelity prototype I created for this project as they may contain sensitive information that the company does not permit any of its employees to share.  What you see below are representations of the hi-fi prototype I created for this project, with a slightly altered color scheme and all pertinent details removed.</p>

                <h6>Coordinator UI</h6>
                <div class="coordinatorPrototypeUIPicGroup">
                    <img class="coordinatorPrototypeUIPics" src = "images/coordinatorP1.png" alt = "First Prototype of Coordinator Page"/>
                    <img class="coordinatorPrototypeUIPics" src = "images/coordinatorP3.png" alt = "Third Prototype of Coordinator Page"/>
                    <img class="coordinatorPrototypeUIPics" src = "images/coordinatorP2.png" alt = "Second Prototype of Coordinator Page"/>
                </div>

                <p>These UIs represent the core function of the coordinator's job:  oversee all of the different reviews happening and their details at a high level, drill down and view the specific details of each review, and start a new review.</p>

                <h6>Reviewer UI</h6>
                <div class="coordinatorPrototypeUIPicGroup">
                    <img class="coordinatorPrototypeUIPics" src = "images/reviewerP1.png" alt = "First Prototype of Reviewer Page"/>
                    <img class="coordinatorPrototypeUIPics" src = "images/reviewerP2.png" alt = "Second Prototype of Reviewer Page"/>
                </div>

                <p>The reviewers' core function in the access review process is to actually review the access of the users assigned to them.  These UIs allow them to see the different access reviews they need to complete and then proceed to do so one at a time.</p>
            </div>

            <hr>

            <div class="validateSection">
                <h4>Validate:</h4>

                <p>I tested the high-fidelity prototype on 7 users to gather feedback from coordinators and reviewers.</p>

                <p>I received positive feedback and a few call-outs that I addressed after testing. For example:</p>

                <ul>
                    <li>The visibility of the "Review History" button was poor when I initially tested the prototype.  I corrected this by making it the same size as the "Start New Review" Button and moving it beside said button, as you can see in the Coordinator Landing Page</li>
                    <li>Initially on the Reviewing Page there were multiple check boxes that needed to be confirmed before a user could submit.  After users mentioned that it felt clunky and slowed down their workflow, I reduced it to one confirmation checkbox</li>
                    <li>Most users said they believe this application will provide an "incredible improvement" over the current access review process</li>
                </ul>
            </div>

            <hr>

            <div class = "futureConsiderationsSections">
                <h4>Futer Considerations:</h4>

                <p>Due to the nature of this project (summer intern project), the discovery time for this project was very short.  Because of this, I did not have as strong of an understanding of the requirements and scope of this project as I would have liked to.  I believe more discovery time in the beginning would allow me to have a more productive ideate phase, as I would have a better since of what we are designing for in the beginning</p>

                <p>At one point in this project, I got very caught up in working on the fine details of the high-fi prototype prior to validation.  Because of this, I neglected to consider putting time aside to prepare for user testing, which led to me rushing to prepare for tests, conduct user tests, and get the results back to my team.  For the future, I plan on keeping all stages of the design process in mind throughout my projects, so that I give each phase the time and effort it needs.</p>
            </div>

            <hr>

            <div class = "TakeawaysSections">
                <h4>Takeaways:</h4>

                <p>This was my first time working on a professional project and it provided me with an excellent experience.  I had the opportunity to develop professionally and grow as a person.  Here's how:</p>

                <ul>
                    <li>I had the opportunity to work on an Agile Scrum team with two developers and a systems engineer</li>
                    <li>I improved my skills in every stage of the design process, from discovery to validation</li>
                    <li>I gained experience working in a professional setting and now better understand the business aspects of Information Technology</li>
                    <li>I learned how to be a better teammate, communicator, and leader because of this project</li>
                </ul>

                <p>Most of all, I was able to work with some amazing and talented people.  We were able to create a web application that is currently being used by the company to boost efficiency and productivity, something that is already making a real-world impact. For those reasons and more, my first professional experience in UX proved to be incredibly rewarding and fulfilling.</p>
            </div>

    </div>



<?php
include("includes/footer.php");
?>


</body>
</html>
