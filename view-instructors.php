<h1>Doctors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Office</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($instructor = $instructors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $instructor['doctor_id']; ?></td>
    <td><?php echo $instructor['doctor_name']; ?></td>
    <td><?php echo $instructor['office_number']; ?></td>
<td><a href="courses-by-instructor.php?id=<?php echo $instructor['doctor_id']; ?>">Patients</a></td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
