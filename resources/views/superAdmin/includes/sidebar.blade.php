<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('superAdmin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{__('translate-admin/sidebar.main')}} </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">التجار </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{\App\Models\Vendor::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.vendors' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.vendors')}}" data-i18n="nav.dash.ecommerce"> عرض الكل</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">تواصل معنا  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{\App\Models\ContactVendor::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'superAdmin.contacts' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('superAdmin.contacts')}}" data-i18n="nav.dash.ecommerce"> عرض المراسلات</a>
                    </li>

                </ul>
            </li>


        </ul>
    </div>
</div>
