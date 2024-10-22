<div class="row">
  <div class="col">
    <h1>Patients</h1>
  </div>
  <div class="col-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
      </svg>
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
