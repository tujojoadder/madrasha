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
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_day' => 'nullable|string',
            'blood_group' => 'nullable|in:A+,B+,AB+,O+,A-,B-,AB-,O-',
            'father_name' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'father_profesion' => 'nullable|string|max:255',
            'parents_phone' => 'nullable|string|max:15',
            'relation' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'current_address' => 'nullable|string',
            'permanent_address' => 'nullable|string',
            'admission_date' => 'nullable|string',
            'form_number' => 'nullable|integer',
            'admission_number' => 'nullable|integer',
            'coursefee' => 'nullable|numeric|min:0',
            'jamat_id' => 'nullable|in:1,2,3',
            'meal_type' => 'nullable|in:nij_khoraki,half_free,full_free',
            'residential' => 'nullable|in:abasik,onabashik',
            'student_type' => 'nullable|in:notun,puraton',
            'etim' => 'nullable|in:yes,no',
            'bording_food' => 'nullable|in:yes,no',
            'food_bill' => 'nullable|numeric|min:0',
            'note' => 'nullable|string'
        ]);

        $validated['created_by'] = auth()->check() ? auth()->id() : null;
        $validated['updated_by'] = auth()->check() ? auth()->id() : null;
        $validated['manage_by'] = auth()->check() ? auth()->id() : null;
        $validated['prepared_by'] = auth()->check() ? auth()->id() : null;


        // Create the student
        $student = Student::create($validated);

        return redirect()->back()->with('success', 'ছাত্র/ছাত্রী সফলভাবে সংযুক্ত করা হয়েছে!');
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
    public function parentsNumberByJamat()
    {
        return view('admin.students.parents-number-by-jamat');
    }
    public function studentsDepositEntrySystem()
    {
        return view('admin.students.students-deposit-entry-system');
    }
    public function studentsDepositList()
    {
        return view('admin.students.students-deposit-list');
    }
    public function studentsDepositRegister()
    {
        return view('admin.students.students-deposit-register');
    }
    public function admissionForm()
    {
        return view('admin.students.admission-form');
    }
}
