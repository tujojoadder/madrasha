@extends('layouts.admin.app')

@section('title', 'ছাত্র/ছাত্রী লিস্ট')

@push('styles')
    <style>
        /* DataTables spacing and layout */
        .dataTables_filter {
            margin-bottom: 15px;
        }

        .dataTables_length {
            margin-bottom: 15px;
            padding-left: 10px;
        }

        .dataTables_length label {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dataTables_info {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .dataTables_paginate {
            margin-top: 10px;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-clipboard-list me-2"></i>ছাত্র/ছাত্রী লিস্ট
                    </h5>
                    <a href="{{ route('create-student') }}" class="btn btn-danger text-white fw-bold">
                        <i class="fa-solid fa-plus me-1"></i> নতুন ছাত্র/ছাত্রী যুক্ত করুন
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        {{ $dataTable->table(['class' => 'display w-100 row-callback-datatable dataTable no-footer']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush