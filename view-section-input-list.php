


<select class="form-select" id="sid" name="sid">
<?php 
while ($sectionItem = $sectionList -> fetch_assoc()) {
  ?>
  <option value="<?php echo $sectionItem['nurse_id']; ?>"><?php echo $sectionItem['nurse_name']; ?></option>
  <?php
}
?>
  
</select>

