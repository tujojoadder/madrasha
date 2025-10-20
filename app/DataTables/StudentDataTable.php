<?php

namespace App\DataTables;

use App\Models\Student;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class StudentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('photo', function ($student) {
                return view('admin.students.partials.photo', compact('student'))->render();
            })
            ->addColumn('details', function ($student) {
                return view('admin.students.partials.details', compact('student'))->render();
            })
            ->addColumn('batch_info', function ($student) {
                return view('admin.students.partials.batch-info', compact('student'))->render();
            })
            ->addColumn('account', function ($student) {
                return view('admin.students.partials.account', compact('student'))->render();
            })
            ->addColumn('actions', function ($student) {
                return view('admin.students.partials.actions', compact('student'))->render();
            })
            ->addColumn('delete', function ($student) {
                return view('admin.students.partials.delete', compact('student'))->render();
            })
            ->rawColumns(['photo', 'details', 'batch_info', 'account', 'actions', 'delete']);
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Student $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('students-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1, 'asc')
            ->parameters([
                'language' => [
                    'processing' => 'প্রক্রিয়াকরণ...',
                    'search' => 'খুঁজুন:',
                    'lengthMenu' => 'প্রদর্শন _MENU_ টি এন্ট্রি',
                    'info' => 'প্রদর্শন _START_ থেকে _END_ পর্যন্ত _TOTAL_ টি এন্ট্রি',
                    'infoEmpty' => 'প্রদর্শন 0 থেকে 0 পর্যন্ত 0 টি এন্ট্রি',
                    'infoFiltered' => '(মোট _MAX_ টি এন্ট্রি থেকে ফিল্টার করা হয়েছে)',
                    'loadingRecords' => 'লোড হচ্ছে...',
                    'zeroRecords' => 'কোন রেকর্ড পাওয়া যায়নি',
                    'emptyTable' => 'টেবিলে কোন ডেটা নেই',
                    'paginate' => [
                        'first' => 'প্রথম',
                        'previous' => 'পূর্ববর্তী',
                        'next' => 'পরবর্তী',
                        'last' => 'শেষ'
                    ]
                ],
                'pageLength' => 10,
            ]);
    }

    /**
     * Get columns.
     */
    protected function getColumns()
    {
        return [
            Column::make('photo')
                ->title('ছবি')
                ->orderable(false)
                ->searchable(false)
                ->width(150)
                ->addClass('text-center'),
            Column::make('details')
                ->title('বিবরণ')
                ->name('name'),
            Column::make('batch_info')
                ->title('ব্যাচ নং , বিষয়, সময়')
                ->name('batch')
                ->orderable(false),
            Column::make('account')
                ->title('এ্যাকাউন্ট সংক্ষিপ্তসার')
                ->orderable(false)
                ->searchable(false),
            Column::make('actions')
                ->title('বিস্তারিত')
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
            Column::make('delete')
                ->title('মুছুন')
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
        ];
    }
}