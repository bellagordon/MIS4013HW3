<h1>Patients by Doctor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th>Nurse</th>
      <th>Doctor</th>
        <th>Room</th>
        <th>Day / Time </th>
        
      

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
    <td><?php echo $course['nurse_id']; ?></td>
    <td><?php echo $course['doctor_id']; ?></td>
    <td><?php echo $course['room']; ?></td>
    <td><?php echo $course['day_time']; ?></td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
