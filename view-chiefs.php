
<div class="row">
  <div class="col">
      <h1>Head Surgeons</h1>
  </div>
  <div class="col-auto">
    <?php 
  include "view-chiefs-newform.php";
      ?>
  </div>
</div>


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
   <td><?php echo $chief['chief_id']; ?></td>
    <td><?php echo $chief['chief_name']; ?></td>
    <td><?php echo $chief['chief_dpt']; ?></td>
     <td>
 <form method="post" action="doctor-by-chief.php">
        
        <input type = "hidden" name = "cid" value ="<?php echo $chief['chief_id']; ?>">
  <button type="submit" class="btn btn-primary">Assigned Doctor</button>
      </form>
       
   </td>
  </tr>
  <?php
}
