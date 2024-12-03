
<select class="form-select" id="iid_<?php echo $instructor['doctor_id']; ?>" name="iid">
  <?php
  while ($patientItem = $patientList -> fetch_assoc()) {
     $selText = "";
     if ($selectedPatient == $patientItem['patient_id']) {
        $selText = " selected";
     }
  ?>
       <option value="<?php echo $patientItem['patient_id']; ?>" <?=$selText?> ><?php echo $patientItem['patient_name']; ?> </option>
  <?php
  }
  ?>
   </select> 

