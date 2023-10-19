@extends('layouts.app')

@section('content')
    <h2>Edit Student</h2>
    <form method="POST" action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student">Name:</label>
            <input type="text" class="form-control" id="student" name="student" value="{{ $student->student }}">
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}">
        </div>
        <div class="form-group">
            <label for="fee">Fee:</label>
            <input type="text" class="form-control" id="fee" name="fee" value="{{ $student->fee }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
@endsection
