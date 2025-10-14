@extends('layouts.admin.app')
@section('title', 'ছাত্র খানার টাকা জমার তালিকা')

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

            .col-md-4 {
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
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
            <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">ছাত্র খানার টাকা জমার তালিকা</li>
        </ol>
    </div>

    <div class="card shadow-sm mb-4 ">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">
                <i class="fa-solid fa-users me-2"></i> ছাত্র খানার টাকা জমার তালিকা
            </h5>
        </div>

        <div class="card-body mb-3">
            <form method="GET" class="w-100">
                <div class="row  align-items-end ">
                    <div class="col-md-8 d-flex flex-wrap gap-3 align-items-end ">
                        <div class="flex-grow-1">
                            <label for="class_select" class="form-label fw-bold">জামাত লিস্ট</label>
                            <select name="class_id" id="class_select" class="form-select" required>
                                <option value="" selected disabled>জামাত নির্বাচন করুন</option>
                                <option value="1">হেফখানা</option>
                                <option value="2">নাজেরা</option>
                                <option value="3">মক্তব</option>
                            </select>
                        </div>

                        <div class="flex-grow-1">
                            <label for="name_select" class="form-label fw-bold">ছাত্র-ছাত্রীর নাম</label>
                            <select name="student_id" id="name_select" class="form-select" required>
                                <option value="" selected disabled>ছাত্র/ছাত্রী নির্বাচন করুন</option>
                                <option value="1">রহিম</option>
                                <option value="2">করিম</option>
                                <option value="3">সাকিব</option>
                            </select>
                        </div>

                        <!-- সাবমিট বাটন -->
                        <button type="submit" class="btn b-r-22 btn-info px-4 flex-shrink-0">
                            ফলাফল দেখান
                        </button>
                    </div>
                </div>
            </form>
        </div>

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
                    <h5 class="mt-2 fw-semibold" style="color: #2c5f2d;">ছাত্র খানার টাকা জমার তালিকা</h5>
                </div>
                <div class="col-md-2 text-end">
                    <p class="mb-0 fw-semibold">সন ২০২৫ ইং</p>
                </div>
            </div>
        </div>

        {{-- student details --}}
        <div class="row p-3 mx-2">
            <!-- Left Column -->
            <div class="col-md-4 mb-3 mb-md-0">
                <p class="mb-2"><strong>ছাত্রের নামঃ</strong> আজান রহমান</p>
                <p class="mb-2"><strong>রোলঃ</strong> ১২১</p>
                <p class="mb-2"><strong>জামাতঃ</strong> নাজেরা</p>
            </div>
            <!-- Right Column -->
            <div class="col-md-4">
                <p class="mb-2"><strong>মাসিক ধার্যঃ</strong> ৫০০</p>
                <p class="mb-2"><strong>বর্ষঃ</strong> 01 Jan 2025</p>
                <p class="mb-2"><strong>ভর্তি নংঃ</strong> ২৩১</p>
            </div>
        </div>

        {{-- Table Section --}}
        <div class="table-responsive mx-3">
            <table class="table table-bordered  table-striped align-middle mb-0 print-table">
                <thead class="bg-primary print-thead">
                    {{-- মাস	তারিখ	বই নং	রসিদ নং	টাঃ পরিমান	গ্রহণকারী	মন্তব্য --}}
                    <tr class="text-center">
                        <th>মাস</th>
                        <th>তারিখ</th>
                        <th>বই নং</th>
                        <th>রসিদ নং</th>
                        <th>টাঃ পরিমান</th>
                        <th>গ্রহণকারী</th>
                        <th>মন্তব্য</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- জানুয়ারি --}}
                    <tr>
                        <td class="text-center">জানু:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- ফেব্রুয়ারি --}}
                    <tr>
                        <td class="text-center">ফেব্রু:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- মার্চ --}}
                    <tr>
                        <td class="text-center">মার্চ:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- এপ্রিল --}}
                    <tr>
                        <td class="text-center">এপ্রিল:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- মে --}}
                    <tr>
                        <td class="text-center">মে:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- জুন --}}
                    <tr>
                        <td class="text-center">জুন:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- জুলাই --}}
                    <tr>
                        <td class="text-center">জুলাই:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- আগস্ট --}}
                    <tr>
                        <td class="text-center">আগষ্ট:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- সেপ্টেম্বর --}}
                    <tr>
                        <td class="text-center">সেপ্টে:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- অক্টোবর --}}
                    <tr>
                        <td class="text-center">অক্টো:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- নভেম্বর --}}
                    <tr>
                        <td class="text-center">নভে:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

                    {{-- ডিসেম্বর --}}
                    <tr>
                        <td class="text-center">ডিসে:</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>

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
