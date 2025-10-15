@extends('layouts.admin.app')

@section('title', 'User Dashboard')

@section('content')
    <div>
        <ol class="breadcrumb  bg-light-secondary p-2">
            <li class="breadcrumb-item"> <strong><i class="fa-regular fa-house"></i> ড্যাশবোর্ড</strong>
            </li>
        </ol>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <!-- Dashboard Header -->

            <!-- Cards Grid -->
            <div class="row g-4">
                <!-- Card 1: ছাত্র/ছাত্রী যুক্ত -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-1">
                            <div class="card-glow-effect glow-blue"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-blue">
                                            <i class="fas fa-user-plus"></i>
                                        </div>
                                        <div class="icon-ring ring-blue"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">ছাত্র/ছাত্রী যুক্ত</h5>
                                        <p class="premium-subtitle">নতুন শিক্ষার্থী নিবন্ধন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 2: নতুন জমা যুক্ত -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-2">
                            <div class="card-glow-effect glow-green"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-green">
                                            <i class="fas fa-plus-circle"></i>
                                        </div>
                                        <div class="icon-ring ring-green"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">নতুন জমা যুক্ত</h5>
                                        <p class="premium-subtitle">অর্থ জমা করুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 3: নতুন খরচ যুক্ত -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-3">
                            <div class="card-glow-effect glow-cyan"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-cyan">
                                            <i class="fas fa-minus-circle"></i>
                                        </div>
                                        <div class="icon-ring ring-cyan"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">নতুন খরচ যুক্ত</h5>
                                        <p class="premium-subtitle">ব্যয় রেকর্ড করুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 4: এস এম এস -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-4">
                            <div class="card-glow-effect glow-orange"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-orange">
                                            <i class="fas fa-sms"></i>
                                        </div>
                                        <div class="icon-ring ring-orange"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">এস এম এস</h5>
                                        <p class="premium-subtitle">বার্তা পাঠান</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 5: একাউন্ট যুক্ত -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-5">
                            <div class="card-glow-effect glow-yellow"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-yellow">
                                            <i class="fas fa-university"></i>
                                        </div>
                                        <div class="icon-ring ring-yellow"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">একাউন্ট যুক্ত</h5>
                                        <p class="premium-subtitle">নতুন হিসাব খুলুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 6: একাউন্ট বিবরণ -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-6">
                            <div class="card-glow-effect glow-pink"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-pink">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                        <div class="icon-ring ring-pink"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">একাউন্ট বিবরণ</h5>
                                        <p class="premium-subtitle">হিসাব দেখুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 7: হাজিরা -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-7">
                            <div class="card-glow-effect glow-lime"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-lime">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="icon-ring ring-lime"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">হাজিরা</h5>
                                        <p class="premium-subtitle">উপস্থিতি নিন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 8: রেজাল্ট সীট -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-8">
                            <div class="card-glow-effect glow-purple"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-purple">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div class="icon-ring ring-purple"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">রেজাল্ট সীট</h5>
                                        <p class="premium-subtitle">ফলাফল দেখুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>

                <!-- Card 9: আইডি কার্ড -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="premium-card gradient-card-9">
                            <div class="card-glow-effect glow-indigo"></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="icon-container-premium">
                                        <div class="icon-bg icon-bg-indigo">
                                            <i class="fas fa-id-card"></i>
                                        </div>
                                        <div class="icon-ring ring-indigo"></div>
                                    </div>
                                    <div class="card-content-premium flex-grow-1">
                                        <h5 class="premium-title">আইডি কার্ড</h5>
                                        <p class="premium-subtitle">পরিচয়পত্র তৈরি করুন</p>
                                    </div>
                                    <div class="arrow-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pattern-overlay"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ===== Dashboard Header Premium ===== */
        .dashboard-header-premium {
            padding: 30px 0;
            animation: headerFadeIn 0.8s ease;
        }

        @keyframes headerFadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-badge-animated {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 10px 24px;
            border-radius: 50px;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
            animation: badgeBounce 2s infinite;
        }

        @keyframes badgeBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .welcome-badge-animated i {
            color: #ffd700;
            font-size: 18px;
            animation: crownRotate 3s linear infinite;
        }

        @keyframes crownRotate {

            0%,
            100% {
                transform: rotate(-10deg);
            }

            50% {
                transform: rotate(10deg);
            }
        }

        .welcome-badge-animated span {
            color: white;
            font-weight: 700;
            font-size: 15px;
        }

        .dashboard-title-gradient {
            font-size: 48px;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            animation: gradientFlow 3s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientFlow {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .dashboard-subtitle-premium {
            font-size: 17px;
            color: #6b7280;
            font-weight: 500;
            margin: 0;
        }

        /* ===== Premium Card Styles ===== */
        .premium-card {
            background: white;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid transparent;
            height: 100%;
        }

        .premium-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-color);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        .premium-card:hover::before {
            transform: scaleX(1);
        }

        .premium-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border-color: var(--border-color);
        }

        .premium-card .card-body {
            padding: 32px 26px;
            position: relative;
            z-index: 3;
        }

        /* Card Glow Effect */
        .card-glow-effect {
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
            filter: blur(50px);
        }

        .premium-card:hover .card-glow-effect {
            opacity: 0.15;
        }

        .glow-blue {
            background: radial-gradient(circle, #667eea 0%, transparent 70%);
        }

        .glow-green {
            background: radial-gradient(circle, #11998e 0%, transparent 70%);
        }

        .glow-cyan {
            background: radial-gradient(circle, #0093E9 0%, transparent 70%);
        }

        .glow-orange {
            background: radial-gradient(circle, #f093fb 0%, transparent 70%);
        }

        .glow-yellow {
            background: radial-gradient(circle, #FDC830 0%, transparent 70%);
        }

        .glow-pink {
            background: radial-gradient(circle, #fa709a 0%, transparent 70%);
        }

        .glow-lime {
            background: radial-gradient(circle, #4facfe 0%, transparent 70%);
        }

        .glow-purple {
            background: radial-gradient(circle, #a8edea 0%, transparent 70%);
        }

        .glow-indigo {
            background: radial-gradient(circle, #5f72bd 0%, transparent 70%);
        }

        /* Icon Container with Pulse Animation */
        .icon-container-premium {
            position: relative;
            margin-right: 20px;
        }

        .icon-bg {
            width: 85px;
            height: 85px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-color);
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            position: relative;
            z-index: 2;
        }

        .premium-card:hover .icon-bg {
            transform: rotate(360deg) scale(1.12);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .icon-bg i {
            font-size: 40px;
            color: white;
            filter: drop-shadow(0 3px 6px rgba(0, 0, 0, 0.3));
        }

        /* Pulse Ring Animation */
        .icon-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 85px;
            height: 85px;
            border-radius: 20px;
            border: 3px solid;
            border-color: var(--ring-color);
            opacity: 0;
            animation: ringPulse 2s infinite;
        }

        @keyframes ringPulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.7;
            }

            100% {
                transform: translate(-50%, -50%) scale(1.6);
                opacity: 0;
            }
        }

        /* Card Content */
        .card-content-premium {
            margin-right: 15px;
        }

        .premium-title {
            font-size: 21px;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 5px 0;
            transition: all 0.3s ease;
        }

        .premium-card:hover .premium-title {
            color: var(--title-color);
            transform: translateX(5px);
        }

        .premium-subtitle {
            font-size: 14px;
            color: #6b7280;
            margin: 0;
            font-weight: 500;
        }

        /* Arrow Circle */
        .arrow-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .arrow-circle i {
            color: var(--arrow-color);
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .premium-card:hover .arrow-circle {
            background: var(--gradient-color);
            transform: translateX(8px) scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .premium-card:hover .arrow-circle i {
            color: white;
            transform: translateX(3px);
        }

        /* Pattern Overlay */
        .card-pattern-overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.02) 1px, transparent 1px);
            background-size: 15px 15px;
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
            z-index: 1;
        }

        .premium-card:hover .card-pattern-overlay {
            opacity: 1;
        }

        /* Card Color Schemes */
        .gradient-card-1 {
            --gradient-color: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --border-color: rgba(102, 126, 234, 0.3);
            --title-color: #667eea;
            --arrow-color: #667eea;
            --ring-color: #667eea;
        }

        .gradient-card-2 {
            --gradient-color: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --border-color: rgba(17, 153, 142, 0.3);
            --title-color: #11998e;
            --arrow-color: #11998e;
            --ring-color: #11998e;
        }

        .gradient-card-3 {
            --gradient-color: linear-gradient(135deg, #0093E9 0%, #80D0C7 100%);
            --border-color: rgba(0, 147, 233, 0.3);
            --title-color: #0093E9;
            --arrow-color: #0093E9;
            --ring-color: #0093E9;
        }

        .gradient-card-4 {
            --gradient-color: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --border-color: rgba(240, 147, 251, 0.3);
            --title-color: #f093fb;
            --arrow-color: #f093fb;
            --ring-color: #f093fb;
        }

        .gradient-card-5 {
            --gradient-color: linear-gradient(135deg, #FDC830 0%, #F37335 100%);
            --border-color: rgba(253, 200, 48, 0.3);
            --title-color: #FDC830;
            --arrow-color: #FDC830;
            --ring-color: #FDC830;
        }

        .gradient-card-6 {
            --gradient-color: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --border-color: rgba(250, 112, 154, 0.3);
            --title-color: #fa709a;
            --arrow-color: #fa709a;
            --ring-color: #fa709a;
        }

        .gradient-card-7 {
            --gradient-color: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --border-color: rgba(79, 172, 254, 0.3);
            --title-color: #4facfe;
            --arrow-color: #4facfe;
            --ring-color: #4facfe;
        }

        .gradient-card-8 {
            --gradient-color: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            --border-color: rgba(168, 237, 234, 0.3);
            --title-color: #a8edea;
            --arrow-color: #a8edea;
            --ring-color: #a8edea;
        }

        .gradient-card-9 {
            --gradient-color: linear-gradient(135deg, #5f72bd 0%, #9b23ea 100%);
            --border-color: rgba(95, 114, 189, 0.3);
            --title-color: #5f72bd;
            --arrow-color: #5f72bd;
            --ring-color: #5f72bd;
        }

        /* Link Styling */
        a.text-decoration-none {
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .dashboard-title-gradient {
                font-size: 38px;
            }

            .icon-bg {
                width: 75px;
                height: 75px;
            }

            .icon-ring {
                width: 75px;
                height: 75px;
            }

            .icon-bg i {
                font-size: 36px;
            }

            .premium-title {
                font-size: 19px;
            }
        }

        @media (max-width: 767px) {
            .dashboard-title-gradient {
                font-size: 32px;
            }

            .dashboard-subtitle-premium {
                font-size: 15px;
            }

            .premium-card .card-body {
                padding: 26px 20px;
            }

            .icon-bg {
                width: 70px;
                height: 70px;
                margin-right: 16px;
            }

            .icon-ring {
                width: 70px;
                height: 70px;
            }

            .icon-bg i {
                font-size: 34px;
            }

            .premium-title {
                font-size: 18px;
            }

            .premium-subtitle {
                font-size: 13px;
            }

            .arrow-circle {
                width: 36px;
                height: 36px;
            }

            .arrow-circle i {
                font-size: 14px;
            }
        }

        @media (max-width: 575px) {
            .dashboard-header-premium {
                padding: 20px 0;
            }

            .dashboard-title-gradient {
                font-size: 28px;
            }

            .welcome-badge-animated {
                padding: 8px 18px;
            }

            .premium-card .card-body {
                padding: 22px 18px;
            }

            .icon-bg {
                width: 65px;
                height: 65px;
            }

            .icon-ring {
                width: 65px;
                height: 65px;
            }

            .icon-bg i {
                font-size: 32px;
            }

            .premium-title {
                font-size: 17px;
            }

            .arrow-circle {
                width: 34px;
                height: 34px;
            }
        }
    </style>
@endsection
