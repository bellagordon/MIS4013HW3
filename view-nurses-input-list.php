<select class="form-select" id="cid_<?php echo $course['patient_id']; ?>" name="cid">    
<?php while ($nurseItem = $nurseList->fetch_assoc()): ?>
        <option value="<?php echo htmlspecialchars($nurseItem['nurse_id']); ?>" 
            <?php echo ($selectedNurse == $nurseItem['nurse_id']) ? 'selected' : ''; ?>>
            <?php echo htmlspecialchars($nurseItem['nurse_name']); ?>
        </option>
    <?php endwhile; ?>
</select>
