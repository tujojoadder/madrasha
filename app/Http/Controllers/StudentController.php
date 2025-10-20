<?php

namespace App\Http\Controllers;

use App\DataTables\StudentsDataTable;
use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*   public function index()
    {
        return view('admin.students.students-list');
    } */
   
  
/*    public function index(Request $request)
   {
       if ($request->ajax()) {
           $students = Student::with(['bloodGroup', 'jamat'])
               ->select('students.*');
   
           return DataTables::of($students)
               ->addIndexColumn()
               ->addColumn('photo', function ($student) {
                   $photoUrl = $student->photo
                       ? asset('storage/' . $student->photo)
                       : 'https://via.placeholder.com/80';
                   $fileInputId = 'file' . $student->id;
   
                   return '
                   <div class="text-center" style="width: 120px;">
                       <img src="' . $photoUrl . '" alt="Student Photo" 
                           class="img-thumbnail mb-2 student-photo-' . $student->id . '" 
                           style="width: 80px; height: 80px; object-fit: cover;">
                       <label for="' . $fileInputId . '" class="btn btn-warning btn-sm w-100">
                           <i class="fa-solid fa-upload"></i> ছবি
                       </label>
                       <input type="file" id="' . $fileInputId . '" class="d-none photo-upload" 
                           data-student-id="' . $student->id . '" accept="image/*">
                   </div>
               ';
               })
               ->addColumn('details', function ($student) {
                   return '
                   <p class="mb-1">নাম : <strong>' . ($student->name ?? 'N/A') . '</strong></p>
                   <p class="mb-1">জন্ম তারিখ : <strong>' . ($student->birth_day ?? 'N/A') . '</strong></p>
                   <p class="mb-1">রক্তের গ্রুপ : <strong>' . ($student->bloodGroup->name ?? 'N/A') . '</strong></p>
                   <p class="mb-1">আইডি : <strong>' . ($student->id ?? 'N/A') . '</strong></p>
                   <p class="mb-1">ভর্তি তারিখ : <strong>' . ($student->admission_date ? \Carbon\Carbon::parse($student->admission_date)->format('d M Y') : 'N/A') . '</strong></p>
                   <p class="mb-1">অভিভাবকের নাম : <strong>' . ($student->father_name ?? 'N/A') . '</strong></p>
                   <p class="mb-1">ই-মেইল : <strong>' . ($student->email ?? 'N/A') . '</strong></p>
                   <p class="mb-1">অভিভাবকের ফোন : <strong>' . ($student->parents_phone ?? 'N/A') . '</strong></p>
               ';
               })
               ->addColumn('batch_info', function ($student) {
                   $timeSchedule = 'N/A';
                   if ($student->student_type === 'notun') {
                       $timeSchedule = '8:00 AM - 12:00 PM';
                   } elseif ($student->student_type === 'puraton') {
                       $timeSchedule = '1:00 PM - 5:00 PM';
                   }
   
                   $studentTypeBangla = [
                       'notun' => 'মর্নিং',
                       'puraton' => 'ডে'
                   ];
   
                   return '
                   <p class="mb-1">জামাত : <strong>' . ($student->jamat->name ?? 'N/A') . '</strong></p>
                   <p class="mb-1">টাইপ : <strong>' . ($studentTypeBangla[$student->student_type] ?? 'N/A') . '</strong></p>
                   <p class="mb-1">সময় : <strong>' . $timeSchedule . '</strong></p>
               ';
               })
               ->addColumn('account_summary', function ($student) {
                   // $totalPaid = $student->payments()->sum('amount');
                   $totalPaid = 0;
                   $courseFee = $student->coursefee ?? 0;
                   $due = $courseFee - $totalPaid;
   
                   return '
                   <p class="mb-1 text-success">সর্বমোট জমা : <strong>৳ ' . number_format($totalPaid, 0) . '</strong></p>
                   <p class="mb-1">কোর্স ফি : <strong>৳ ' . number_format($courseFee, 0) . '</strong></p>
                   <p class="mb-1 ' . ($due > 0 ? 'text-danger' : 'text-success') . '">মোট বাকি : <strong>৳ ' . number_format($due, 0) . '</strong></p>
               ';
               })
               ->addColumn('action_buttons', function ($student) {
                   return '
                   <button class="btn btn-primary btn-sm d-block mb-2 w-100" onclick="viewDetails(' . $student->id . ')">
                       <i class="fa-solid fa-eye"></i> বিস্তারিত
                   </button>
                   <button class="btn btn-success btn-sm d-block w-100" onclick="sendSMS(' . $student->id . ')">
                       <i class="fa-solid fa-message"></i> এস এম এস
                   </button>
               ';
               })
               ->addColumn('delete_button', function ($student) {
                   return '
                   <button class="btn btn-danger btn-sm" onclick="deleteStudent(' . $student->id . ')">
                       <i class="fa-solid fa-trash"></i> মুছুন
                   </button>
               ';
               })
               ->filterColumn('details', function ($query, $keyword) {
                   $query->where(function ($q) use ($keyword) {
                       $q->where('students.name', 'like', "%{$keyword}%")
                           ->orWhere('students.parents_phone', 'like', "%{$keyword}%")
                           ->orWhere('students.email', 'like', "%{$keyword}%")
                           ->orWhere('students.father_name', 'like', "%{$keyword}%")
                           ->orWhere('students.id', 'like', "%{$keyword}%")
                           ->orWhereHas('bloodGroup', function ($bq) use ($keyword) {
                               $bq->where('name', 'like', "%{$keyword}%");
                           });
                   });
               })
               ->filterColumn('batch_info', function ($query, $keyword) {
                   $query->orWhereHas('jamat', function ($q) use ($keyword) {
                       $q->where('name', 'like', "%{$keyword}%");
                   })->orWhere('student_type', 'like', "%{$keyword}%");
               })
               ->orderColumn('details', function ($query, $order) {
                   $query->orderBy('students.name', $order);
               })
               ->rawColumns(['photo', 'details', 'batch_info', 'account_summary', 'action_buttons', 'delete_button'])
               ->make(true);
       }
   
       return view('admin.students.students-list');
   } */
   
    public function index(StudentsDataTable $dataTable)
    {
        return $dataTable->render('admin.students.students-list');
    }







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
            'blood_group_id' => 'nullable|exists:blood_groups,id',
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
