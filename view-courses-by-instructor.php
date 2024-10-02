<h1>Courses by instructor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th>Semester</th>
        <th>Room</th>
        <th>Day / Time</th>

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
    <td><?php echo $course['semester']; ?></td>
    <td><?php echo $course['room']; ?></td>
    <td><?php echo $course['day_time']; ?></td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
