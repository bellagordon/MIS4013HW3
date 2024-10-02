<h1>Instructors with courses</h1>
<div class="card-group">


      <?php
while ($instructor = $instructors->fetch_assoc()) {
  ?>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
      <p class="card-text">
  <?php
  $courses + selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses ->fetch_assoc()) {
    ?>
    <?php
  }
  ?>
        
      </p>
      <p class="card-text"><small class="text-body-secondary">Office : <?php echo $instructor['office_number']; ?>></p>
    </div>
  </div>
 
  <?php
}
        ?>
  </div>
