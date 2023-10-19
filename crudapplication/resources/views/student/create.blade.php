@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Add New Student</div>
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="student">Student Name:</label>
                    <input type="text" name="student" class="form-control" placeholder="Enter student's name">
                </div>
                <div class="form-group">
                    <label for="course">Course:</label>
                    <input type="text" name="course" class="form-control" placeholder="Enter student's course">
                </div>
                <div class="form-group">
                    <label for="fee">Fee:</label>
                    <input type="number" name="fee" class="form-control" placeholder="Enter student's fee">
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection






