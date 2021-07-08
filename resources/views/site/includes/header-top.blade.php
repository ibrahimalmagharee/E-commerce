<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <i class="icon-email"></i>
                        <p>الايميل : </p>
                        <span>
                  support@gmail.com
                </span>
                    </div>
                    <div class="detail-call d-flex align-items-center justify-content-center">
                        <i class="icon-deal"></i>
                        <p>عروض اليوم </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                    <div class="register-out">
                        <i class="zmdi zmdi-account"></i>
                        @guest('customer')
                            <a class="register" href="{{route('customer.register.page')}}"
                               data-link-action="display-register-form">
                                تسجيل
                            </a>
                            <span class="or-text">أو</span>
                            <a class="login" href="{{route('customer.login.page')}}" rel="nofollow" title="Log in to your customer account">تسجيل الدخول</a>
                        @endguest
                        @auth('customer')


                            <a href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                تسجيل الخروج
                            </a>

                            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        @endauth
                    </div>
                    <div id="_desktop_currency_selector"
                         class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more">USD</span>
                        </div>

                    </div>

                    <div id="_desktop_language_selector"
                         class="language-selector groups-selector hidden-sm-down language-selector-dropdown">

                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more"><img class="img-fluid" src="@if(app() -> getLocale() === 'ar') {{asset('assets/front/img/6.jpg')}} @elseif(app() -> getLocale() === 'en') {{asset('assets/front/img/1.jpg')}} @endif" alt="اللغة العربية" width="16"
                                                           height="11"></span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <div class="language-item current flex-first">
                                        <div class="current">
                                            <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                <img class="img-fluid" src="@if($localeCode == 'en') {{asset('assets/front/img/1.jpg')}} @elseif($localeCode =='ar') {{asset('assets/front/img/6.jpg')}} @endif"
                                                     alt="@if($localeCode == 'en') English
                                                          @elseif($localeCode == 'ar') Arabic
                                                        @endif" width="16" height="11">
                                                <span>
                                                    @if($localeCode == 'en')
                                                        English
                                                    @elseif($localeCode == 'ar')
                                                        اللغة العربية
                                                    @endif</span>
                                            </a>
                                        </div>
                                    </div>



                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
