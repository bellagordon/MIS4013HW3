
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
    while ($instructor = $instructors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $instructor['doctor_id']; ?></td>
    <td><?php echo $instructor['doctor_name']; ?></td>
   
  </tr>
  <?php
}
        ?>
    </tbody>
  </table>
</div>
