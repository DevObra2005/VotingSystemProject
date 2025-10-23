<!-- Import Voter Modal -->
  <div class="modal fade" id="importVoterModal" tabindex="-1" aria-labelledby="importVoterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="importVoterModalLabel">Import Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body text-center">
          <div class="border border-2 border-secondary rounded p-4 d-flex flex-column justify-content-center align-items-center" style="height: 250px;">
            <i class="bi bi-cloud-upload" style="font-size: 50px; color: #999;"></i>
            <p class="mt-2 mb-2">Drag file to upload</p>
            <input type="file" id="fileUpload" class="d-none" />
            <label for="fileUpload" class="btn btn-primary mt-2">Choose File</label>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success" id="importBtn">Import</button>
        </div>
      </div>
    </div>
  </div>