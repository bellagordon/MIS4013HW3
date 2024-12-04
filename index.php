
<?php
$pageTitle = "Home";
include "view-header.php";
?>

<div class="card text-center">
  <div class="card-header">
    Hospital Database
  </div>
  <div class="card-body">
    <h5 class="card-title">Seattle Grace Hospital</h5>
    <p class="card-text">Welcome to the centralized database for managing doctor and patient information</p>
    <p>Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</p>
  </div>
  <div class="card-footer text-body-secondary">
          Today's Schedule
  </div>
</div>
       
<?php
 include "timesheet.php";
include "view-footer.php";
?>
