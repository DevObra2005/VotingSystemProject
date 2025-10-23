@extends('layouts.student')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="mb-3" >Active Elections</h1>
                <div class="card shadow ">
                    <div class="card-header bg-danger fw-bold text-center text-light fs-4">{{ $title }}</div>
                    <div class="card-body text-center">
                        <p>Your vote is your voice — make it count! Support the leaders who reflect your values and ideas for a better school community. 
                        Together, we can build a brighter and more inclusive future.</p>

                        <p class="my-0"><strong>Starts:</strong> September 1, 2025, 9:30 AM</p>
                        <p class="my-0"><strong>Ends:</strong> September 1, 2025, 5:30 PM</p>

                        <a href="{{ route('student.cast_votes') }}" class="btn btn-primary btn-lg mt-5">Vote Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
