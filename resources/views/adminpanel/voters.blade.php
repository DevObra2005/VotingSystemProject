@extends('layouts.admin')

@section('content')
<div class="container">
  <h3 class="mb-4 fw-bold">Voters Management</h3>
  <p>This is where you will manage voters.</p>

  <!-- Voter Stats -->
  <div class="d-flex gap-3 mb-4">
    <div class="card-blue p-3 flex-fill text-center">
      <small>Total Voters</small>
      <div class="metric-number fs-4 fw-bold">{{ $data['totalVoters'] }}</div>
    </div>
  </div>

  <!-- Add Voter Button -->
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#importVoterModal">
    <i class="bi bi-plus-lg"></i> Add Voter
  </button>

  @include('layouts.import_voter_modal')

  <!-- Voters Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr>
          <th>Voter ID</th>
          <th>Name</th>
          <th>Grade Level</th>
          <th>Section</th>
        </tr>
      </thead>
      <tbody id="voterTable">
        <!-- Sample Data -->
        <tr>
          <td>{{ $data['id'] }}</td>
          <td>{{ $data['name'] }}</td>
          <td>{{ $data['grade'] }}</td>
          <td>{{ $data['section'] }}</td>
        </tr>
        <tr>
          <td>{{ $data['id2'] }}</td>
          <td>{{ $data['name2'] }}</td>
          <td>{{ $data['grade2'] }}</td>
          <td>{{ $data['section2'] }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
