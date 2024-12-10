

<select class="form-select" id="cid" name="cid">
<?php 
while ($courseItem = $courseList -> fetch_assoc()) {
   $selText = "";
  if ($selectedCourse == $courseItem['patient_id']) {
    $selText =" selected";
  }
  ?>
  <option value="<?php echo $courseItem['patient_id']; ?>"><?php echo $courseItem['patient_name']; ?></option>
  <?php
}
?>
  
</select>
