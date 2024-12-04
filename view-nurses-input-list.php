<select class="form-select" id="sid" name="sid">
    <?php while ($nurseItem = $nurseList->fetch_assoc()): ?>
        <option value="<?php echo htmlspecialchars($nurseItem['nurse_id']); ?>">
            <?php echo htmlspecialchars($nurseItem['nurse_name']); ?>
        </option>
    <?php endwhile; ?>
</select>
