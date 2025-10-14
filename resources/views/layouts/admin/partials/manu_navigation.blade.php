  <nav>
      <div class="app-logo">
          <a class="logo d-inline-block" href="index.html">
              <img alt="#" src="../assets/images/logo/1.png">
          </a>

          <span class="bg-light-primary toggle-semi-nav d-flex-center">
              <i class="ti ti-chevron-right"></i>
          </span>

          <div class="d-flex align-items-center nav-profile p-3">
              <span class="h-45 w-45 d-flex-center b-r-10 position-relative bg-danger m-auto">
                  <img alt="avatar" class="img-fluid b-r-10" src="../assets/images/avatar/woman.jpg">
                  <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
              </span>
              <div class="flex-grow-1 ps-2">
                  <h6 class="text-primary mb-0"> Ninfa Monaldo</h6>
                  <p class="text-muted f-s-12 mb-0">Web Developer</p>
              </div>


              <div class="dropdown profile-menu-dropdown">
                  <a aria-expanded="false" data-bs-auto-close="true" data-bs-placement="top" data-bs-toggle="dropdown"
                      role="button">
                      <i class="ti ti-settings fs-5"></i>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="dropdown-item">
                          <a class="f-w-500" href="./profile.html" target="_blank">
                              <i class="ph-duotone  ph-user-circle pe-1 f-s-20"></i> Profile Details
                          </a>
                      </li>
                      <li class="dropdown-item">
                          <a class="f-w-500" href="./setting.html" target="_blank">
                              <i class="ph-duotone  ph-gear pe-1 f-s-20"></i> Settings
                          </a>
                      </li>
                      <li class="dropdown-item">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>
                                  <a class="f-w-500" href="#">
                                      <i class="ph-duotone  ph-detective pe-1 f-s-20"></i> Incognito
                                  </a>
                              </div>
                              <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                      <input class="form-check-input form-check-primary" id="incognitoSwitch"
                                          type="checkbox">
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="dropdown-item">
                          <a class="mb-0 text-secondary f-w-500" href="./sign_up.html" target="_blank">
                              <i class="ph-bold  ph-plus pe-1 f-s-20"></i> Add account
                          </a>
                      </li>

                      <li class="app-divider-v dotted py-1"></li>

                      <li class="dropdown-item">
                          <a class="mb-0 text-danger" href="./sign_in.html" target="_blank">
                              <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                          </a>
                      </li>
                  </ul>
              </div>

          </div>
      </div>
      <div class="app-nav" id="app-simple-bar">
          <ul class="main-nav p-0 mt-2">



              <li class="menu-title">
                  <span>ড্যাশবোর্ড</span>
              </li>
              <!-- ড্যাশবোর্ড -->
              <li class="no-sub">
                  <a href="/dashboard" class="d-flex align-items-center fw-bold">
                      <i class="fa-regular fa-house"></i> ড্যাশবোর্ড
                  </a>
              </li>
              <!-- ছাত্র/ছাত্রী -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#students" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-users me-2"></i>
                      ছাত্র/ছাত্রী
                  </a>
                  <ul class="collapse" id="students">
                      <li><a href="{{ route('create-student') }}">ছাত্র/ছাত্রী তৈরি</a></li>
                      <li><a href="{{ route('student-list') }}">ছাত্র/ছাত্রী লিস্ট</a></li>
                      <li><a href="{{ route('students.by.jamaat') }}">জামাত অনুসারে ছাত্র/ছাত্রী </a></li>
                      <li><a href="{{ route('admission-report-by-jamat') }}">জামাত অনুসারে ভর্তি প্রতিবেদন</a></li>
                      <li><a href="{{ route('admission-register-by-jamat') }}">জামাত অনুসারে ভর্তি রেজিষ্টার</a></li>
                      <li><a href="{{ route('students-list-by-bloodgroup') }}">রক্তের গ্রুপ অনুসারে ছাত্র/ছাত্রী</a></li>
                      <li><a href="file_manager.html">জামাত অনুযায়ী অভিভাবকের মোবাঃ নাম্বার</a></li>
                      <li><a href="bookmark.html">ছাত্র খানার টাকা জমার এন্ট্রি সিস্টেম</a></li>
                      <li><a href="kanban_board.html">ছাত্র খানার টাকা জমার তালিকা</a></li>
                      <li><a href="timeline.html">ছাত্রদের খোরাকীর টাকা আদায়ের রেজিস্টার</a></li>
                      <li><a href="faq.html">ভর্তি ফর্ম</a></li>
                  </ul>
              </li>


              <!-- শিক্ষক -->
                <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#teachers" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-chalkboard-user me-2"></i>
                      শিক্ষক
                  </a>
                  <ul class="collapse" id="teachers">
                      <li><a href="calendar.html">শিক্ষক তৈরি</a></li>
                      <li><a href="to_do.html">শিক্ষক তালিকা</a></li>
                      <li><a href="team.html">শিক্ষকগণের মোবাইল নম্বর </a></li>
                      <li><a href="api.html">শিক্ষকগণের বেতন তালিকা</a></li>
                      <li><a href="api.html">শিক্ষকগণের নম্বর তালিকা</a></li>

                  </ul>
                </li>
              <!-- মাসিক চাঁদাদাতা -->
              <li>
                 

                   <a aria-expanded="false" data-bs-toggle="collapse" href="#monthly-donors" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-calendar-check me-2"></i>
                      মাসিক চাঁদাদাতা
                  </a>
                  <ul class="collapse" id="monthly-donors">
                      <li><a href="calendar.html">মাসিক চাঁদাদাতার তালিকা</a></li>
                      <li><a href="to_do.html">মাসিক চাঁদা গ্রহণ</a></li>
                      <li><a href="team.html">মাসিক চাঁদাদাতার তালিকা (একক ভাবে) </a></li>
                      <li><a href="api.html">মাসিক চাঁদাদাতাদের তালিকা (সকল)</a></li>
                  </ul>
              </li>
              <!-- দানকারী -->
              <li>
                   <a aria-expanded="false" data-bs-toggle="collapse" href="#donors" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-hand-holding-heart me-2"></i>
                       দানকারী
                  </a>
                  <ul class="collapse" id="donors">
                      <li><a href="calendar.html">দানকারীর তালিকা</a></li>
                      <li><a href="to_do.html">দান গ্রহণ</a></li>
                      <li><a href="team.html">দানকারীর তালিকা (একক ভাবে)</a></li>
                      <li><a href="api.html">দানকারীর তালিকা (সকল)</a></li>
                  </ul>
              </li>
              <!-- যাকাত দাতা -->
              <li>
                
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#zakat-donors" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-gem me-2"></i>
                       যাকাত দাতা
                  </a>
                  <ul class="collapse" id="zakat-donors">
                      <li><a href="calendar.html">যাকাত দাতার তালিকা</a></li>
                      <li><a href="to_do.html">যাকাত গ্রহণ</a></li>
                      <li><a href="team.html">যাকাত দাতার তালিকা (একক ভাবে)</a></li>
                      <li><a href="api.html">যাকাত দাতার তালিকা (সকল)</a></li>
                  </ul>
              </li>

              <!-- কমিটির সদস্যগণের তালিকা -->

              <li class="no-sub">
                  <a href="/dashboard" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-users-gear"></i> কমিটির সদস্যগণ
                  </a>
              </li>
              
              <!-- হাজিরা -->
              <li>
                 <a aria-expanded="false" data-bs-toggle="collapse" href="#attendance" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-user-check me-2"></i>
                      হাজিরা
                  </a>
                  
                  <ul class="collapse" id="attendance">
                      <li><a href="calendar.html">ছাত্র-ছাত্রী হাজিরা</a></li>
                      <li><a href="to_do.html">ছাত্র-ছাত্রী হাজিরা প্ৰতিবেদন </a></li>
                      <li><a href="team.html">শিক্ষক হাজিরা</a></li>
                      <li><a href="api.html">শিক্ষক হাজিরা রিপোর্ট</a></li>
                  </ul>
              </li>
              <!-- রেজাল্ট -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#results" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-chart-line me-2"></i>
                      রেজাল্ট
                  </a>
                  <ul class="collapse" id="results">
                      <li><a href="calendar.html">মার্কস এনট্রি/আপডেট</a></li>
                      <li><a href="to_do.html">রেজাল্ট শীট</a></li>
                      <li><a href="team.html">ছাত্র-ছাত্রী ভিত্তিক রেজাল্ট</a></li>
                  </ul>
              </li>
              <!-- জমা/খরচ হিসাব সমূহ -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#income-expense" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-wallet me-2"></i>
                      জমা/খরচ হিসাব সমূহ
                  </a>
                  <ul class="collapse" id="income-expense">
                      <li><a href="calendar.html">নতুন অর্থ জমা করুন</a></li>
                      <li><a href="to_do.html">নতুন খরচ</a></li>
                      <li><a href="team.html">ব্যলেন্স ট্রান্সফার</a></li>
                      <li><a href="team.html">এ্যাকাউন্ট সামারি</a></li>
                      <li><a href="team.html">এ্যাকাউন্ট বিবরণী</a></li>
                      <li><a href="team.html">ব্যলেন্স সিট</a></li>
                  </ul>
              </li>
              <!-- এস এম এস -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#sms" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-message me-2"></i>
                      এস এম এস
                  </a>
                  <ul class="collapse" id="sms">
                      <li><a href="calendar.html">সমস্থ লিস্ট</a></li>
                      <li><a href="to_do.html">টাইপ অনুসারে এসএমএস</a></li>
                      <li><a href="team.html">জামাত অনুসারে এসএমএস</a></li>
                      <li><a href="team.html">জেলা অনুসারে এসএমএস</a></li>
                      <li><a href="team.html">থানা অনুসারে এসএমএস</a></li>
                      <li><a href="team.html">রক্তের গ্রুপ অনুসারে এসএমএস</a></li>
                      <li><a href="team.html">এসএমএস রিপোর্ট</a></li>
                  </ul>
              </li>
              <!-- ভাউচার -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#vouchers" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-file-invoice-dollar me-2"></i>
                      ভাউচার
                  </a>
                  <ul class="collapse" id="vouchers">
                      <li><a href="calendar.html">জমা ভাউচার</a></li>
                      <li><a href="to_do.html">খরচের ভাউচার</a></li>
                  </ul>
              </li>
              <!-- আইডি কার্ড -->
              <li>
                    <a aria-expanded="false" data-bs-toggle="collapse" href="#id-cards" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-id-card me-2"></i>
                      আইডি কার্ড
                  </a>
                  <ul class="collapse" id="id-cards">
                      <li><a href="calendar.html">আইডি কার্ড লিস্ট</a></li>
                  </ul>
              </li>
              <!-- এ্যাকাউন্ট -->
              <li>
                   <a aria-expanded="false" data-bs-toggle="collapse" href="#accounts" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-building-columns me-2"></i>
                      এ্যাকাউন্ট
                  </a>
                  <ul class="collapse" id="accounts">
                      <li><a href="calendar.html">নতুন এ্যাকাউন্ট তৈরি</a></li>
                      <li><a href="calendar.html">এ্যাকাউন্টের তালিকা</a></li>
                  </ul>
              </li>
              <!-- রিপোর্ট -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#reports" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-file-alt me-2"></i>
                      রিপোর্ট
                  </a>
                  <ul class="collapse" id="reports">
                      <li><a href="calendar.html">জমার রিপোর্ট</a></li>
                      <li><a href="calendar.html">ছাত্র/ছাত্রী জমার রিপোর্ট</a></li>
                      <li><a href="calendar.html">ছাত্র/ছাত্রীর মাসিক বেতন জমার রিপোর্ট</a></li>
                      <li><a href="calendar.html">জমার খাতের রিপোর্ট</a></li>
                      <li><a href="calendar.html">মাসিক চাদাদাতার রিপোর্ট</a></li>
                      <li><a href="calendar.html">এ্যাকাউন্টে জমার রিপোর্ট</a></li>
                      <li><a href="calendar.html">খরচের রিপোর্ট</a></li>
                      <li><a href="calendar.html">খরচের খাতের রিপোর্ট</a></li>
                      <li><a href="calendar.html">এ্যাকাউন্টে খরচের রিপোর্ট</a></li>
                      <li><a href="calendar.html">জমা ও খরচের রিপোর্ট</a></li>
                      <li><a href="calendar.html">এ্যাকাউন্টে বিবরণ</a></li>
                  </ul>
              </li>

              <!-- দৈনিক আয়-ব্যয়ের প্রতিবেদন -->
              
              <li class="no-sub">
                  <a href="/dashboard" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-calendar-day me-2"></i> দৈনিক আয়-ব্যয়ের প্রতিবেদন
                  </a>
              </li>
              <!-- বার্ষিক আয়-ব্যয়ের প্রতিবেদন -->
              
              <li class="no-sub">
                  <a href="/dashboard" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-calendar-week me-2"></i> বার্ষিক আয়-ব্যয়ের প্রতিবেদন
                  </a>
              </li>
              <!-- ব্যাংক প্রতিবেদন -->
              <li class="no-sub">
                  <a href="/dashboard" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-university me-2"></i> ব্যাংক প্রতিবেদন
                  </a>
              </li>
              <!-- সেটিং -->
              <li>
                  <a aria-expanded="false" data-bs-toggle="collapse" href="#settings" class="d-flex align-items-center fw-bold">
                      <i class="fa-solid fa-gear me-2"></i>
                      সেটিং
                  </a>
                  <ul class="collapse" id="settings">
                      <li><a href="calendar.html">প্রতিষ্ঠানের তথ্য</a></li>
                      <li><a href="calendar.html">পেমেন্ট মাধ্যম তৈরি</a></li>
                      <li><a href="calendar.html"> জামাত তৈরি</a></li>
                  </ul>
              </li>














          </ul>
      </div>

      <div class="menu-navs">
          <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
          <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
      </div>

  </nav>