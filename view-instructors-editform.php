<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editInstructorModal<?php echo $course['patient_id']; ?>" >
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
      </svg>
</button>


<div class="modal fade" id="editInstructorModal <?php echo $course['doctor_id']; ?>" tabindex="-1" aria-labelledby="editInstructorModalLabel <?php echo $instructor['doctor_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editInstructorModalLabel <?php echo $instructor['doctor_id']; ?>">Edit Doctor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="iName <?php echo $course['doctor_id']; ?>" class="form-label">Doctor Name</label>
              <input type="text" class="form-control" id="iName <?php echo $instructor ['doctor_id']; ?>" name="iName" value="<?php echo $course['doctor_name']; ?>" >
            </div>
           <div class="mb-3">
              <label for="iNum <?php echo $course['office_number']; ?>" class="form-label">Office Number</label>
              <input type="text" class="form-control" id="iNum <?php echo $instructor['doctor_id']; ?>" name="iNum" value = "<?php echo $course['office_number']; ?>" >
            </div>
             <input type="hidden" name="iid"> value = "<?php echo $course['doctor_id']; ?>" >
              <input type ="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
       </form>
      </div>
    </div>
  </div>
</div>
