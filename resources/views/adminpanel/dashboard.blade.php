@extends('layouts.admin')

@section('content')
    <h3 class="fw-bold mb-4">Dashboard</h3>
    <h3 class="lead mb-4">Welcome, {{ Auth::user()->name }}</h3>


    <div class="d-flex gap-3 mb-4">
      <div class="card-blue p-3 flex-fill">
        <small>Total Voters</small>
        <div class="metric-number">{{ $data['totalVoters'] }}</div>
      </div>
      <div class="card-green p-3 flex-fill">
        <small>Active Election</small>
        <div class="metric-number">{{ $data['activeElection'] }}</div>
      </div>
      <div class="card-red p-3 flex-fill">
        <small>Completed Election</small>
        <div class="metric-number">{{ $data['completedElection'] }}</div>
      </div>
    </div>

    <div class="upcoming-election">
      <h6>Upcoming Election</h6>
      <p class="mb-0">{{ $data['upcoming'] }}</p>
    </div>
@endsection
