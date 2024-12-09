<select class="form-select" id="iid" name="iid">
<?php 
while ($instructorItem = $instructorList -> fetch_assoc()) {
  $selText = "";
  if ($selectedInstructor == $instructorItem['doctor_id']) {
    $selText =" selected";
  }
  ?>
  <option value="<?php echo $instructorItem['doctor_id']; ?>" <?=$selText?>><?php echo $instructorItem['doctor_name']; ?></option>
  <?php
}
?>
  
</select>
