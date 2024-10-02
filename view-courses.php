<h1>Courses</h1>
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
while ($course = $course->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $course['course_id']; ?></td>
    <td><?php echo $course['course_number']; ?></td>
    <td><?php echo $course['course_description']; ?></td>
     <td>
      <form>
        <form method="post" action="sections-by-course.php">
        <input type = "hidden" name = "cid" value ="<?php echo $course['course_id']; ?>">
  <button type="submit" class="btn btn-primary">Sections</button>
      </form>
   </td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
