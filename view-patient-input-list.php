
<select class="form-select" id="iid_<?php echo $instructor['doctor_id']; ?>" name="iid">    
<?php while ($patientItem = $patientList->fetch_assoc()): ?>
        <option value="<?php echo htmlspecialchars($patientItem['doctor_id']); ?>" 
            <?php echo ($selectedPatient == $patientItem['patient_id']) ? 'selected' : ''; ?>>
            <?php echo htmlspecialchars($patientItem['patient_name']); ?>
        </option>
    <?php endwhile; ?>
</select>
