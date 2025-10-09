<!-- Add Voter Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importVoterModal">
  Add Voter
</button>

<!-- Import Voter Modal -->
<div class="modal fade" id="importVoterModal" tabindex="-1" aria-labelledby="importVoterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="importVoterModalLabel">Import Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body text-center">
        <div class="border border-2 border-secondary rounded p-4" style="height: 250px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <i class="bi bi-cloud-upload" style="font-size: 50px; color: #999;"></i>
          <p class="mt-2">Drag file to upload</p>
          <input type="file" id="fileUpload" class="d-none" />
          <label for="fileUpload" class="btn btn-primary mt-2">Choose file</label>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" onclick="importVoter()">Import</button>
      </div>

    </div>
  </div>
</div>

<script>
  function importVoter() {
    const fileInput = document.getElementById("fileUpload");
    if (fileInput.files.length === 0) {
      alert("Please choose a file before importing!");
      return;
    }
    alert("File imported successfully: " + fileInput.files[0].name);
    
    // Close Modal
    let modal = bootstrap.Modal.getInstance(document.getElementById('importVoterModal'));
    modal.hide();
  }
</script>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
