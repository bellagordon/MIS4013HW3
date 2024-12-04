
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="w-auto p-3">
 
<div class="card text-bg-info mb-3 text-center border-light opacity-50">
  <div class="card-header">
    <h2>Hospital Database</h2>
  </div>
  <div class="card-body">
    <h1 class="card-title fw-medium">Seattle Grace Hospital</h1>
    <h3 class="card-text fst-italic">Welcome to the centralized database for managing doctor and patient information</h3>
    <h6 class ="text-md-center fw-lighter">Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</h5>
  </div>
  <div class="card-footer text-body-primary text-lg-center">
          Today's Schedule
  </div>
</div>
</div>
<div class="card text-bg-dark">
  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FGrace_Hospital_%2528Seattle%2529&psig=AOvVaw1pc9jADTE3sTmoVnb4crup&ust=1733372234490000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOC0x_SgjYoDFQAAAAAdAAAAABAE" class="card-img">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>
<?php
 include "timesheet.php";
include "view-footer.php";
?>
