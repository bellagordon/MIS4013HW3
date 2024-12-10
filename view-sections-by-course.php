<h1>Previous Admittance Information</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Admittance Record ID</th>
        <th>Nurse Name</th>
        <th>Doctor Name</th>
        <th>Room</th>
        <th>Day / Time</th>

      </tr>
    </thead>
    <tbody>
      <?php
    while ($section = $sections->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $section['nurse_id']; ?></td>
    <td><?php echo $section['nurse_name']; ?></td>
    <td><?php echo $section['doctor_name']; ?></td>
    <td><?php echo $section['room']; ?></td>
    <td><?php echo $section['day_time']; ?></td>
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
