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
  while ($instructor = $instructors ->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $instructor['doctor_name']; ?> </li>

    <?php
  }
  
 
  <?php
}
        ?>
  </div>
