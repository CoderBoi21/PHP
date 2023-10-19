<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::latest()->paginate(5); // Assuming you have a "Student" model.
        return view('student.index', compact('students'))->with('i',(request()->input('page',1)-1)*5); // Pass the "students" variable to the view.
    }

    public function create()
    {
        return view('student.create'); // Change 'contacts.create' to 'student.create'.
    }

    public function store(Request $request)
    {
        $input = $request->all();
        student::create($input); // Change 'Contact' to 'Student'.
        return redirect('student')->with('flash_message', 'Student Added!'); // Change 'contact' to 'student'.
    }

    public function show($id)
    {
        $student = student::find($id); // Change 'Contact' to 'Student'.
        return view('student.show')->with('student', $student); // Change 'contacts.show' to 'student.show', and 'contacts' to 'student'.
    }

    public function edit($id)
    {
        $student = student::find($id); // Change 'Contact' to 'Student'.
        return view('student.edit')->with('student', $student); // Change 'contacts.edit' to 'student.edit', and 'contacts' to 'student'.
    }

    public function update(Request $request, $id)
    {
        $student = student::find($id); // Change 'Contact' to 'Student'.
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!'); // Change 'contact' to 'student'.
    }

    public function destroy($id)
    {
        student::destroy($id); // Change 'Contact' to 'Student'.
        return redirect('student')->with('flash_message', 'Student deleted!'); // Change 'contact' to 'student'.
    }
}
