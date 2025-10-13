@extends('layouts.admin.app')

@section('title', 'নতুন ছাত্র/ছাত্রী যুক্ত করুন')

@push('styles')
    <style>
        /* date picker  */
        #birthDay,
        #admision_date {

            border: 1px solid #ced4da;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            color: #333;
            transition: 0.2s ease;
        }

        #birthDay:focus,
        #admision_date:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 4px rgba(13, 110, 253, 0.25);
            outline: none;
        }

        /* Calendar popup simple design */
        .ui-datepicker {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .ui-datepicker-header {
            background: #0d6efd;
            color: #fff;
            border-radius: 6px 6px 0 0;
            padding: 6px;
            text-align: center;
            font-weight: 500;
        }

        .ui-datepicker-calendar td a:hover {
            background-color: #e7f1ff;
            color: #0d6efd;
            border-radius: 4px;
        }


        .bg-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .card {
            transition: transform 0.2s;
        }

        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
    </style>
@endpush
@section('content')
   
        <div>
            <ol class="breadcrumb  bg-light-secondary p-2">
                <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী
                </li>
                <li aria-current="page" class="breadcrumb-item active fw-bold">নতুন ছাত্র/ছাত্রী যুক্ত করুন
                </li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">

                <!-- Main Form Card -->
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-gradient bg-primary text-white py-3">

                        <h5 class="mb-0 text-white"><i class="fas fa-clipboard-list me-2"></i>নতুন ছাত্র/ছাত্রী যুক্ত করুন
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="form.php" method="post" id="demo-form2" data-parsley-validate
                            class="needs-validation" novalidate>
                            @csrf

                            <div class="row g-4">
                                <!-- Left Column -->
                                <div class="col-lg-6">
                                    <!-- ছাত্রের নাম -->
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label fw-semibold">
                                            ছাত্রের নাম <span class="text-danger">*</span>
                                        </label>
                                        <input name="fname" type="text" id="first-name"
                                            class="form-control form-control-lg" placeholder="ছাত্রের পূর্ণ নাম লিখুন"
                                            required>
                                        <div class="invalid-feedback">এই ক্ষেত্রটি পূরণ করা আবশ্যক।</div>
                                    </div>

                                    <!-- জন্ম তারিখ -->
                                    <div class="mb-3">
                                        <label for="birthDay" class="form-label fw-semibold">ছাত্রের জন্ম তারিখ</label>
                                        <input name="birthDay" type="text" id="birthDay" class="form-control"
                                            placeholder="ছাত্রের জন্ম তারিখ">
                                    </div>

                                    <!-- রক্তের গ্রুপ -->
                                    <div class="mb-3">
                                        <label for="blood" class="form-label fw-semibold">রক্তের গ্রুপ (যদি জানা
                                            থাকে)</label>
                                        <select name="blood" id="blood" class="form-select">
                                            <option selected value="">নির্বাচন করুন</option>
                                            <option value="A+">A+</option>
                                            <option value="B+">B+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="O+">O+</option>
                                            <option value="A-">A-</option>
                                            <option value="B-">B-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>

                                    <!-- পিতার নাম -->
                                    <div class="mb-3">
                                        <label for="cname" class="form-label fw-semibold">পিতার নাম</label>
                                        <input type="text" id="cname" name="cname" class="form-control"
                                            placeholder="ছাত্রের পিতার নাম লিখুন">
                                    </div>

                                    <!-- মাতার নাম -->
                                    <div class="mb-3">
                                        <label for="mmname" class="form-label fw-semibold">মাতার নাম</label>
                                        <input type="text" id="mmname" name="mmname" class="form-control"
                                            placeholder="ছাত্রের মাতার নাম লিখুন">
                                    </div>

                                    <!-- পিতার পেশা -->
                                    <div class="mb-3">
                                        <label for="father_profesion" class="form-label fw-semibold">পিতার পেশা</label>
                                        <input type="text" id="father_profesion" name="father_profesion"
                                            class="form-control" placeholder="ছাত্রের পিতার পেশা লিখুন">
                                    </div>

                                    <!-- মোবাইল নম্বর -->
                                    <div class="mb-3">
                                        <label for="phone1" class="form-label fw-semibold">মোবাইল নম্বর
                                            (অভিভাবকের)</label>
                                        <input type="tel" name="phone1" id="phone1" class="form-control"
                                            placeholder="অভিভাবকের মোবাইল নম্বর লিখুন" pattern="[0-9]{11}">
                                    </div>

                                    <!-- অভিবাবকের সম্পর্ক -->
                                    <div class="mb-3">
                                        <label for="relation" class="form-label fw-semibold">অভিবাবকের নম্বরটি কার?</label>
                                        <input class="form-control" type="text" name="relation"
                                            placeholder="অভিবাবকের সাথে ছাত্রের সম্পর্ক" id="relation">
                                    </div>

                                    <!-- ই-মেইল -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">ই-মেইল (যদি থাকে)</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="অভিভাবকের ই-মেইল লিখুন">
                                    </div>

                                    <!-- বর্তমান ঠিকানা -->
                                    <div class="mb-3">
                                        <label for="address" class="form-label fw-semibold">বর্তমান ঠিকানা</label>
                                        <textarea type="text" id="address" name="address" class="form-control" rows="2"
                                            placeholder="বর্তমান ঠিকানা লিখুন"></textarea>
                                    </div>

                                    <!-- স্থায়ী ঠিকানা -->
                                    <div class="mb-3">
                                        <label for="address2" class="form-label fw-semibold d-flex align-items-center">
                                            স্থায়ী ঠিকানা
                                            <div class="form-check ms-3">
                                                <input type="checkbox" class="form-check-input" id="same_address"
                                                    value="yes">
                                                <label class="form-check-label fw-normal" for="same_address">বর্তমান
                                                    ঠিকানার অনুরুপ</label>
                                            </div>
                                        </label>
                                        <textarea type="text" name="address2" id="address2" class="form-control" rows="2"
                                            placeholder="স্থায়ী ঠিকানা লিখুন"></textarea>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-lg-6">
                                    <!-- ভর্তি তারিখ -->
                                    <div class="mb-3">
                                        <label for="admision_date" class="form-label fw-semibold">ভর্তি তারিখ</label>
                                        <input type="text" id="admision_date" name="date" class="form-control"
                                            placeholder="ভর্তি তারিখ">
                                    </div>

                                    <!-- ফরম নম্বর -->
                                    <div class="mb-3">
                                        <label for="form_number" class="form-label fw-semibold">ফরম নম্বর</label>
                                        <input type="number" id="form_number" name="form_number" class="form-control"
                                            placeholder="ভর্তি ফরম নম্বর লিখুন">
                                    </div>

                                    <!-- ভর্তি নম্বর -->
                                    <div class="mb-3">
                                        <label for="admission_number" class="form-label fw-semibold">ভর্তি নম্বর</label>
                                        <input type="number" id="admission_number" name="admission_number"
                                            class="form-control" placeholder="ভর্তি নম্বর লিখুন">
                                    </div>

                                    <!-- বেতনের পরিমান -->
                                    <div class="mb-3">
                                        <label for="coursefee" class="form-label fw-semibold">বেতনের পরিমান</label>
                                        <input type="number" id="coursefee" name="coursefee"
                                            placeholder="বেতনের পরিমান লিখুন" class="form-control">
                                    </div>

                                    <!-- জামাতের নাম -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">জামাতের নাম</label>
                                        <div class="groupAjaxUpdate"></div>
                                    </div>

                                    <!-- টাইপ নির্ধারণ -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold d-block">টাইপ নির্ধারণ করুন</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="group11"
                                                    id="group111" value="1">
                                                <label class="form-check-label" for="group111">নিজ খোরাকী</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="group11"
                                                    id="group112" value="2">
                                                <label class="form-check-label" for="group112">হাফ ফ্রি</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="group11"
                                                    id="group113" value="3">
                                                <label class="form-check-label" for="group113">ফুল ফ্রি</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- আবাসিক / অনাবাসিক -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold d-block">আবাসিক / অনাবাসিক</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="residential"
                                                    id="residential1" value="0">
                                                <label class="form-check-label" for="residential1">আবাসিক</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="residential"
                                                    id="residential2" value="1">
                                                <label class="form-check-label" for="residential2">অনাবাসিক</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- নতুন / পুরাতন -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold d-block">নতুন / পুরাতন</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="student_type"
                                                    id="student_type1" value="0">
                                                <label class="form-check-label" for="student_type1">নতুন</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="student_type"
                                                    id="student_type2" value="1">
                                                <label class="form-check-label" for="student_type2">পুরাতন</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- এতিম -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold d-block">ছাত্র / ছাত্রী টি কি এতিম ?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="etim" id="etim"
                                                value="1">
                                            <label class="form-check-label" for="etim">এতিম</label>
                                        </div>
                                    </div>

                                    <!-- বোর্ডিং এ খানা -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold d-block">বোর্ডিং এ খানা খায়?</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bording_food"
                                                    id="bording_food1" value="0">
                                                <label class="form-check-label" for="bording_food1">না</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bording_food"
                                                    id="bording_food2" value="1">
                                                <label class="form-check-label" for="bording_food2">হ্যা</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- খানার টাকা -->
                                    <div class="mb-3">
                                        <label for="food_bill" class="form-label fw-semibold">মাসিক খানার টাকার
                                            পরিমান</label>
                                        <input type="number" id="food_bill" name="food_bill" class="form-control"
                                            placeholder="মাসিক খানার টাকার পরিমান লিখুন">
                                    </div>

                                    <!-- মন্তব্য -->
                                    <div class="mb-3">
                                        <label for="school" class="form-label fw-semibold">নোট/মন্তব্য</label>
                                        <textarea name="school" id="school" rows="4" class="form-control"
                                            placeholder="ছাত্র সম্পর্কে মন্তব্য লিখুন"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button type="submit" name="submit" class="btn btn-success btn-lg px-4">
                                            <i class="fas fa-check-circle me-2"></i>ছাত্র/ছাত্রী যুক্ত করুন
                                        </button>
                                        <button type="reset" class="btn btn-warning btn-lg px-4">
                                            <i class="fas fa-redo me-2"></i>রিসেট
                                        </button>
                                        <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg px-4">
                                            <i class="fas fa-times-circle me-2"></i>বাতিল
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   


    @push('scripts')
        <script>
            $(document).ready(function() {
                $("#birthDay, #admision_date").datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+0"
                });

                // Same address checkbox functionality
                document.getElementById('same_address').addEventListener('change', function() {
                    if (this.checked) {
                        document.getElementById('address2').value = document.getElementById('address').value;
                    }
                });
            });
        </script>
    @endpush
@endsection
