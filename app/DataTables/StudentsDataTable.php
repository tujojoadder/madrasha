<?php

namespace App\DataTables;

use App\Models\Student;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class StudentsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
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
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Student $model): QueryBuilder
    {
        return $model->newQuery()
            ->with(['bloodGroup', 'jamat'])
            ->select('students.*');
    }

    /**
     * Optional method to configure the DataTable HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('file-export-datatable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0, 'asc')
            ->parameters([
                'processing' => true,
                'serverSide' => true,
                'language' => [
                    'processing' => '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>',
                    'search' => 'খুঁজুন: ',
                    'lengthMenu' => 'প্রতি পেজে &nbsp; _MENU_ ',
                    'info' => '_TOTAL_ টি থেকে _START_ - _END_ দেখানো হচ্ছে',
                    'infoEmpty' => 'কোন এন্ট্রি নেই',
                    'infoFiltered' => '(মোট _MAX_ টি থেকে ফিল্টার)',
                    'loadingRecords' => 'লোড হচ্ছে...',
                    'zeroRecords' => 'কোন ডেটা পাওয়া যায়নি',
                    'emptyTable' => 'টেবিলে কোন ডেটা নেই',
                    'paginate' => [
                        'first' => 'প্রথম',
                        'previous' => 'পূর্ববর্তী',
                        'next' => 'পরবর্তী',
                        'last' => 'শেষ'
                    ]
                ],
                'pageLength' => 10,
                'order' => []
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('photo')
                ->title('ছবি')
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
            Column::make('details')
                ->title('বিবরণ')
                ->orderable(false)
                ->searchable(true),
            Column::make('batch_info')
                ->title('ব্যাচ নং , বিষয়, সময়')
                ->orderable(false)
                ->searchable(true),
            Column::make('account_summary')
                ->title('এ্যাকাউন্ট সংক্ষিপ্তসার')
                ->orderable(false)
                ->searchable(false),
            Column::make('action_buttons')
                ->title('বিস্তারিত')
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
            Column::make('delete_button')
                ->title('মুছুন')
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Students_' . date('YmdHis');
    }
}
