
<h1 class="text-center">All Records</h1>

<!-- Container with blue background -->
<div style="padding: 20px;">
      <div></div> <!-- Empty div to balance the layout -->
<?php include "view-instructors-with-courses-newform.php" ?>
<div class="card-group" style="max-width: 800px; border: 2px solid #17a2b8; background-color: rgba(0, 123, 255, 0.1);">
  <?php
  while ($instructor = $instructors->fetch_assoc()) {
    ?>
  <div class="card border-info m-2" style="background-color: #ffffff;">
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
                 <li>
                      <?php include "view-instructors-with-courses-editform.php"; ?>  
                </li>
              <li>
                 <form method="post" action="">
              <input type="hidden" name="sid" value="<?php echo $course['nurse_id']; ?>">
              <input type = "hidden" name ="actionType" value = "Delete">
              <button type="submit" class="btn btn-outline-info" onclick= "return confirm('Are you sure?');">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
              </svg>
              </button>
                 </form>
              </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
    <?php
  }
  ?>

    <!-- Org Chart with border and opaque white background -->
    <div class="d-flex justify-content-center mb-3">
      <div class="card" style="width: 100%; max-width: 800px; border: 1px solid #17a2b8; background-color: rgba(255, 255, 255, 0.8);">
        <div class="card-body">
          <?php include "org-chart.php"; ?>
        </div>
      </div>
    </div>
</div>
