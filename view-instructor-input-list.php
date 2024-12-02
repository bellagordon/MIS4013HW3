<select class="form-select" id="iid_<?php echo $chief['chief_id']; ?>" name="iid">
  <?php
  while ($instructorItem = $instructorList -> fetch_assoc()) {
     $selText = "";
     if ($selectedInstructor == $instructorItem['doctor_id']) {
        $selText = " selected";
     }
  ?>
       <option value="<?php echo $instructorItem['doctor_id']; ?> " <?=$selText?> ><?php echo $instructorItem['doctor_name']; ?> </option>
  <?php
  }
  ?>
   </select> 
