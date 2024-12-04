
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="w-auto p-3">
 
<div class="card text-center">
  <div class="card-header">
    <h2>Hospital Database</h2>
  </div>
  <div class="card-body">
    <h1 class="card-title fw-medium">Seattle Grace Hospital</h1>
    <h3 class="card-text fst-italic">Welcome to the centralized database for managing doctor and patient information</h3>
    <h6 class ="text-md-center fw-lighter">Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</h5>
  </div>
  <div class="card-footer text-body-primary text-md-center">
          Today's Schedule
  </div>
</div>
</div>
<?php
 include "timesheet.php";
include "view-footer.php";
?>
