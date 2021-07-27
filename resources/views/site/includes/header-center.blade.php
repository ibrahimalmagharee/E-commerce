<div class="header-center hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo"
                 class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="{{route('home')}}">
                    <img class="logo img-fluid"
                         src="{{asset('assets/front/modules/novthemeconfig/images/logos/logo-1.png')}}"
                         alt="Prestashop_Savemart">
                </a>
            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">support<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">اتصل بخدمة العملاء :</div>
                        <div class="phone-support">
                            1234 567 899
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        <a class="login" href="{{route('profile')}}" rel="nofollow" title="Log in to your customer account"><i
                                class="header-icon-account"></i></a>
                    </div>
                    <div class="header_link_wishlist">
                        <a href="{{route('wishlist.products.index')}}" title="My Wishlists">
                            <i class="header-icon-wishlist"></i>
                        </a>
                    </div>
                    <div id="_desktop_cart">
                        <div class="blockcart cart-preview active" data-refresh-url="">
                            <div class="header-cart">
                                <div class="cart-left">
                                    <a href="{{route('cart.products.index')}}" title="My Cart">
                                        <div class="shopping-cart">
                                            <i class="zmdi zmdi-shopping-cart"></i>

                                        </div>

                                    </a>
                                    <div class="cart-products-count">@auth('customer') {{count($cart_products)}} @else 0 @endauth </div>
                                </div>
                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart">Cart</span>
                                    <span class="cart-item"> items</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

