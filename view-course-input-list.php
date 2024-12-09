
<select class="form-select" id="cid" name="cid">
<?php 
while ($courseItem = $courseList -> fetch_assoc()) {
  ?>
  <option value="<?php echo $courseItem['patient_id']; ?>"><?php echo $courseItem['patient_name']; ?></option>
  <?php
}
?>
  
</select>

