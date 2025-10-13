@extends('layouts.admin.app')
@section('title', 'জামাত অনুসারে ছাত্র/ছাত্রী লিস্ট')

@section('content')
    <div>
        <ol class="breadcrumb bg-light-secondary p-2">
            <li class="breadcrumb-item"><i class="fa-solid fa-users me-2"></i>ছাত্র/ছাত্রী</li>
            <li aria-current="page" class="breadcrumb-item active fw-bold">জামাত অনুসারে ছাত্র/ছাত্রী লিস্ট</li>
        </ol>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary">
            <h5 class="mb-0 text-white">
                <i class="fa-solid fa-users me-2"></i> জামাত অনুসারে ছাত্র/ছাত্রী লিস্ট
            </h5>
        </div>

        <div class="card-body mb-3">
            <div class="row  align-items-end ">
                <!-- Left: Select + Search button -->
                <div class="col-md-6 d-flex flex-wrap gap-2 ">
                    <form method="GET" class="d-flex flex-wrap align-items-end gap-3 w-100">
                        <div class="flex-grow-1 ">
                            <label for="class_select" class="form-label fw-bold">জামাত লিস্ট</label>
                            <select name="class_id" id="class_select" class="form-select" required>
                                <option value="">হেফখানা</option>
                                <option value="1">নাজেরা</option>
                                <option value="2">মক্তব</option>
                            </select>
                        </div>
                        <button type="submit" class="btn b-r-22 btn-info px-4 flex-shrink-0">
                            <i class="fa-solid fa-search me-1"></i> খুজুন
                        </button>
                    </form>
                </div>

                <!-- Right: Add Student button -->
                <div class="col-md-6 text-md-end text-start mt-3">
                    <a href="{{ route('create-student') }}" class="btn btn-danger text-white fw-bold">
                        <i class="fa-solid fa-plus me-1"></i> নতুন ছাত্র/ছাত্রী যুক্ত করুন
                    </a>
                </div>
            </div>
        </div>



    </div>

    <div class="row g-4">
        <!-- Student Card 1 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-primary">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Humann&size=150&background=007bff&color=fff&bold=true"
                            alt="হুমান" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হুমান</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Card 2 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-secondary">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Mohtamjir&size=150&background=28a745&color=fff&bold=true"
                            alt="মোহতামজীর" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #28a745;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">মোহতামজীর</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Card 3 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-success">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Hasibul&size=150&background=ffc107&color=000&bold=true"
                            alt="হাসিবুল" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #ffc107;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হাসিবুল</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Card 3 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-info">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Hasibul&size=150&background=ffc107&color=000&bold=true"
                            alt="হাসিবুল" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #ffc107;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হাসিবুল</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-dark">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Humann&size=150&background=007bff&color=fff&bold=true"
                            alt="হুমান" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হুমান</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Card 3 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-success">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Hasibul&size=150&background=ffc107&color=000&bold=true"
                            alt="হাসিবুল" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #ffc107;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হাসিবুল</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Card 3 -->
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-info">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Hasibul&size=150&background=ffc107&color=000&bold=true"
                            alt="হাসিবুল" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #ffc107;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হাসিবুল</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="card card hover-effect b-t-4-dark">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Humann&size=150&background=007bff&color=fff&bold=true"
                            alt="হুমান" class="rounded-circle"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff;">
                    </div>
                    <h5 class="card-title fw-bold mb-3">হুমান</h5>
                    <div class="text-start">
                        <p class="mb-2"><strong>Email :</strong> rafi@example.com</p>
                        <p class="mb-2"><strong>Phone :</strong> 01712345678</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        


    </div>
@endsection
