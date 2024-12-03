
<?php
$pageTitle = "Home";
include "view-header.php";
?>
        <h1>Seattle Grace Hospital Database</h1>
        <p>Welcome to the centralized database for managing doctor and patient information</p>
            <p>Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</p>
            <p>Today's Schedule</p>
       
<?php
 include "timesheet.php";
include "view-footer.php";
?>
