@extends('layouts.app')

@section('content')
    <h2>Student List</h2>
    <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->fee }}</td>
                    <td>
                        <a href="{{ route('student.show', $student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('student.destroy', $student->id) }}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            @method('DELETE') <!-- This line indicates the request method -->
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
