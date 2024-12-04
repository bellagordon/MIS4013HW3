<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="card text-bg-dark">
  <img src="https://i.pinimg.com/originals/bb/f4/36/bbf436ca82996113de846c2caea1cf22.jpg" class="card-img" style="height: 350px; width: auto; object-fit: cover; opacity: 0.5;">
  <div class="card-img-overlay">
    <div class="card text-center" style="background-color: rgba(255, 255, 255, 0.7); padding: 20px;">
      <div class="card-body">
        <h1 class="card-title text-center text-dark">Seattle Grace Hospital</h1>
        <h4 class="card-subtitle mb-2 text-body-secondary text-center text-dark">Seattle Grace Hospital is a renowned teaching hospital in Seattle, known for its groundbreaking medical advancements and exceptional patient care. With a dedicated team of skilled professionals, we strive to innovate, heal, and shape the future of medicine.</h4>
      </div>
    </div>   
  </div>
</div>

<div class="w-100 p-3">
  <div class="card text-center border-info border-start-0 rounded-end">
    <div class="card-header">
      <h2>Hospital Database</h2>
    </div>
    <div class="card-body">
      <h1 class="card-title fw-medium">Seattle Grace Hospital</h1>
      <h3 class="card-text fst-italic">Welcome to the centralized database for managing doctor and patient information</h3>
      <h6 class ="text-md-center fw-lighter">Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</h6>
    </div>
    <div class="card-footer text-body-primary text-center fw-medium">
      <h4 class="text-md-center">OR Schedule</h4>
    </div>
  </div>
</div>

<?php
include "timesheet.php";
include "view-footer.php";
?>
