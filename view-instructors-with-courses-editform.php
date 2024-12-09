<div class="modal fade" id="editSectionModal<?php echo $course['doctor_id']; ?>" tabindex="-1" aria-labelledby="editSectionModalLabel<?php echo $course['doctor_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editSectionModalLabel<?php echo $course['doctor_id']; ?>">Edit Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="iid<?php echo $course['doctor_id']; ?>" class="form-label">Doctor</label>
            <input type="text" class="form-control" id="iid<?php echo $course['doctor_id']; ?>" name="iid" value="<?php echo $course['doctor_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="cid<?php echo $course['doctor_id']; ?>" class="form-label">Patient</label>
            <input type="text" class="form-control" id="cid<?php echo $course['doctor_id']; ?>" name="cid" value="<?php echo $course['patient_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="sName<?php echo $course['doctor_id']; ?>" class="form-label">Nurse</label>
            <input type="text" class="form-control" id="sName<?php echo $course['doctor_id']; ?>" name="sName" value="<?php echo $course['nurse_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="room<?php echo $course['doctor_id']; ?>" class="form-label">Room</label> <!-- Fixed typo -->
            <input type="text" class="form-control" id="room<?php echo $course['doctor_id']; ?>" name="room" value="<?php echo $course['room']; ?>"> <!-- Fixed typo -->
          </div>
          <div class="mb-3">
            <label for="time<?php echo $course['doctor_id']; ?>" class="form-label">Day / Time</label>
            <input type="text" class="form-control" id="time<?php echo $course['doctor_id']; ?>" name="time" value="<?php echo $course['day_time']; ?>">
          </div>
          <input type="hidden" name="sid" value="<?php echo $course['nurse_id']; ?>"> <!-- Added hidden input -->
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
