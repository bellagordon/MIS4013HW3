<select class="form-select" id="iid" name="iid">
<?php 
while ($instructorItem = $instructorList -> fetch_assoc()) {
  ?>
  <option value="<?php echo $instructorItem['doctor_id']; ?>"><?php echo $instructorItem['doctor_name']; ?></option>
  <?php
}
?>
  
</select>
