
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="card text-bg-dark">
  <img src="https://i.pinimg.com/originals/bb/f4/36/bbf436ca82996113de846c2caea1cf22.jpg" class="card-img" style="height: 350px; width: auto; object-fit: cover; opacity: 0.5;">
  <div class="card-img-overlay">
    <h1 class="card-title text-center">Seattle Grace Hospital</h1>
    <h3 class="card-text text-center">Seattle Grace Hospital is a renowned teaching hospital in Seattle, known for its groundbreaking medical advancements and exceptional patient care.With a dedicated team of skilled professionals, we strive to innovate, heal, and shape the future of medicine.</h3>
  </div>
  
<div class="w-auto p-3">
 
<div class="card text-center border-info">
  <div class="card-header">
    <h2>Hospital Database</h2>
  </div>
  <div class="card-body">
    <h1 class="card-title fw-medium">Seattle Grace Hospital</h1>
    <h3 class="card-text fst-italic">Welcome to the centralized database for managing doctor and patient information</h3>
    <h6 class ="text-md-center fw-lighter">Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</h5>
  </div>
  <div class="card-footer text-body-primary text-center fw-medium">
          Today's Schedule
  </div>
</div>
</div>
</div>
<?php
 include "timesheet.php";
include "view-footer.php";
?>
