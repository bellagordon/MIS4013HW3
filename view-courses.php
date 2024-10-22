<div class="row">
  <div class="col">
    <h1>Patients</h1>
  </div>
  <div class="col-auto">
    <?php 
  include "view-courses-newform.php";
  ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($course = $courses->fetch_assoc()) {
  ?>
  <tr>
   <td><?php echo $course['patient_id']; ?></td>
    <td><?php echo $course['patient_name']; ?></td>
    <td><?php echo $course['patient_description']; ?></td>
     <td>
      <form method="post" action="sections-by-course.php">
        
        <input type = "hidden" name = "cid" value ="<?php echo $course['patient_id']; ?>">
  <button type="submit" class="btn btn-primary">Assigned Nurse</button>
      </form>
   </td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
