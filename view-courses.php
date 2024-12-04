
<div class="row">
  <div class="col">
<h1 class="text-center">Patients</h1>
  </div>
  <div class="col-auto">
    <?php 
  include "view-courses-newform.php";
      ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-bordered border-info w-100">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Description</th>
        <th></th>
         <th></th>
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
        <?php 
  include "view-courses-editform.php";
        ?>
     </td>
    <td> 
      <form method="post" action="">
        <input type = "hidden" name = "cid" value ="<?php echo $course['patient_id']; ?>">
        <input type = "hidden" name ="actionType" value = "Delete">
        <button type="submit" class="btn btn-outline-info" onclick= "return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
          </svg>
        </button>
      </form>
    </td>
    <td>
      <form method="post" action="sections-by-course.php">
        <input type = "hidden" name = "cid" value ="<?php echo $course['patient_id']; ?>">
        <button type="submit" class="btn btn-light">Assigned Nurse</button>
      </form>
   </td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
