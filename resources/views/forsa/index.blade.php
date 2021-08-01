@extends('layouts.forsa')
@section('title')
    امتلك متجرك من فرصة
@endsection

@section('content')
    <header class="container">
      <nav
        class="
          navbar navbar-expand-lg navbar-light
          bg-transparent
          container
          pt-4
        "
      >
          <a class="navbar-brand" href="{{route('forsa.index')}}">
          <img
              src="{{asset('assets/forsa/assets/logo.png')}}"
              class="img1"
          />
          </a>
        <a class="navbar-brand" href="{{route('forsa.index')}}"><span style="color:#37a495; font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif; font-size: 35px">فرصة</span></a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link MontserratArabicLight" href="{{route('forsa.index')}}"
                >الرئيسية<span class="sr-only">(current)</span></a
              >
            </li>


            <li class="nav-item">
              <a class="nav-link MontserratArabicLight" href="#why-section">من نحن</a>
            </li>

              <li class="nav-item">
                  <a class="nav-link MontserratArabicLight" href="#contact">تواصل معنا</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link MontserratArabicLight" href="{{route('forsa.subscription')}}">اشترك الآن </a>
              </li>
              @guest('vendor')
                  <li class="nav-item">
                      <a class="nav-link MontserratArabicLight" href="{{route('vendor.signIn.page')}}">تسجيل الدخول</a>
                  </li>
              @endguest
              @auth('vendor')

                  <li class="nav-item">
                  <a href="{{ route('vendor.logout') }}" class="nav-link MontserratArabicLight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      تسجيل الخروج
                  </a>

                  <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  </li>

              @endauth

            <li class="nav-item">
              <a class="nav-link btn btn-info text-decoration-none text-white" href="{{route('vendor.signUp.page')}}">انشئ متجرك</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 main-section-text-wrap">
            <div class="main-section-text">
              <div class="">
                <h1 class="text-center">
                  جميع الأدوات التي تحتاجها لبناء متجر ناجح
                </h1>
              </div>
              <div class="py-3">
                <span class=""
                  >امتلك متجر احترافي بأقل التكاليف وبدون عمولة على
                  المبيعات</span
                >
              </div>
              <a class="gradient-button text-decoration-none mt-5" href="{{route('vendor.signUp.page')}}">انشئ متجرك </a>
              <a class="gradient-button  text-decoration-none try-salla mt-5" href="{{route('vendor.signIn.page')}}">أو سجل الدخول </a>
              <div class="clearfix visible-480"></div>
            </div>
          </div>
          <div
            class="col-xs-12 col-sm-12 col-md-7 wow fadeIn"
            style="visibility: visible; animation-name: fadeIn"
          >
            <div class="main-section-imgs">
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/cart.svg"
                class="img1"
              />
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/cart.png"
                class="img2"
              />
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/person1.svg"
                class="img3"
              />
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/mobile.svg"
                class="img4"
              />
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/person2.svg"
                class="img5"
              />
              <img
                src="https://salla.sa/site/wp-content/themes/salla/assets/images/plant.svg"
                class="img6"
              />
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="container">
      <section
        class="numbers-section wow fadeIn"
        style="visibility: visible; animation-name: fadeIn"
      >
        <div class="container" id="#counter">
          <div class="row">
            <div class="col-md-12">
              <div class="number-item">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <div class="number-item-content">
                  <span>متجر إلكتروني</span>
                  <b><i data-count="10">{{\App\Models\Vendor::count()}} متاجر</i> </b>
                </div>
              </div>
            </div>
{{--            <div class="col-md-4">--}}
{{--              <div class="number-item bg1 wow fadeInDown">--}}
{{--                <i class="fa fa-plane" aria-hidden="true"></i>--}}
{{--                <div class="number-item-content">--}}
{{--                  <span>طلب</span>--}}
{{--                  <b><i data-count="12">12</i> </b>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--              <div class="number-item bg2 wow fadeInDown">--}}
{{--                <i class="fa fa-google-wallet" aria-hidden="true"></i>--}}
{{--                <div class="number-item-content">--}}
{{--                  <span>مبيعات المنصة</span>--}}
{{--                  <b><i data-count="3">10</i> </b>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
          </div>
        </div>
      </section>

      <section class="why-section wow fadeIn" id="why-section">
        <div class="container">
          <div class="section-header">
            <h2>
              <span class="gradient-button link--kukuri">لماذا فرصة ؟!</span>
            </h2>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="why-item text-center wow fadeInDown">
                <div class="why-item-img">
                  <i class="fa fa-id-card-o" aria-hidden="true"></i>
                </div>
                <div class="why-item-content">
                  <h4 class="mt-3">امتلك متجر بهويتك الخاصة وبأقل التكاليف</h4>
                  <p class="mt-3">
                    مع فرصة تستطيع خلال دقائق إنشاء متجرك الخاص بأقل التكاليف
                    والحصول على استضافة مجانية وتحديثات مستمرة ومتجددة وبدون أي
                    عمولة على المبيعات
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="why-item text-center">
                <div class="why-item-img">
                  <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="why-item-content">
                  <h4 class="mt-3">سهولة إدراج المنتجات وإدارة المخزون</h4>
                  <p class="mt-3">
                    ستتمكن من إدارة منتجاتك، مهما كان نوع هذه المنتجات سواءاً
                    منتجات جاهزة أو حسب الطلب أو منتجات رقمية وغيرها بكل سهولة
                  </p>
                </div>
              </div>
            </div>
            <div class="clearfix clear-two-items"></div>
            <div class="col-md-4 col-sm-4">
              <div class="why-item text-center">
                <div class="why-item-img">
                  <i class="fa fa-calculator" aria-hidden="true"></i>
                </div>
                <div class="why-item-content">
                  <h4 class="mt-3">
                    دعم جميع وسائل <br />
                    الدفع
                  </h4>
                  <p class="mt-3">
                    في فرصة نوفر لك جميع وسائل الدفع بدءاً من التحويل البنكي
                    والدفع عند الاستلام والدفع بالبطاقات الائتمانية (فيزا وماستر
                    كارد)
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="container-fluid mt-5 mb-5 pl-5 pr-5">
        <div class="row mb-5">
          <div class="col text-center">
            <h2 class="text-info py-3 MontserratArabicLight font48">
              متاجر على منصتنا
            </h2>
            <p class="MontserratArabicLight">
              نسعى دائما لتوفير أفضل تجربة لعملائنا داخل المنصة
            </p>
          </div>
        </div>
        <div class="owl-carousel first owl-theme">
            @isset($vendors)
                @foreach($vendors as $vendor)
                    <div class="item d-flex justify-content-center">
                        <div class="opinions card border-0 shadow-lg rounded w-50 mb-5  p-5 text-center  col-md-6 col-sm-12 ">
                            <p class="MontserratArabicLight">
                                متجر بيع بالتجزئة متنوع منخفض التكلفة ومتخصص في السلع المنزلية
                                والاستهلاكية بما في ذلك مستحضرات التجميل والأدوات المكتبية
                                والألعاب وأدوات المطبخ
                            </p>
                            <div class="d-flex justify-content-center mt-3"></div>
                            <div class="card-body text-center pt-3">
                                <h5 class="card-title">{{$vendor->name}}</h5>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endisset

        </div>
      </section>


      <section class="contact-section" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-1 hidden-xs hidden-sm"></div>
            <div class="col-md-10">
              <div class="contact-section-wrap">
                <div class="contact-img">
                  <span
                    ><img
                      src="https://salla.sa/site/wp-content/themes/salla/assets/images/send.svg"
                  /></span>
                </div>
                <div class="contact-form-wrap text-center">
                  <h3 class="">تواصل معنا</h3>
                  <p class="">
                    يمكنك مراسلتنا في أي وقت تريد من نموذج التواصل أدناه أو
                    الاتصال بنا على الرقم الموحد
                    <a href="" style="color: #5dd5c4"><b>0599458632</b></a>
                  </p>

                  <form class="contact-form" method="post" action="{{route('forsa.contact')}}">
                      @csrf
                    <div class="row">
                      <div class="col-xs-6 col-sm-6">
                          @auth('vendor')
                            <input type="hidden" name="vendor_id" value="{{auth('vendor')->user()->id}}">
                          @endauth
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          id="username"
                          placeholder="الإسم"
                        />
                          @error('name')
                              <span class="text-danger">{{$message}} </span>
                          @enderror
                      </div>
                      <div class="col-xs-6 col-sm-6">
                        <input
                          type="email"
                          class="form-control"
                          name="email"
                          id="email"
                          placeholder="البريد الإلكتروني"
                        />
                          @error('email')
                          <span class="text-danger">{{$message}} </span>
                          @enderror
                      </div>
                      <div class="col-xs-12 px-3 w-100">
                        <textarea
                          name="message"
                          class="form-control"
                          id="msg"
                          placeholder="التفاصيل"
                        ></textarea>
                          @error('message')
                          <span class="text-danger">{{$message}} </span>
                          @enderror
                      </div>
                    </div>
                    <div class="text-center send-btn-wrap">
                      <button class="btn btn-info" type="submit">أرسل</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm"></div>
          </div>
        </div>
      </section>

      <footer class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
              <div class="quick-links-wrap">
                <div class="ul-wrap">
                  <ul
                    id="menu-%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d9%81%d9%88%d8%aa%d8%b1-1"
                    class=""
                  >
                    <li
                      id="menu-item-173"
                      class="
                        menu-item
                        menu-item-type-custom
                        menu-item-object-custom
                        menu-item-173
                      "
                    >
                      <a href="##">عن فرصة</a>
                    </li>
                    <li
                      id="menu-item-5191"
                      class="
                        menu-item
                        menu-item-type-post_type
                        menu-item-object-page menu-item-5191
                      "
                    >
                      <a href="">اتفاقية الاستخدام</a>
                    </li>
                    <li
                      id="menu-item-5190"
                      class="
                        menu-item
                        menu-item-type-post_type
                        menu-item-object-page menu-item-5190
                      "
                    >
                      <a href="">سياسة الخصوصية</a>
                    </li>
                    <li
                      id="menu-item-249"
                      class="
                        menu-item
                        menu-item-type-custom
                        menu-item-object-custom
                        menu-item-249
                      "
                    >
                      <a href="">انضم لفريق فرصة</a>
                    </li>
                  </ul>
                  <ul
                    id="menu-%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d9%81%d9%88%d8%aa%d8%b1-2"
                    class=""
                  >
                    <li
                      id="menu-item-187"
                      class="
                        menu-item
                        menu-item-type-custom
                        menu-item-object-custom
                        menu-item-187
                      "
                    >
                      <a href="##">من المدونة</a>
                    </li>
                    <li
                      id="menu-item-5194"
                      class="
                        menu-item
                        menu-item-type-post_type
                        menu-item-object-post menu-item-5194
                      "
                    >
                      <a href="">تصوير المنتجات بإحترافية وبأقل التكاليف</a>
                    </li>
                    <li
                      id="menu-item-5193"
                      class="
                        menu-item
                        menu-item-type-post_type
                        menu-item-object-post menu-item-5193
                      "
                    >
                      <a href=""
                        >تسعير المنتجات: بأدوات وإستراتيجيات التسعير
                        الاحترافية</a
                      >
                    </li>
                    <li
                      id="menu-item-17675"
                      class="
                        menu-item
                        menu-item-type-custom
                        menu-item-object-custom
                        menu-item-17675
                      "
                    >
                      <a href="">التجارة الإلكترونية</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
              <div class="footer-bottom">
                <ul class="social-ul">
                  <li>
                    <a href=""
                      ><i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href=""
                      ><i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href=""
                      ><i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
                <div class="copyright">
                  <span>جميع الحقوق محفوظة</span>
                  <span>لشركة فرصة القابضة © 2021</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>
@endsection
