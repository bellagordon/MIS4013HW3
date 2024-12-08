
<select class="form-select" id="cid_<?php echo $instructor['doctor_id']; ?>" name="cid">
  <?php
  while ($patientItem = $patientList -> fetch_assoc()) {
     $selText = "";
     if ($selectedPatient == $patientItem['patient_id']) {
        $selText = " selected";
     }
  ?>
       <option value="<?php echo $patientItem['patient_id']; ?> " <?=$selText?> ><?php echo $patientItem['patient_name']; ?> </option>
  <?php
  }
  ?>
   </select> 
