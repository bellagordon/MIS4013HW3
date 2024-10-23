<div class="row">
  <div class="col">
    <h1>Doctors</h1>
  </div>
  <div class="col-auto">
    <?php 
  include "view-instructors-newform.php";
      ?>
  </div>
</div>
<div class="card-group">


      <?php
while ($instructor = $instructors->fetch_assoc()) {
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['doctor_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
  $courses = selectCoursesByInstructor($instructor['doctor_id']);
  while ($course = $courses ->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $course['patient_name']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?> </li>

    <?php
  }
  ?>
      </ul>   
      </p>
      <p class="card-text"><small class="text-body-secondary">Office : <?php echo $instructor['office_number']; ?>></p>
    </div>
  </div>
 
  <?php
}
        ?>
  </div>
