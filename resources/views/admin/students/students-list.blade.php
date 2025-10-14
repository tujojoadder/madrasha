@extends('layouts.admin.app')

@section('title', 'ছাত্র/ছাত্রী লিস্ট      ')

@section('content')

    <div>
        <ol class="breadcrumb  bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী
            </li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">ছাত্র/ছাত্রী লিস্ট
            </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> <i class="fas fa-clipboard-list me-2"></i>ছাত্র/ছাত্রী লিস্ট </h5>
                    <a href="{{ route('create-student') }}" class="btn btn-danger text-white fw-bold">
                        <i class="fa-solid fa-plus me-1"></i> নতুন ছাত্র/ছাত্রী যুক্ত করুন
                    </a>
                </div>
                <div class="card-body">
                    <!-- Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-4 mb-sm-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="নাম অথবা ফোন নম্বর দিয়ে খুঁজুন...">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info w-100 b-r-22">
                                <i class="fa-solid fa-search"></i> খুঁজুন
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle mb-0">
                            <thead class="bg-primary">
                                <tr>
                                    <th style="width: 150px;" class="text-center">ছবি</th>
                                    <th>বিবরণ</th>
                                    <th>ব্যাচ নং , বিষয়, সময়</th>
                                    <th>এ্যাকাউন্ট সংক্ষিপ্তসার</th>
                                    <th class="text-center">বিস্তারিত</th>
                                    <th class="text-center">মুছুন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center" style="width: 120px;">
                                        <img src="https://via.placeholder.com/80" alt="Student Photo"
                                            class="img-thumbnail mb-2"
                                            style="width: 80px; height: 80px; object-fit: cover;">
                                        <label for="file1" class="btn btn-warning btn-sm w-100">
                                            <i class="fa-solid fa-upload"></i> ছবি আপলোড
                                        </label>
                                        <input type="file" id="file1" class="d-none">
                                    </td>
                                    <td>
                                        <p class="mb-1">নাম : <strong>আজান রহমান</strong></p>
                                        <p class="mb-1">জন্ম তারিখ : <strong>04 Jun 2015</strong></p>
                                        <p class="mb-1">রক্তের গ্রুপ : <strong>O+</strong></p>
                                        <p class="mb-1">আইডি : <strong>28</strong></p>
                                        <p class="mb-1">ভর্তি তারিখ : <strong>01 Jan 2025</strong></p>
                                        <p class="mb-1">অভিভাবকের নাম : <strong>মইফুদ্দর রহমান</strong></p>
                                        <p class="mb-1">ই-মেইল : <strong>example@email.com</strong></p>
                                        <p class="mb-1">অভিভাবকের ফোন : <strong>01712345678</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1">জামাত : <strong>নার্সেরা</strong></p>
                                        <p class="mb-1">টাইপ : <strong>মর্নিং</strong></p>
                                        <p class="mb-1">সময় : <strong>8:00 AM - 12:00 PM</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1 text-success">সর্বমোট জমা : <strong>৳ 8,000</strong></p>
                                        <p class="mb-1">কোর্স ফি : <strong>৳ 10,000</strong></p>
                                        <p class="mb-1 text-danger">মোট বাকি : <strong>৳ 2,000</strong></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-secondary btn-sm d-block mb-2 w-100">
                                            <i class="fa-solid fa-eye"></i> বিস্তারিত
                                        </button>
                                        <button class="btn btn-success btn-sm d-block w-100">
                                            <i class="fa-solid fa-message"></i> এস এম এস
                                        </button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i> মুছুন
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center" style="width: 120px;">
                                        <img src="https://via.placeholder.com/80" alt="Student Photo"
                                            class="img-thumbnail mb-2"
                                            style="width: 80px; height: 80px; object-fit: cover;">
                                        <label for="file2" class="btn btn-warning btn-sm w-100">
                                            <i class="fa-solid fa-upload"></i> ছবি আপলোড
                                        </label>
                                        <input type="file" id="file2" class="d-none">
                                    </td>
                                    <td>
                                        <p class="mb-1">নাম : <strong>সালমা খাতুন</strong></p>
                                        <p class="mb-1">জন্ম তারিখ : <strong>15 Mar 2016</strong></p>
                                        <p class="mb-1">রক্তের গ্রুপ : <strong>B+</strong></p>
                                        <p class="mb-1">আইডি : <strong>29</strong></p>
                                        <p class="mb-1">ভর্তি তারিখ : <strong>01 Jan 2025</strong></p>
                                        <p class="mb-1">অভিভাবকের নাম : <strong>আব্দুল করিম</strong></p>
                                        <p class="mb-1">ই-মেইল : <strong>salma@email.com</strong></p>
                                        <p class="mb-1">অভিভাবকের ফোন : <strong>01812345678</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1">জামাত : <strong>ওয়ান</strong></p>
                                        <p class="mb-1">টাইপ : <strong>ডে</strong></p>
                                        <p class="mb-1">সময় : <strong>1:00 PM - 5:00 PM</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1 text-success">সর্বমোট জমা : <strong>৳ 5,000</strong></p>
                                        <p class="mb-1">কোর্স ফি : <strong>৳ 10,000</strong></p>
                                        <p class="mb-1 text-danger">মোট বাকি : <strong>৳ 5,000</strong></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-primary btn-sm d-block mb-2 w-100">
                                            <i class="fa-solid fa-eye"></i> বিস্তারিত
                                        </button>
                                        <button class="btn btn-success btn-sm d-block w-100">
                                            <i class="fa-solid fa-message"></i> এস এম এস
                                        </button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i> মুছুন
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center" style="width: 120px;">
                                        <img src="https://via.placeholder.com/80" alt="Student Photo"
                                            class="img-thumbnail mb-2"
                                            style="width: 80px; height: 80px; object-fit: cover;">
                                        <label for="file3" class="btn btn-warning btn-sm w-100">
                                            <i class="fa-solid fa-upload"></i> ছবি আপলোড
                                        </label>
                                        <input type="file" id="file3" class="d-none">
                                    </td>
                                    <td>
                                        <p class="mb-1">নাম : <strong>রহিম উদ্দিন</strong></p>
                                        <p class="mb-1">জন্ম তারিখ : <strong>22 Aug 2015</strong></p>
                                        <p class="mb-1">রক্তের গ্রুপ : <strong>A+</strong></p>
                                        <p class="mb-1">আইডি : <strong>30</strong></p>
                                        <p class="mb-1">ভর্তি তারিখ : <strong>01 Jan 2025</strong></p>
                                        <p class="mb-1">অভিভাবকের নাম : <strong>করিম উদ্দিন</strong></p>
                                        <p class="mb-1">ই-মেইল : <strong>rahim@email.com</strong></p>
                                        <p class="mb-1">অভিভাবকের ফোন : <strong>01912345678</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1">জামাত : <strong>টু</strong></p>
                                        <p class="mb-1">টাইপ : <strong>মর্নিং</strong></p>
                                        <p class="mb-1">সময় : <strong>8:00 AM - 12:00 PM</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-1 text-success">সর্বমোট জমা : <strong>৳ 10,000</strong></p>
                                        <p class="mb-1">কোর্স ফি : <strong>৳ 10,000</strong></p>
                                        <p class="mb-1 text-success">মোট বাকি : <strong>৳ 0</strong></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-primary btn-sm d-block mb-2 w-100">
                                            <i class="fa-solid fa-eye"></i> বিস্তারিত
                                        </button>
                                        <button class="btn btn-success btn-sm d-block w-100">
                                            <i class="fa-solid fa-message"></i> এস এম এস
                                        </button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i> মুছুন
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
