@extends('layouts.app')

@section('content')
    <h2>Student Details</h2>
    <p><strong>Name:</strong> {{ $student->student }}</p>
    <p><strong>Course:</strong> {{ $student->course }}</p>
    <p><strong>Fees:</strong> {{ $student->fee }}</p>
    <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
@endsection
