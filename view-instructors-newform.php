
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newInstructorModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newInstructorModal" tabindex="-1" aria-labelledby="newInstructorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="nnewInstructorModalLabel">New Doctor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="iName" class="form-label">Doctor Name</label>
              <input type="text" class="form-control" id="iName" name="iName">
            </div>
           <div class="mb-3">
              <label for="iNum" class="form-label">Office Number</label>
              <input type="text" class="form-control" id="iNum" name="iNum">
            </div>
              <input type ="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
       </form>
      </div>
    </div>
  </div>
</div>

