@extends('layouts.admin.app')
@section('title', 'শিক্ষকগণের মোবাইল নম্বর')

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
                padding: 4px 3px !important;
                text-align: center;
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
            <li aria-current="page" class="breadcrumb-item active fw-bold">শিক্ষকগণের মোবাইল নম্বর</li>
        </ol>
    </div>



 <!-- Right: Add Teacher button -->
    <div class=" text-md-end text-start m-3 mx-4 ">
        <a href="{{ route('create_teacher') }}" class="btn btn-danger text-white fw-bold">
            <i class="fa-solid fa-plus me-1"></i> নতুন শিক্ষক যুক্ত করুন
        </a>
    </div>

    {{-- card --}}
    <div class="card border-0 shadow-sm mb-4" id="printContent">
        <div class="card-body py-4">
            <!-- Header Section -->
            <div class="print-header row align-items-end mb-3">
                <div class="col-md-2 mb-2 text-center">
                    <img src="https://ui-avatars.com/api/?name=Mohtamjir&size=150&background=28a745&color=fff&bold=true"
                        alt="Logo" style="height: 80px; width:80px;" class="logo-img">
                </div>
                <div class="col-md-8 text-center">
                    <h3 class="mb-2 fw-bold">জামালুল কুরআন মাদরাসা</h3>
                    <p class="mb-1">৭৭, সগীষ সরকার রোড, শেখেরিয়া, ঢাকা-১২০৪, ফোনঃ ৪৭৪৪০২৯৬</p>
                    <h5 class="mt-2 fw-semibold" style="color: #2c5f2d;">শিক্ষকগণের মোবাইল নম্বর</h5>
                </div>

            </div>
        </div>

        {{-- Table Section --}}
        <div class="table-responsive card-body">
            <table class="table table-bordered table-striped align-middle mb-0 print-table text-center">
                <thead class="bg-primary print-thead">

                    <tr class="text-center">

                        {{-- নং	নাম	পদবী	মোবাইল নাম্বার --}}
                        <th>নং</th>
                        <th>নাম</th>
                        <th>পদবী</th>
                        <th>মোবাইল নাম্বার</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 100; $i++)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>হাঃকারী আবুল হাসান ইবনে সোহরাব</td>
                            <td class="text-center">মুহতামিম</td>
                            <td class="text-center">০১৯৮৩৫২৪৯৬৮</td>
                        </tr>
                    @endfor
                </tbody>

            </table>
        </div>

        {{-- Print Button --}}
        <div class="m-3 d-flex justify-content-end no-print">
            <button class="btn btn-primary fw-bold" onclick="printDocument()">
                <i class="fa-solid fa-print me-2"></i> প্রিন্ট করুন
            </button>
        </div>
    </div>
    @push('scripts')
    @endpush
    <script>
        function printDocument() {
            window.print();
        }

        window.addEventListener('beforeprint', function(event) {
            console.log('Before printing.');
        });

        window.addEventListener('afterprint', function(event) {
            console.log('After printing');
        });
    </script>
@endsection
