<h1>Head Surgeons</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Department</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($chief = $chiefs->fetch_assoc()) {
  ?>
  <tr>
   <td><?php echo $chiefs['chief_id']; ?></td>
    <td><?php echo $chiefs['chief_name']; ?></td>
    <td><?php echo $chiefs['chief_dpt']; ?></td>
     <td>
      <form method="post" action="instructor.php">
        
        <input type = "hidden" name = "cid" value ="<?php echo $chief['doctor_id']; ?>">
  <button type="submit" class="btn btn-primary">Assigned doctor</button>
      </form>
   </td>
  </tr>
  <?php
}
