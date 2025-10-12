@extends('layouts.admin.app')

@section('title', 'User Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row g-4">
            <!-- Card 1: ছাত্র/ছাত্রী যুক্ত -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-blue">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-blue me-3">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <h5 class="card-title mb-0">ছাত্র/ছাত্রী যুক্ত</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2: নতুন জমা যুক্ত -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-green">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-green me-3">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                                <h5 class="card-title mb-0">নতুন জমা যুক্ত</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3: নতুন খরচ যুক্ত -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-teal">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-teal me-3">
                                    <i class="fas fa-minus-circle"></i>
                                </div>
                                <h5 class="card-title mb-0">নতুন খরচ যুক্ত</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 4: এস এম এস -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-orange">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-orange me-3">
                                    <i class="fas fa-sms"></i>
                                </div>
                                <h5 class="card-title mb-0">এস এম এস</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 5: একাউন্ট যুক্ত -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-yellow">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-yellow me-3">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h5 class="card-title mb-0">একাউন্ট যুক্ত</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 6: একাউন্ট বিবরণ -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-pink">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-pink me-3">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <h5 class="card-title mb-0">একাউন্ট বিবরণ</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 7: হাজিরা -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-lime">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-lime me-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h5 class="card-title mb-0">হাজিরা</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 8: রেজাল্ট সীট -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-magenta">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-magenta me-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h5 class="card-title mb-0">রেজাল্ট সীট</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 9: আইডি কার্ড -->
            <div class="col-md-6 col-xl-4">
                <a href="#" class="text-decoration-none">
                    <div class="card hover-effect dashboard-card card-purple">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle icon-purple me-3">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <h5 class="card-title mb-0">আইডি কার্ড</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* White Background Cards with Colored Border */
    .card-blue {
        background: #ffffff;
        border-top: 4px solid #2196F3 !important;
    }
    
    .card-green {
        background: #ffffff;
        border-top: 4px solid #4CAF50 !important;
    }
    
    .card-teal {
        background: #ffffff;
        border-top: 4px solid #009688 !important;
    }
    
    .card-orange {
        background: #ffffff;
        border-top: 4px solid #FF9800 !important;
    }
    
    .card-yellow {
        background: #ffffff;
        border-top: 4px solid #FFC107 !important;
    }
    
    .card-pink {
        background: #ffffff;
        border-top: 4px solid #E91E63 !important;
    }
    
    .card-lime {
        background: #ffffff;
        border-top: 4px solid #8BC34A !important;
    }
    
    .card-magenta {
        background: #ffffff;
        border-top: 4px solid #9C27B0 !important;
    }
    
    .card-purple {
        background: #ffffff;
        border-top: 4px solid #673AB7 !important;
    }

    /* Icon Circle Colors */
    .icon-blue {
        background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);
    }
    
    .icon-green {
        background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);
    }
    
    .icon-teal {
        background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);
    }
    
    .icon-orange {
        background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);
    }
    
    .icon-yellow {
        background: linear-gradient(135deg, #FFFDE7 0%, #FFF9C4 100%);
    }
    
    .icon-pink {
        background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);
    }
    
    .icon-lime {
        background: linear-gradient(135deg, #F1F8E9 0%, #DCEDC8 100%);
    }
    
    .icon-magenta {
        background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);
    }
    
    .icon-purple {
        background: linear-gradient(135deg, #EDE7F6 0%, #D1C4E9 100%);
    }

    /* Dashboard Card Styling */
    .dashboard-card {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        position: relative;
    }

    .dashboard-card .card-body {
        padding: 30px 25px;
        position: relative;
        z-index: 2;
    }

    /* Hover Effect */
    .dashboard-card.hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        border-color: transparent;
    }

    /* Icon Circle */
    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: all 0.4s ease;
    }

    .dashboard-card:hover .icon-circle {
        transform: rotate(360deg) scale(1.1);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Icon Colors */
    .icon-blue i { color: #2196F3; }
    .icon-green i { color: #4CAF50; }
    .icon-teal i { color: #009688; }
    .icon-orange i { color: #FF9800; }
    .icon-yellow i { color: #FFC107; }
    .icon-pink i { color: #E91E63; }
    .icon-lime i { color: #8BC34A; }
    .icon-magenta i { color: #9C27B0; }
    .icon-purple i { color: #673AB7; }

    .icon-circle i {
        font-size: 32px;
        filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.1));
    }

    /* Card Title */
    .card-title {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        line-height: 1.4;
    }

    /* Link Reset */
    a {
        display: block;
        text-decoration: none !important;
    }

    /* Responsive Design */
    @media (max-width: 1199px) {
        .dashboard-card .card-body {
            padding: 25px 20px;
        }
        
        .icon-circle {
            width: 60px;
            height: 60px;
        }
        
        .icon-circle i {
            font-size: 28px;
        }
        
        .card-title {
            font-size: 18px;
        }
    }

    @media (max-width: 767px) {
        .dashboard-card .card-body {
            padding: 20px 18px;
        }
        
        .icon-circle {
            width: 55px;
            height: 55px;
        }
        
        .icon-circle i {
            font-size: 24px;
        }
        
        .card-title {
            font-size: 17px;
        }
    }

    @media (max-width: 575px) {
        .dashboard-card .card-body {
            padding: 18px 15px;
        }
        
        .icon-circle {
            width: 50px;
            height: 50px;
        }a
        
        .icon-circle i {
            font-size: 22px;
        }
        
        .card-title {
            font-size: 16px;
        }
    }
</style>
@endsection