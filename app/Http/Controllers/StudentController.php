<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.students.students-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.create-student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
    public function studentsByJamat()
    {
        return view('admin.students.students-by-jamat');
    }
    public function admissionRegisterByJamat()
    {
        return view('admin.students.admission-register-by-jamat');
    }
    public function admissionReportByJamat()
    {
        return view('admin.students.admission-report-by-jamat');
    }
    public function studentsListByBloodGroup()
    {
        return view('admin.students.students-list-by-bloodgroup');
    }
}
