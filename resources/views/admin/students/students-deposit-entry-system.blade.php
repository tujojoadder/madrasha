@extends('layouts.admin.app')
@section('title', 'ছাত্র খানার টাকা জমার এন্ট্রি সিস্টেম')

@section('content')
    <div>
        <ol class="breadcrumb bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">ছাত্র খানার টাকা জমার এন্ট্রি সিস্টেম</li>
        </ol>
    </div>

    <div class="card shadow-sm mb-4 ">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">
                <i class="fa-solid fa-users me-2"></i> ছাত্র খানার টাকা জমার এন্ট্রি সিস্টেম
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

    <div class="card shadow b-t-4-secondary b-b-4-secondary">
        <div class="card-header">

            <h5 class="card-title fw-bold mb-3 text-primary"><i class="fa-solid fa-user-graduate me-1 "></i> ছাত্র
                তথ্য</h5>
            <div class="row">
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
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle mb-0 ">
                    <thead class="bg-primary">
                        <tr>
                            <th>মাস</th>
                            <th>তারিখ</th>
                            <th>বই নং</th>
                            <th>রশিদ নং</th>
                            <th>টাকা পরিমান</th>
                            <th>গ্রহণকারী</th>
                            <th>মন্তব্য</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>জানু</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="10">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="123">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="500">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="SR">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>ফেব্রু</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="10">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="124">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="500">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" value="Mr Kamal">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>মার্চ</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>এপ্রিল</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>মে</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="09 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>জুন</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>জুলাই</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>আগস্ট</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>সেপ্টেম্বর</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>অক্টোবর</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>নভেম্বর</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                        <tr>
                            <td>ডিসেম্বর</td>
                            <td>
                                <input type="text" class="form-control form-control-sm datepicker" value="15 Apr 2025"
                                    readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="বই নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="রশিদ নং লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="টাকা পরিমান লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="গ্রহণকারী লিখুন">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" placeholder="মন্তব্য লিখুন">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="m-3 text-end">
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-circle-check me-1"></i><strong>যুক্ত করুন</strong>
                </button>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.datepicker').datepicker({
                    dateFormat: 'dd M yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2020:2030'
                });
            });
        </script>
    @endpush
@endsection
