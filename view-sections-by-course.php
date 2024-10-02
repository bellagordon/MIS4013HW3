<h1>Sections by course</h1>
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
    while ($section = $sections->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $section['course_id']; ?></td>
    <td><?php echo $section['course_number']; ?></td>
    <td><?php echo $section['course_description']; ?></td>
    <td><?php echo $section['semester']; ?></td>
    <td><?php echo $section['room']; ?></td>
    <td><?php echo $section['day_time']; ?></td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
