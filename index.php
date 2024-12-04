
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="w-auto p-3">
<div class="card text-center" style="width: 30rem;">
  <div class="card-header">
    Hospital Database
  </div>
  <div class="card-body">
    <h1 class="card-title">Seattle Grace Hospital</h5>
    <p class="card-text text-lg-center">Welcome to the centralized database for managing doctor and patient information</p>
    <p class ="text-md-center">Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</p>
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
