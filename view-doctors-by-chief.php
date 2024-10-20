<h1>Doctors by Head Surgeon</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
     

      </tr>
    </thead>
    <tbody>
      <?php
    while ($doctor = $doctors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $doctor['doctor_id']; ?></td>
    <td><?php echo $doctor['doctor_name']; ?></td>
   
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
