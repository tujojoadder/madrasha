@extends('layouts.admin.app')

@section('title', 'নতুন ছাত্র/ছাত্রী যুক্ত করুন')

@push('styles')
    <style>
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

    {{-- message --}}
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show d-flex align-items-center fw-bold" role="alert"
            id="success-alert">
            <i class="fa fa-check-circle me-2"></i> <!-- Font Awesome icon -->
           {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('success-alert').remove();
            }, 3000); 
        </script>
    @endif


    <div class="row">
        <div class="col-12">

            <!-- Main Form Card -->
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-gradient bg-primary text-white py-3">

                    <h5 class="mb-0 text-white"><i class="fas fa-clipboard-list me-2"></i>নতুন ছাত্র/ছাত্রী যুক্ত করুন
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('students.store') }}" method="post" id="demo-form2" data-parsley-validate
                        class="needs-validation" novalidate>
                        @csrf

                        <div class="row g-4">
                            <!-- Left Column -->
                            <div class="col-lg-6">
                                <!-- ছাত্রের নাম -->
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">
                                        ছাত্রের নাম <span class="text-danger">*</span>
                                    </label>
                                    <input name="name" type="text" id="name" class="form-control"
                                        placeholder="ছাত্রের পূর্ণ নাম লিখুন" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- জন্ম তারিখ -->
                                <div class="mb-3">
                                    <label for="birth_day" class="form-label fw-semibold">ছাত্রের জন্ম তারিখ</label>
                                    <input name="birth_day" type="text" id="birth_day" class="form-control"
                                        placeholder="ছাত্রের জন্ম তারিখ" value="{{ old('birth_day') }}" autocomplete="off">
                                </div>

                                <!-- রক্তের গ্রুপ -->
                                <div class="mb-3">
                                    <label for="blood_group" class="form-label fw-semibold">রক্তের গ্রুপ (যদি জানা
                                        থাকে)</label>
                                    <select name="blood_group" id="blood_group" class="form-select">
                                        <option selected value="">নির্বাচন করুন</option>
                                        <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+
                                        </option>
                                        <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+
                                        </option>
                                        <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+
                                        </option>
                                        <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+
                                        </option>
                                        <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-
                                        </option>
                                        <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-
                                        </option>
                                        <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-
                                        </option>
                                        <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-
                                        </option>
                                    </select>
                                </div>

                                <!-- পিতার নাম -->
                                <div class="mb-3">
                                    <label for="father_name" class="form-label fw-semibold">পিতার নাম</label>
                                    <input type="text" id="father_name" name="father_name" class="form-control"
                                        placeholder="ছাত্রের পিতার নাম লিখুন" value="{{ old('father_name') }}">
                                </div>

                                <!-- মাতার নাম -->
                                <div class="mb-3">
                                    <label for="mother_name" class="form-label fw-semibold">মাতার নাম</label>
                                    <input type="text" id="mother_name" name="mother_name" class="form-control"
                                        placeholder="ছাত্রের মাতার নাম লিখুন" value="{{ old('mother_name') }}">
                                </div>

                                <!-- পিতার পেশা -->
                                <div class="mb-3">
                                    <label for="father_profesion" class="form-label fw-semibold">পিতার পেশা</label>
                                    <input type="text" id="father_profesion" name="father_profesion" class="form-control"
                                        placeholder="ছাত্রের পিতার পেশা লিখুন" value="{{ old('father_profesion') }}">
                                </div>

                                <!-- মোবাইল নম্বর -->
                                <div class="mb-3">
                                    <label for="parents_phone" class="form-label fw-semibold">মোবাইল নম্বর
                                        (অভিভাবকের)</label>
                                    <input type="tel" name="parents_phone" id="parents_phone" class="form-control"
                                        placeholder="অভিভাবকের মোবাইল নম্বর লিখুন" pattern="[0-9]{11}"
                                        value="{{ old('parents_phone') }}">
                                </div>

                                <!-- অভিবাবকের সম্পর্ক -->
                                <div class="mb-3">
                                    <label for="relation" class="form-label fw-semibold">অভিবাবকের নম্বরটি কার?</label>
                                    <input class="form-control" type="text" name="relation"
                                        placeholder="অভিবাবকের সাথে ছাত্রের সম্পর্ক" id="relation"
                                        value="{{ old('relation') }}">
                                </div>

                                <!-- ই-মেইল -->
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">ই-মেইল (যদি থাকে)</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="অভিভাবকের ই-মেইল লিখুন" value="{{ old('email') }}">
                                </div>

                                <!-- বর্তমান ঠিকানা -->
                                <div class="mb-3">
                                    <label for="current_address" class="form-label fw-semibold">বর্তমান ঠিকানা</label>
                                    <textarea type="text" id="current_address" name="current_address" class="form-control" rows="2"
                                        placeholder="বর্তমান ঠিকানা লিখুন">{{ old('current_address') }}</textarea>
                                </div>

                                <!-- স্থায়ী ঠিকানা -->
                                <div class="mb-3">
                                    <label for="permanent_address"
                                        class="form-label fw-semibold d-flex align-items-center">
                                        স্থায়ী ঠিকানা
                                        <div class="form-check ms-3">
                                            <input type="checkbox" class="form-check-input" id="same_address"
                                                value="yes">
                                            <label class="form-check-label fw-normal" for="same_address">বর্তমান ঠিকানার
                                                অনুরুপ</label>
                                        </div>
                                    </label>
                                    <textarea type="text" name="permanent_address" id="permanent_address" class="form-control" rows="3"
                                        placeholder="স্থায়ী ঠিকানা লিখুন">{{ old('permanent_address') }}</textarea>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-lg-6">
                                <!-- ভর্তি তারিখ -->
                                <div class="mb-3">
                                    <label for="admission_date" class="form-label fw-semibold">ভর্তি তারিখ</label>
                                    <input name="admission_date" type="text" id="admission_date" class="form-control"
                                        placeholder="ছাত্রের জন্ম তারিখ" value="{{ old('ভর্তি তারিখ') }}"
                                        autocomplete="off">
                                </div>

                                <!-- ফরম নম্বর -->
                                <div class="mb-3">
                                    <label for="form_number" class="form-label fw-semibold">ফরম নম্বর</label>
                                    <input type="number" id="form_number" name="form_number" class="form-control"
                                        placeholder="ভর্তি ফরম নম্বর লিখুন" value="{{ old('form_number') }}">
                                </div>

                                <!-- ভর্তি নম্বর -->
                                <div class="mb-3">
                                    <label for="admission_number" class="form-label fw-semibold">ভর্তি নম্বর</label>
                                    <input type="number" id="admission_number" name="admission_number"
                                        class="form-control" placeholder="ভর্তি নম্বর লিখুন"
                                        value="{{ old('admission_number') }}">
                                </div>

                                <!-- বেতনের পরিমান -->
                                <div class="mb-3">
                                    <label for="coursefee" class="form-label fw-semibold">বেতনের পরিমান</label>
                                    <input type="number" id="coursefee" name="coursefee"
                                        placeholder="বেতনের পরিমান লিখুন" class="form-control"
                                        value="{{ old('coursefee') }}">
                                </div>

                                <!-- জামাতের নাম -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold d-block">জামাতের নাম</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jamat_id"
                                                id="jamat_id1" value="1"
                                                {{ old('jamat_id') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="jamat_id1">হেফখানা</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jamat_id"
                                                id="jamat_id2" value="2"
                                                {{ old('jamat_id') == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="jamat_id2">নাজেরা</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jamat_id"
                                                id="jamat_id3" value="3"
                                                {{ old('jamat_id') == '3' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="jamat_id3">মক্তব</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- টাইপ নির্ধারণ -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold d-block">টাইপ নির্ধারণ করুন</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meal_type"
                                                id="meal_type1" value="nij_khoraki"
                                                {{ old('meal_type') == 'nij_khoraki' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meal_type1">নিজ খোরাকী</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meal_type"
                                                id="meal_type2" value="half_free"
                                                {{ old('meal_type') == 'half_free' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meal_type2">হাফ ফ্রি</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="meal_type"
                                                id="meal_type3" value="full_free"
                                                {{ old('meal_type') == 'full_free' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meal_type3">ফুল ফ্রি</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- আবাসিক / অনাবাসিক -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold d-block">আবাসিক / অনাবাসিক</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="residential"
                                                id="residential1" value="abasik"
                                                {{ old('residential') == 'abasik' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="residential1">আবাসিক</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="residential"
                                                id="residential2" value="onabashik"
                                                {{ old('residential') == 'onabashik' ? 'checked' : '' }}>
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
                                                id="student_type1" value="notun"
                                                {{ old('student_type') == 'notun' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="student_type1">নতুন</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="student_type"
                                                id="student_type2" value="puraton"
                                                {{ old('student_type') == 'puraton' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="student_type2">পুরাতন</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- এতিম -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold d-block">ছাত্র / ছাত্রী টি কি এতিম ?</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="etim" id="etim0"
                                                value="no" {{ old('etim') == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="etim0">না</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="etim" id="etim1"
                                                value="yes" {{ old('etim') == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="etim1">এতিম</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- বোর্ডিং এ খানা -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold d-block">বোর্ডিং এ খানা খায়?</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bording_food"
                                                id="bording_food1" value="no"
                                                {{ old('bording_food') == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="bording_food1">না</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bording_food"
                                                id="bording_food2" value="yes"
                                                {{ old('bording_food') == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="bording_food2">হ্যা</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- খানার টাকা -->
                                <div class="mb-3">
                                    <label for="food_bill" class="form-label fw-semibold">মাসিক খানার টাকার পরিমান</label>
                                    <input type="number" id="food_bill" name="food_bill" class="form-control"
                                        placeholder="মাসিক খানার টাকার পরিমান লিখুন" value="{{ old('food_bill') }}">
                                </div>

                                <!-- মন্তব্য -->
                                <div class="mb-3">
                                    <label for="note" class="form-label fw-semibold">নোট/মন্তব্য</label>
                                    <textarea name="note" id="note" rows="4" class="form-control"
                                        placeholder="ছাত্র সম্পর্কে মন্তব্য লিখুন">{{ old('note') }}</textarea>
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
                $("#birth_day, #admission_date").datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+0"
                });

                // Same address checkbox functionality
                document.getElementById('same_address').addEventListener('change', function() {
                    if (this.checked) {
                        document.getElementById('permanent_address').value = document.getElementById(
                            'current_address').value;
                    } else {
                        document.getElementById('permanent_address').value = '';
                    }
                });
            });
        </script>
    @endpush
@endsection
