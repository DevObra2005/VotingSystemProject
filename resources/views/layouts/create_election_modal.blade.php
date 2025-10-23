<div class="modal fade" id="createElectionModal" tabindex="-1" aria-labelledby="createElectionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="createElectionModalLabel">Create Election</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form id="createElectionForm">
          @csrf
          <div class="mb-3">
            <label for="electionTitle" class="form-label">Election Title</label>
            <input type="text" class="form-control" id="electionTitle" name="title" placeholder="Enter election title" required>
          </div>
          <div class="mb-3">
            <label for="startDate" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="startDate" name="start_date" required>
          </div>
          <div class="mb-3">
            <label for="endDate" class="form-label">End Date</label>
            <input type="date" class="form-control" id="endDate" name="end_date" required>
          </div>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="createElectionBtn" class="btn btn-success">Create</button>
      </div>

    </div>
  </div>
</div>