<h1>Instructors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($instructor = $instructors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $course['course_id']; ?></td>
    <td><?php echo $course['course_number']; ?></td>
    <td><?php echo $course['course_description']; ?></td>

  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
