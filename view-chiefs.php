<h1>Head Surgeons with Doctors</h1>
<div class="card-group">


      <?php
while ($chief = $chiefs->fetch_assoc()) {
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chief['chief_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
  $chiefs = selectChiefs($instructor['doctor_id']);
  while ($chief = $chiefs ->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $course['patient_name']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?> </li>

    <?php
  }
  ?>
      </ul>   
      </p>
      <p class="card-text"><small class="text-body-secondary">Office : <?php echo $instructor['office_number']; ?>></p>
    </div>
  </div>
 
  <?php
}
        ?>
  </div>
