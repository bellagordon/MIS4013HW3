
<select class="form-select" id="iid_<?php echo $instructor['doctor_id']; ?>" name="iid">
  <?php
  while ($patientItem = $patientList -> fetch_assoc()) {
     $selText = "";
     if ($selectedPatient == $patientItem['nurse_id']) {
        $selText = " selected";
     }
  ?>
       <option value="<?php echo $patientrItem['nurse_id']; ?> " <?=$selText?> ><?php echo $patientItem['nurse_name']; ?> </option>
  <?php
  }
  ?>
   </select> 

