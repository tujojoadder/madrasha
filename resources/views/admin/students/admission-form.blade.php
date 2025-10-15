@extends('layouts.admin.app')
@section('title', 'ভর্তি ফরম')

<style>
    #printable_area {
        font-family: 'SolaimanLipi', Arial, sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }

    #printable_area p {
        margin-bottom: 5px;
        margin-top: 5px;
    }

    .field-group {
        display: flex;
        align-items: center;
    }

    .field-group p {
        margin: 0;
    }

    .field-value {
        flex: 1;
        border-bottom: 1px dashed black;
        margin-left: 5px;
    }

    @media print {
        body * {
            visibility: hidden;
        }

        #printable_area,
        #printable_area * {
            visibility: visible;
        }

        * {
            color: #000 !important;
        }

        .no-print {
            display: none !important;
        }

        #printable_area {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0 !important;
            padding: 0 !important;
            box-shadow: none !important;
            border: none !important;
        }

        @page {
                size: A4;
                margin: 10mm 8mm 10mm 8mm;
            }

        .card {
            border: none !important;
            box-shadow: none !important;
        }

        .card-body {
            padding: 0 !important;
        }

        #printable_area p {
            margin-bottom: 3px !important;
            margin-top: 3px !important;
            line-height: 1.4 !important;
            font-size: 15px !important;
        }

        #printable_area h1 {
            font-size: 22px !important;
            margin: 0 !important;
        }

        #printable_area h2,
        #printable_area h3 {
            font-size: 15px !important;
            margin: 5px 0 !important;
        }

        hr {
            border-color: #000 !important;
            margin: 20px 0 !important;
        }

        .col-md-2 {
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-md-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }
    }
</style>

@section('content')

    <div>
        <ol class="breadcrumb bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">ভর্তি ফর্ম</li>
        </ol>
    </div>

    <div class="card shadow-sm mb-4 ">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">
                <i class="fa-solid fa-users me-2"></i> ভর্তি ফর্ম
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

    <!-- Printable Area -->
    <div id="printable_area" class="card shadow-sm ">
        <div class="card-body p-4">

            <!-- Header Section -->
            <div class="row py-5 align-items-start">
                <div class="col-md-2 text-center">
                    <img src="https://ui-avatars.com/api/?name=Mohtamjir&size=150&background=28a745&color=fff&bold=true"
                        alt="Logo" style="width: 80px;height:80px">

                </div>
                <div class="col-md-8 text-center">
                    <h1 style="font-size: 26px; font-weight: 600; margin: 0;">জামালুল কুরআন মাদরাসা</h1>
                    <p style="font-size: 18px; font-weight: 600; margin-top: 10px;">
                        ৭৭, সতীশ সরকার রোড, গেন্ডারিয়া, ঢাকা-১২০৪, ফোনঃ ৪৭৪৪০২৯৬
                    </p>

                </div>
            </div>

            <!-- Form Number Section -->
            <div class="row mb-3">
                <div class="col-3">
                    <p style="border: 1px solid #ddd; text-align: center; padding: 10px; min-height: 60px;"></p>
                </div>
                <div class="col-6 text-center">
                    <span class="btn" style="background: #424649 !important; color: #fff; border: 2px solid #424649;">
                        ভর্তি ফর্ম
                    </span>
                </div>
                <div class="col-3">
                    <p style="border: 1px solid #ddd; text-align: center; padding: 10px;">ভর্তি নং :</p>
                </div>
            </div>

            <!-- Session Info -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>খোরাকীর হার &nbsp;</p>
                        <p style="border: 1px solid #ddd; text-align: center; padding: 10px;">........</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <p>শিক্ষাবর্ষঃ</p>
                </div>
                <div class="col-sm-3 text-center">
                    <p>হিঃ, মোতাবেক ২০২</p>
                </div>
                <div class="col-sm-3 text-end pe-5">
                    <p>ঈঃ</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <div class="col-12">
                    <p>বরাবর,</p>
                    <p>যথাবিহিত সম্মানপূর্বক বিনীত নিবেদক এই যে, আমি এই মাদরাসার অঙ্গীকার নামায় বর্ণিত সকল আইন-কানুন ও
                        শর্ত মানিয়া চলিবার অঙ্গীকার করিয়া এখানে ভর্তি হইবার আবেদন করিতেছি। হুজুর সমিপে আরজ এই যে,
                        অনুগ্রহপূর্বক আমাকে ভর্তি হইবার অনুমতি প্রদান করিয়া ইলমেদ্বীন হাছিলের সুযোগ দানে বাধিত করিবেন।
                    </p>
                </div>

                <!-- Student Information -->
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>নামঃ</p>
                        <p id="name" class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>জন্ম তাংঃ</p>
                        <p id="birtdate" class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>বয়সঃ</p>
                        <p id="age" class="field-value">:</p>
                    </div>
                </div>

                <!-- Father Information -->
                <div class="col-sm-6">
                    <div class="field-group">
                        <p>পিতাঃ জনাব</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="field-group">
                        <p>পিতার পেশাঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <!-- Address Information -->
                <div class="col-sm-5">
                    <div class="field-group">
                        <p>স্থায়ী ঠিকানাঃ গ্রাম</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>পোস্টঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>থানাঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="field-group">
                        <p>জেলাঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>মোবাঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>সম্পর্কঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="field-group">
                        <p>বর্তমান ঠিকানাঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
            </div>

            <hr style="border-bottom: 2px solid #ddd;  margin: 20px 0;;">

            <!-- Previous Education -->
            <div class="row">
                <div class="col-12">
                    <div class="field-group">
                        <p>কোথা হইতে কি পড়িয়া আসিয়াছ?</p>
                        <p class="field-value">:</p>
                    </div>
                    <div class="field-group">
                        <p class="field-value"> &nbsp;</p>
                        <p>পড়িয়া আসিয়াছ ।</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="field-group">
                        <p>কোন জামাতে/বিভাগে ভর্তি হওয়ার ইচ্ছা রাখ?</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="field-group justify-content-end">
                        <p>ছাত্রের দস্তখতঃ</p>
                        <p class="field-value" style="flex: 0 0 25%;">:</p>
                    </div>
                </div>
            </div>

            <hr style="border-bottom: 2px solid #ddd;  margin: 20px 0;;">

            <!-- Office Work Section -->
            <div class="row mb-4">
                <div class="col-12 text-center mb-2">
                    <h3 class="btn" style="border: 2px solid #ddd; margin-top: 0;">দফতরের কাজ</h3>
                </div>
                <div class="col-12 text-center mb-2">
                    <h3 class="btn" style="border: 2px solid #424649; background: #424649 !important; color: white;">
                        নতুন ছাত্রের জন্য
                    </h3>
                </div>

                <div class="col-12">
                    <div class="field-group">
                        <p style="flex: 0 0 auto;">মুহতামিমের আদেশ জনাব</p>
                        <p class="field-value" style="flex: 1;">:</p>
                        <p style="flex: 0 0 auto; margin-left: 10px;">পরীক্ষা নিয়ে নাম্বার দিন।</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="field-group">
                        <p>দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="field-group">
                        <p>প্রাপ্ত নম্বরঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="field-group">
                        <p>পরীক্ষকের দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
            </div>

            <!-- Old Student Section -->
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h3 class="btn" style="border: 2px solid #424649; background: #424649 !important; color: white;">
                        পুরাতন ছাত্রের জন্য
                    </h3>
                </div>

                <div class="col-sm-6">
                    <div class="field-group">
                        <p>বার্ষিক পরীক্ষার নাম্বারঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="field-group">
                        <p>নাজেমে তা'লীমাতের মন্তব্যঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <div class="field-group">
                        <p>দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
            </div>

            <hr style="border-bottom: 2px solid #ddd;  margin: 20px 0;;">

            <!-- Principal Approval -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="field-group">
                        <p style="flex: 0 0 auto;">মুহতামিমের অনুমোদঃ</p>
                        <p class="field-value" style="flex: 1;">:</p>
                        <p style="flex: 0 0 auto; margin-left: 10px;">জামাতে/বিভাগে ভর্তি করা হইল ।</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>

                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
            </div>

            <hr style="border-bottom: 2px solid #ddd;  margin: 20px 0;;">

            <!-- Fee Section -->
            <div class="row">
                <div class="col-sm-5">
                    <div class="field-group">
                        <p style="flex: 0 0 auto;">ভর্তি ফি বাবদ</p>
                        <p class="field-value" style="flex: 1;">:</p>
                        <p style="flex: 0 0 auto; margin-left: 10px;">টাকা লইয়াছি।</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="field-group">
                        <p>আদায়কারীর দস্তখতঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="field-group">
                        <p>তাংঃ</p>
                        <p class="field-value">:</p>
                    </div>
                </div>
            </div>

            <!-- Print Button -->
            <div class="text-end my-4 no-print">
                <button onclick="window.print()" class="btn btn-primary">
                    <i class="fa-solid fa-print me-2"></i>প্রিন্ট করুন
                </button>
            </div>

        </div>
    </div>



@endsection
