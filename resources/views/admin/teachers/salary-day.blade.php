@extends('layouts.admin.app')
@section('title', 'শিক্ষকগণের বেতন দিন')

@push('styles')
    <style>
        /* Print Styles */
        @media print {

            /* Hide everything except print content */
            body * {
                visibility: hidden;
            }

            /* visible content */
            #printContent,
            #printContent * {
                visibility: visible;
            }

            /* every text will be black */
            * {
                color: #000 !important;
            }

            table {
                background-color: white !important;
            }

            th,
            td {
                background-color: white !important;
                color: black !important;
            }

            /* Remove screen-only elements */
            .no-print,
            .btn,
            button,
            .navbar,
            .sidebar,
            .footer,
            nav,
            aside {
                display: none !important;
            }

            /* Position content */
            #printContent {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0 !important;
                padding: 0 !important;
                box-shadow: none !important;
                border: none !important;
            }

            /* Page Setup - সংকুচিত মার্জিন */
            @page {
                size: A4;
                margin: 10mm 8mm 10mm 8mm;
            }

            /* Header styling - শুধু প্রথম পেজে */
            .print-header {
                padding-bottom: 8px !important;
                margin-bottom: 10px !important;
                border-bottom: 1.5px solid #000;
            }

            .print-header .logo-img {
                width: 60px !important;
                height: 60px !important;
            }

            /* Table Styling - কম্প্যাক্ট */
            .print-table {
                width: 100%;
                border-collapse: collapse !important;
                font-size: 10px !important;
                page-break-inside: auto;
            }

            .print-table thead {
                display: table-header-group;
                background-color: #fff !important;
            }

            .print-table tbody {
                display: table-row-group;
            }

            .print-table th,
            .print-table td {
                border: 0.5px solid #333 !important;
                padding: 4px 0 4px 7px !important;

                line-height: 1.2 !important;
            }

            .print-table th {
                font-weight: bold !important;
                font-size: 10px !important;
                padding: 5px 3px !important;
            }

            /* Row breaks prevention */
            .print-table tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }

            /* Bootstrap Grid Fix */
            .row {
                display: flex !important;
            }

            .col-md-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            /* Text Alignment */
            .text-center {
                text-align: center !important;
            }

            .text-end {
                text-align: right !important;
            }

            /* Card styling */
            .card {
                border: none !important;
                box-shadow: none !important;
            }

            .card-body {
                padding: 8px 0 !important;
            }

            /* Font adjustments - ছোট সাইজ */
            h3 {
                font-size: 16px !important;
                margin-bottom: 4px !important;
                line-height: 1.2 !important;
            }

            h5 {
                font-size: 13px !important;
                margin-top: 4px !important;
                line-height: 1.2 !important;
            }

            p {
                font-size: 10px !important;
                margin-bottom: 2px !important;
                line-height: 1.2 !important;
            }



        }

        /* Screen only */
        @media screen {
            .print-only {
                display: none;
            }
        }
    </style>
@endpush
@section('content')

    <div>
        <ol class="breadcrumb bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-chalkboard-user me-2"></i>শিক্ষক</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">শিক্ষকগণের বেতন দিন</li>
        </ol>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">
                <i class="fa-solid fa-chalkboard-user me-2"></i> শিক্ষকগণের বেতন দিন
            </h5>
        </div>

        <div class="card-body mb-3">
            <div class="row  align-items-end mb-3">
                <!-- Left: Today date-->
                <div class="col-md-4">
                    <div>
                        <label for="today-day" class="form-label fw-semibold">তারিখ</label>
                        <input name="today-day" type="text" id="today-day" class="form-control">
                    </div>
                </div>
                <!-- Right: salary month -->
                <div class="col-md-4">
                    <div>
                        <label for="salay-month" class="form-label fw-semibold">কোন মাসে দিচ্ছে</label>
                        <input name="salay-month" type="text" id="salay-month" class="form-control">
                    </div>
                </div>
            </div>


            {{-- Table Section --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle mb-0 print-table">
                    <thead class="bg-primary print-thead">

                        {{-- নং	নাম	বেতন	মন্তব্য --}}
                        <tr>
                            <th class="text-center" style="width: 60px">নং</th>
                            <th>নাম</th>
                            <th class="text-center" style="width: 180px">বেতন</th>
                            <th class="text-center" style="width: 180px">মন্তব্য</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 3; $i++)
                            <tr>
                                <td class="text-center">{{ $i }}</td>
                                <td>শিক্ষককের নাম {{ $i }}</td>
                                <td class="text-center"> <input type="number" name="amount[]" class="form-control" value="{{ rand(15000, 20000) }}"></td>
                                <td class="text-center"><input type="text" name="note[]" placeholder="মন্তব্য লিখুন" class="form-control"></td>

                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            {{-- Print Button --}}
            <div class="mt-4 d-flex justify-content-end mx-3">
                <button type="submit" class="btn btn-success btn-lg px-4">
                    <i class="fas fa-save me-2"></i>বেতন যুক্ত করুন
                </button>
            </div>

        </div>




    </div>





@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            // Initialize today-date
            $("#today-day").datepicker({
                dateFormat: "d M yy", // e.g. 16 Oct 2025
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true
            });
            // Automatically set today date
            $("#today-day").datepicker('setDate', new Date());

            // Initialize salay-month
             $("#salay-month").datepicker({
                dateFormat: "M yy", // e.g.  Oct 2025
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true
            });

            // Automatically set today date
            $("#salay-month").datepicker('setDate', new Date());
        });
    </script>
@endpush
