@extends('layouts.admin')

@section('content')

<div class="container">
  <h3 class="mb-4 fw-bold">Elections Management</h3>
  <p>This is where you will manage and create elections.</p>

  <!-- Create Election Button -->
  <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createElectionModal">
    <i class="bi bi-plus-lg"></i> Create Election
  </button>

  @include('layouts.create_election_modal')

  <!-- Elections Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr>
          <th>Created By</th>
          <th>Title</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th class="status">Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="electionTableBody">
        <tr>
          <td>Administrator</td>
          <td>2025 Student Council Election</td>
          <td>2024-09-01</td>
          <td>2024-09-07</td>
          <td>Upcoming</td>
          <td class="text-center">
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Administrator</td>
          <td>2024 Midterm Election</td>
          <td>2024-05-01</td>
          <td>2024-05-07</td>
          <td>Completed</td>
          <td class="text-center">
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection