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
