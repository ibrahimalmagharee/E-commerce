<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{__('translate-admin/sidebar.main')}} </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.purchases')}} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{\App\Models\Purchase::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'admin.purchase' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('admin.purchase')}}" data-i18n="nav.dash.ecommerce">  {{__('translate-admin/sidebar.show_purchases')}}</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.customers')}} </span>
                    <span
                        class="badge badge badge-dark badge-pill float-right mr-2">{{\App\Models\Customer::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'admin.customers' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('admin.customers')}}" data-i18n="nav.dash.ecommerce">  {{__('translate-admin/sidebar.show_customers')}}</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('translate-admin/sidebar.slider')}} </span>
                    <span
                        class="badge badge badge-warning badge-pill float-right mr-2">{{\App\Models\Slider::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.sliders' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.sliders')}}" data-i18n="nav.dash.ecommerce"> {{__('translate-admin/sidebar.show_slider')}}</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.banners')}} </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{\App\Models\Banner::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.banners' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.banners')}}" data-i18n="nav.dash.ecommerce"> {{__('translate-admin/sidebar.show_banners')}}</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.categories')}} </span>
                    <span
                        class="badge badge badge-secondary badge-pill float-right mr-2">{{\App\Models\Category::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.categories' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.categories')}}" data-i18n="nav.dash.ecommerce">{{__('translate-admin/sidebar.show-category')}}</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.brands')}} </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{\App\Models\Brand::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.brand' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.brand')}}" data-i18n="nav.dash.ecommerce">{{__('translate-admin/sidebar.show-brands')}}</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.tags')}} </span>
                    <span
                        class="badge badge badge-dark badge-pill float-right mr-2">{{\App\Models\Tag::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.tag' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.tag')}}" data-i18n="nav.dash.ecommerce">{{__('translate-admin/sidebar.show-tags')}} </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('translate-admin/sidebar.products')}} </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Product::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="{{'index.product' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('index.product')}}" data-i18n="nav.dash.ecommerce"> {{__('translate-admin/sidebar.show_products')}} </a>
                    </li>

                    <li class="{{'create.product' == request()->path() ? 'active' : ''}}"><a class="menu-item" href="{{route('create.product')}}" data-i18n="nav.dash.ecommerce"> {{__('translate-admin/sidebar.add_product')}} </a>
                    </li>

                    <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main"><span class="menu-title" data-i18n="nav.dash.main"> {{__('translate-admin/sidebar.attribute_product')}} </span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('index.attribute')}}"
                                   data-i18n="nav.templates.vert.classic_menu"> {{__('translate-admin/sidebar.show_attributes')}}</a>
                            </li>

                        </ul>

                    </li>

                </ul>
            </li>




{{--            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"--}}
{{--                                                                                    data-i18n="nav.templates.main">{{__('translate-admin/sidebar.setting')}}</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{__('translate-admin/sidebar.shipping-method')}}</a>--}}
{{--                        <ul class="menu-content">--}}
{{--                            <li><a class="menu-item" href="{{route('edit.shipping','free')}}"--}}
{{--                                   data-i18n="nav.templates.vert.classic_menu">{{__('translate-admin/sidebar.free shipping')}}</a>--}}
{{--                            </li>--}}
{{--                            <li><a class="menu-item" href="{{route('edit.shipping', 'inner')}}">{{__('translate-admin/sidebar.locale shipping')}}</a>--}}
{{--                            </li>--}}
{{--                            <li><a class="menu-item" href="{{route('edit.shipping', 'outer')}}"--}}
{{--                                   data-i18n="nav.templates.vert.compact_menu">{{__('translate-admin/sidebar.outer shipping')}}</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}

        </ul>
    </div>
</div>
