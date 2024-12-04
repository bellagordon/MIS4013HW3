
<h1 class="text-center">Doctors</h1>
<div class="card-group">

  <?php
  while ($instructor = $instructors->fetch_assoc()) {
    ?>
    <div class="card border-info mb-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo $instructor['doctor_name']; ?></h5>
        <p class="card-text">Office: <?php echo $instructor['office_number']; ?></p>
        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $instructor['doctor_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $instructor['doctor_id']; ?>">
          View Patients
        </button>
        <div class="collapse mt-3" id="collapse<?php echo $instructor['doctor_id']; ?>">
          <div class="card card-body">
            <ul class="list-group">
              <?php
              $courses = selectCoursesByInstructor($instructor['doctor_id']);
              while ($course = $courses->fetch_assoc()) {
                ?>
                <li class="list-group-item">
                  <?php echo $course['patient_name']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>
<!-- Adding Nurses Section -->
<div class="card-group">
  <?php
  // Assuming $courses is already fetched in the first loop, ensure that courses have been reset or fetched again
  $courses = selectCoursesByInstructor($instructor['doctor_id']);  // Fetch the courses again if needed
  
  while ($course = $courses->fetch_assoc()) { // Loop through each course (patient)
    ?>
    <div class="card border-info mb-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo $course['patient_name']; ?></h5>
        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $course['patient_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $course['patient_id']; ?>">
          View Nurses
        </button>
        <div class="collapse mt-3" id="collapse<?php echo $course['patient_id']; ?>">
          <div class="card card-body">
            <ul class="list-group">
              <?php
              // Fetch sections (nurses) based on the course (patient)
              $sections = selectSectionsByCourse($course['patient_id']);
              if ($sections->num_rows > 0) { // Check if there are any nurses assigned to this patient
                while ($section = $sections->fetch_assoc()) {
                  ?>
                  <li class="list-group-item">
                    <?php echo $section['nurse_name']; ?> - <?php echo $section['room']; ?> - <?php echo $section['day_time']; ?>
                  </li>
                  <?php
                }
              } else {
                echo "<li class='list-group-item'>No nurses assigned.</li>";
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>
<div class="d-flex justify-content-center mb-3">
  <div class="card" style="max-width: 800px; border: 2px solid #17a2b8; background-color: rgba(0, 123, 255, 0.1);">
    <div class="card-body">
      <?php 
      include "org-chart.php";
      ?>
    </div>
  </div>
</div>
