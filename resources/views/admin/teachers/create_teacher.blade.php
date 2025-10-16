@extends('layouts.admin.app')

@section('title', 'শিক্ষক যোগ করুন')

@push('styles')
    <style>
        .header-green {
            background: #16a34a !important;
            color: white !important;
        }

        .submit-btn {
            background: #16a34a;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background: #15803d;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.3);
        }
    </style>
@endpush

@section('content')
    <div>
        <ol class="breadcrumb bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-chalkboard-user me-2"></i>শিক্ষক</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">শিক্ষক যোগ করুন</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-gradient bg-primary text-white py-3">
                    <h5 class="mb-0 text-white"> <i class="fa-solid fa-chalkboard-user me-2"></i> শিক্ষক যোগ করুন
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <!-- Row 1: Name Fields -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="full_name" class="form-label fw-semibold">
                                    পদবি
                                </label>
                                <input type="text" name="full_name" id="full_name" class="form-control"
                                    placeholder="শিক্ষকের পদবি লিখুন">
                            </div>

                            <div class="col-md-6">
                                <label for="first_name" class="form-label fw-semibold">
                                    শিক্ষকের পূর্ণ নামঃ <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="শিক্ষকের নামের প্রথম অংশ লিখুন" required>
                                <div class="invalid-feedback">এই ক্ষেত্রটি পূরণ করা আবশ্যক।</div>
                            </div>
                        </div>

                        <!-- Row 2: Father, Mother, Email -->
                        <div class="row g-3 mb-3">
                            <div class="col-lg-4 col-md-6">
                                <label for="father_name" class="form-label fw-semibold">বাবার নাম</label>
                                <input type="text" name="father_name" id="father_name" class="form-control"
                                    placeholder="শিক্ষকের বাবার নাম লিখুন">
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <label for="mother_name" class="form-label fw-semibold">মায়ের নাম</label>
                                <input type="text" name="mother_name" id="mother_name" class="form-control"
                                    placeholder="শিক্ষকের মায়ের নাম লিখুন">
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="email" class="form-label fw-semibold">ইমেইল (লগইন ইউজারনেম)</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="শিক্ষকের ইমেইল লিখুন">
                            </div>
                        </div>

                        <!-- Row 3: NID, Photo, Subject -->
                        <div class="row g-3 mb-3">
                            <div class="col-lg-4 col-md-6">
                                <label for="nid" class="form-label fw-semibold">শিক্ষকের আইডি</label>
                                <input type="text" name="nid" id="nid" class="form-control"
                                    placeholder="শিক্ষকের আইডি লিখুন">
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <label for="photo" class="form-label fw-semibold">শিক্ষকের ছবি</label>
                                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="subject" class="form-label fw-semibold">যে বিষয়ে জন্য নিযুক্ত</label>
                                <select name="subject" id="subject" class="form-select">
                                    <option selected value="">নির্বাচন করুন</option>
                                    <option value="bangla">বাংলা</option>
                                    <option value="english">ইংরেজি</option>
                                    <option value="math">গণিত</option>
                                    <option value="science">বিজ্ঞান</option>
                                    <option value="social">সমাজ</option>
                                    <option value="religion">ধর্ম</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row 4: Gender, Birth Date, National ID, Phone -->
                        <div class="row g-3 mb-3">
                            <div class="col-lg-3 col-md-6">
                                <label for="gender" class="form-label fw-semibold">পুরুষ / মহিলা</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option selected value="">নির্বাচন করুন</option>
                                    <option value="male">পুরুষ</option>
                                    <option value="female">মহিলা</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="birth_date" class="form-label fw-semibold">জন্ম তারিখ</label>
                                <input type="text" name="birth_date" id="birth_date" class="form-control"
                                    placeholder="শিক্ষকের জন্ম তারিখ">
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="national_id" class="form-label fw-semibold">জাতীয় পরিচয়পত্র নম্বর</label>
                                <input type="text" name="national_id" id="national_id" class="form-control"
                                    placeholder="শিক্ষকের জাতীয় পরিচয়পত্র নম্বর লিখুন">
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="phone" class="form-label fw-semibold">বৈবাহিক অবস্থা</label>
                                <select name="marital_status" id="phone" class="form-select">
                                    <option selected value="">নির্বাচন করুন</option>
                                    <option value="অবিবাহিত">অবিবাহিত</option>
                                    <option value="বিবাহিত">বিবাহিত</option>
                                    <option value="বিধবা">বিধবা</option>
                                    <option value="বিচ্ছিন্ন">বিচ্ছিন্ন</option>
                                    <option value="উল্লিখিত না">উল্লিখিত না</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row 5: Contact Numbers -->
                        <div class="row g-3 mb-3">
                            <div class="col-lg-3 col-md-6">
                                <label for="mobile" class="form-label fw-semibold">শিক্ষকের বেতন</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    placeholder="শিক্ষকের বেতন লিখুন">
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="phone_number" class="form-label fw-semibold">শিক্ষকের ফোন নম্বর</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control"
                                    placeholder="শিক্ষকের ফোন নম্বর লিখুন">
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="emergency_phone" class="form-label fw-semibold">জরুরী যোগাযোগ নম্বর</label>
                                <input type="text" name="emergency_phone" id="emergency_phone" class="form-control"
                                    placeholder="শিক্ষকের জরুরী যোগাযোগ নম্বর">
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label for="joining_date" class="form-label fw-semibold">যোগদানের তারিখ</label>
                                <input type="text" name="joining_date" id="joining_date" class="form-control"
                                    placeholder="শিক্ষকের যোগদানের তারিখ">
                            </div>
                        </div>

                        <!-- Row 6: Addresses (Full Width TextAreas) -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="present_address" class="form-label fw-semibold">বর্তমান ঠিকানা</label>
                                <textarea name="present_address" id="present_address" class="form-control" rows="2"
                                    placeholder="শিক্ষকের বর্তমান ঠিকানা লিখুন"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="permanent_address" class="form-label fw-semibold">শিক্ষকের স্থায়ী
                                    ঠিকানা</label>
                                <textarea name="permanent_address" id="permanent_address" class="form-control" rows="2"
                                    placeholder="শিক্ষকের স্থায়ী ঠিকানা লিখুন"></textarea>
                            </div>
                        </div>

                        <!-- Row 7: Merit, Skill, Note (Full Width TextAreas) -->
                        <div class="row g-3 mb-3">
                            <div class="col-lg-4 col-md-12">
                                <label for="merit" class="form-label fw-semibold">যোগ্যতা</label>
                                <textarea name="merit" id="merit" class="form-control" rows="2" placeholder="শিক্ষকের যোগ্যতা লিখুন"></textarea>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="skill" class="form-label fw-semibold">কর্মদক্ষতা</label>
                                <textarea name="skill" id="skill" class="form-control" rows="2"
                                    placeholder="শিক্ষকের কর্মদক্ষতা লিখুন"></textarea>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="note" class="form-label fw-semibold">মন্তব্য</label>
                                <textarea name="note" id="note" class="form-control" rows="2" placeholder="মন্তব্য লিখুন"></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 d-flex justify-content-end mx-3">
                            <button type="submit" class="btn btn-success btn-lg px-4">
                                <i class="fas fa-save me-2"></i>যুক্ত করুন
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        
        // jQuery UI Datepicker for Bengali dates
        $(document).ready(function() {
            if (typeof $.datepicker !== 'undefined') {
                $('#birth_date, #joining_date').datepicker({
                    dateFormat: 'dd/mm/yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100:+0'
                });
            }
        });
    </script>
@endpush