@extends('layouts.site')

@section('content')
    <div id="displayTop" class="displaytopthree">
        <div class="container">
            <div class="row">
                <div class="nov-row  col-lg-12 col-xs-12">
                    <div class="nov-row-wrap row">
                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                        <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block_content">

                                </div>
                            </div>
                        </div>

                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->

                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                             data-effect="random"
                             data-slices="15"
                             data-animSpeed="500"
                             data-pauseTime="10000"
                             data-startSlide="0"
                             data-directionnav="false"
                             data-controlNav="true"
                             data-controlNavThumbs="false"
                             data-pauseOnHover="true"
                             data-manualAdvance="false"
                             data-randomStart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        @isset($data['sliders'])
                                            @foreach($data['sliders'] as $slider)
                                                <div class="dot"></div>
                                            @endforeach
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">
                                @isset($data['sliders'])
                                    @foreach($data['sliders'] as $slider)
                                        <a href="#">
                                            <img src="{{$slider->getPhoto($slider->photo)}}" alt=""
                                                 title="#htmlcaption_42"/>
                                        </a>
                                    @endforeach
                                @endisset


                            </div>

                        </div>

                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main">


        <section id="content" class="page-home pagehome-three">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/image.tpl -->
                            @isset($data['first_banners'])
                                @foreach($data['first_banners'] as $banner)
                                    <div class="nov-image col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="{{route('category',$banner->category-> slug )}}"> <img
                                                            class="img-fluid" style="width: 300px; height: 300px"
                                                            src="{{$banner->getPhoto($banner->photo)}}" alt="banner3-1"
                                                            title="banner3-1"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach
                        @endisset


                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/image.tpl -->
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/countdown_product.tpl -->
                        {{--                            <div class="nov-productlist nov-countdown-productlist col-xl-4 col-lg-4 col-md-4  col-xs-12 col-md-12">--}}
                        {{--                                <div class="block block-product clearfix">--}}
                        {{--                                    <h2 class="title_block">--}}
                        {{--                                        FLASH DEALS--}}
                        {{--                                    </h2>--}}
                        {{--                                    <div class="block_content">--}}
                        {{--                                        <div id="productlist706506225" class="product_list countdown-productlist countdown-column-1 owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="30" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="2" data-items_mobile="1">--}}
                        {{--                                            <div class="item item-list">--}}
                        {{--                                                <div class="product-miniature js-product-miniature first_item" data-id-product="12" data-id-product-attribute="232" itemscope itemtype="http://schema.org/Product">--}}
                        {{--                                                    <div class="thumbnail-container">--}}

                        {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">--}}
                        {{--                                                            <img class="img-fluid image-cover" src = "http://demo.bestprestashoptheme.com/savemart/79-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                        {{--                                                                 alt = ""--}}
                        {{--                                                                 data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                        {{--                                                                 width="600"--}}
                        {{--                                                                 height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                            <img--}}
                        {{--                                                                class="img-fluid image-secondary"--}}
                        {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/80-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                        {{--                                                                alt = ""--}}
                        {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                        {{--                                                                width="600"--}}
                        {{--                                                                height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                        </a>--}}


                        {{--                                                        <div class="product-flags discount">Sale</div>--}}




                        {{--                                                    </div>--}}
                        {{--                                                    <div class="product-description">--}}
                        {{--                                                        <div class="product-groups">--}}

                        {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">Nam volutpat justo a vehicula</a></div>--}}


                        {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                        {{--                                                            <div class="product-comments">--}}
                        {{--                                                                <div class="star_content">--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <span>0 review</span>--}}
                        {{--                                                            </div>--}}
                        {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                        {{--                                                            <p class="seller_name">--}}
                        {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                        {{--                                                                    <i class="fa fa-user"></i>--}}
                        {{--                                                                    Harry Makle--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </p>--}}

                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}

                        {{--                                                            <div class="product-group-price">--}}

                        {{--                                                                <div class="product-price-and-shipping">--}}



                        {{--                                                                    <span itemprop="price" class="price">7.56 UK£</span>--}}



                        {{--                                                                    <span class="regular-price">10.80 UK£</span>--}}




                        {{--                                                                </div>--}}

                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                        {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                        {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                        {{--                                                                <input type="hidden" name="id_product" value="12">--}}
                        {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                        {{--                                                            </form>--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a class="addToWishlist wishlistProd_12" href="#" data-rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">--}}
                        {{--                                                                <i class="fa fa-heart"></i>--}}
                        {{--                                                                <span>Add to Wishlist</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                        {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </div>--}}

                        {{--                                                    </div>--}}

                        {{--                                                    <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}
                        {{--                                                    <div class="countdownfree d-flex" data-date="2021/12/30"></div>--}}

                        {{--                                                    <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}

                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="item item-list">--}}
                        {{--                                                <div class="product-miniature js-product-miniature first_item" data-id-product="15" data-id-product-attribute="303" itemscope itemtype="http://schema.org/Product">--}}
                        {{--                                                    <div class="thumbnail-container">--}}

                        {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                        {{--                                                            <img class="img-fluid image-cover" src = "http://demo.bestprestashoptheme.com/savemart/94-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                        {{--                                                                 alt = ""--}}
                        {{--                                                                 data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/94-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                        {{--                                                                 width="600"--}}
                        {{--                                                                 height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                            <img--}}
                        {{--                                                                class="img-fluid image-secondary"--}}
                        {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/95-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                        {{--                                                                alt = ""--}}
                        {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/95-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                        {{--                                                                width="600"--}}
                        {{--                                                                height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                        </a>--}}


                        {{--                                                        <div class="product-flags discount">Sale</div>--}}




                        {{--                                                    </div>--}}
                        {{--                                                    <div class="product-description">--}}
                        {{--                                                        <div class="product-groups">--}}

                        {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر">Nunc tempus velit quis urnanb</a></div>--}}


                        {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                        {{--                                                            <div class="product-comments">--}}
                        {{--                                                                <div class="star_content">--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <span>0 review</span>--}}
                        {{--                                                            </div>--}}
                        {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                        {{--                                                            <p class="seller_name">--}}
                        {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                        {{--                                                                    <i class="fa fa-user"></i>--}}
                        {{--                                                                    David James--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </p>--}}

                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}

                        {{--                                                            <div class="product-group-price">--}}

                        {{--                                                                <div class="product-price-and-shipping">--}}



                        {{--                                                                    <span itemprop="price" class="price">37.80 UK£</span>--}}



                        {{--                                                                    <span class="regular-price">42.00 UK£</span>--}}




                        {{--                                                                </div>--}}

                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                        {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                        {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                        {{--                                                                <input type="hidden" name="id_product" value="15">--}}
                        {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                        {{--                                                            </form>--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a class="addToWishlist wishlistProd_15" href="#" data-rel="15" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;">--}}
                        {{--                                                                <i class="fa fa-heart"></i>--}}
                        {{--                                                                <span>Add to Wishlist</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                        {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </div>--}}

                        {{--                                                    </div>--}}

                        {{--                                                    <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}
                        {{--                                                    <div class="countdownfree d-flex" data-date="2021/12/30"></div>--}}

                        {{--                                                    <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}

                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="item item-list">--}}
                        {{--                                                <div class="product-miniature js-product-miniature first_item" data-id-product="16" data-id-product-attribute="323" itemscope itemtype="http://schema.org/Product">--}}
                        {{--                                                    <div class="thumbnail-container">--}}

                        {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">--}}
                        {{--                                                            <img class="img-fluid image-cover" src = "http://demo.bestprestashoptheme.com/savemart/99-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                        {{--                                                                 alt = ""--}}
                        {{--                                                                 data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                        {{--                                                                 width="600"--}}
                        {{--                                                                 height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                            <img--}}
                        {{--                                                                class="img-fluid image-secondary"--}}
                        {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/100-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                        {{--                                                                alt = ""--}}
                        {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                        {{--                                                                width="600"--}}
                        {{--                                                                height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                        </a>--}}


                        {{--                                                        <div class="product-flags discount">Sale</div>--}}




                        {{--                                                    </div>--}}
                        {{--                                                    <div class="product-description">--}}
                        {{--                                                        <div class="product-groups">--}}

                        {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود">Cras consequat quis dolor eunde</a></div>--}}


                        {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                        {{--                                                            <div class="product-comments">--}}
                        {{--                                                                <div class="star_content">--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <span>0 review</span>--}}
                        {{--                                                            </div>--}}
                        {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                        {{--                                                            <p class="seller_name">--}}
                        {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                        {{--                                                                    <i class="fa fa-user"></i>--}}
                        {{--                                                                    Harry Makle--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </p>--}}

                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}

                        {{--                                                            <div class="product-group-price">--}}

                        {{--                                                                <div class="product-price-and-shipping">--}}



                        {{--                                                                    <span itemprop="price" class="price">21.60 UK£</span>--}}



                        {{--                                                                    <span class="regular-price">24.00 UK£</span>--}}




                        {{--                                                                </div>--}}

                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                        {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                        {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                        {{--                                                                <input type="hidden" name="id_product" value="16">--}}
                        {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                        {{--                                                            </form>--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a class="addToWishlist wishlistProd_16" href="#" data-rel="16" onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;">--}}
                        {{--                                                                <i class="fa fa-heart"></i>--}}
                        {{--                                                                <span>Add to Wishlist</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                        {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </div>--}}

                        {{--                                                    </div>--}}

                        {{--                                                    <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}
                        {{--                                                    <div class="countdownfree d-flex" data-date="2021/12/30"></div>--}}

                        {{--                                                    <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}

                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="item item-list">--}}
                        {{--                                                <div class="product-miniature js-product-miniature first_item" data-id-product="21" data-id-product-attribute="391" itemscope itemtype="http://schema.org/Product">--}}
                        {{--                                                    <div class="thumbnail-container">--}}

                        {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">--}}
                        {{--                                                            <img class="img-fluid image-cover" src = "http://demo.bestprestashoptheme.com/savemart/120-home_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
                        {{--                                                                 alt = ""--}}
                        {{--                                                                 data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/120-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
                        {{--                                                                 width="600"--}}
                        {{--                                                                 height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                            <img--}}
                        {{--                                                                class="img-fluid image-secondary"--}}
                        {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/121-home_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
                        {{--                                                                alt = ""--}}
                        {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/121-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
                        {{--                                                                width="600"--}}
                        {{--                                                                height="600"--}}
                        {{--                                                            >--}}
                        {{--                                                        </a>--}}


                        {{--                                                        <div class="product-flags discount">Sale</div>--}}




                        {{--                                                    </div>--}}
                        {{--                                                    <div class="product-description">--}}
                        {{--                                                        <div class="product-groups">--}}

                        {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-الحجم-ص/13-اللون_-برتقالي">Nunc eros lacus porta sed mattis</a></div>--}}


                        {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                        {{--                                                            <div class="product-comments">--}}
                        {{--                                                                <div class="star_content">--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                    <div class="star"></div>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <span>0 review</span>--}}
                        {{--                                                            </div>--}}
                        {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                        {{--                                                            <p class="seller_name">--}}
                        {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                        {{--                                                                    <i class="fa fa-user"></i>--}}
                        {{--                                                                    David James--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </p>--}}

                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}

                        {{--                                                            <div class="product-group-price">--}}

                        {{--                                                                <div class="product-price-and-shipping">--}}



                        {{--                                                                    <span itemprop="price" class="price">16.20 UK£</span>--}}



                        {{--                                                                    <span class="regular-price">18.00 UK£</span>--}}




                        {{--                                                                </div>--}}

                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                        {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                        {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                        {{--                                                                <input type="hidden" name="id_product" value="21">--}}
                        {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                        {{--                                                            </form>--}}

                        {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a class="addToWishlist wishlistProd_21" href="#" data-rel="21" onclick="WishlistCart('wishlist_block_list', 'add', '21', false, 1); return false;">--}}
                        {{--                                                                <i class="fa fa-heart"></i>--}}
                        {{--                                                                <span>Add to Wishlist</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                        {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                        {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </div>--}}

                        {{--                                                    </div>--}}

                        {{--                                                    <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}
                        {{--                                                    <div class="countdownfree d-flex" data-date="2021/12/30"></div>--}}

                        {{--                                                    <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->--}}

                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/countdown_product.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            <div
                                class="nov-productlist  productlist-rows     col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{__('translate-site/index.new_arrivals')}}
                                    </h2>
                                    <div class="block_content">

                                        <div id="productlist1693764381"
                                             class="product_list grid owl-carousel owl-theme " data-autoplay="false"
                                             data-autoplayTimeout="6000" data-loop="false" data-margin="30"
                                             data-dots="false" data-nav="true" data-items="2" data-items_large="2"
                                             data-items_tablet="3" data-items_mobile="1">
                                            @isset($latest_products)
                                                @foreach($latest_products as $product)
                                                    <div class="item  text-center">

                                                        <div
                                                            class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                            data-id-product="1" data-id-product-attribute="40" itemscope
                                                            itemtype="http://schema.org/Product">

                                                            <div class="col-12 col-w40 pl-0">
                                                                <div class="thumbnail-container">

                                                                    <a href="{{route('product.details',$product -> slug)}}"
                                                                       class="thumbnail product-thumbnail two-image">
                                                                        <img
                                                                            class="img-fluid image-cover"
                                                                            src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                            alt=""
                                                                            data-full-size-image-url="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                            width="600"
                                                                            height="600"
                                                                        >
                                                                        <img
                                                                            class="img-fluid image-secondary"
                                                                            src="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                            alt=""
                                                                            data-full-size-image-url="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                            width="600"
                                                                            height="600"
                                                                        >
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w60 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">

                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    {{--                                                                        <div class="product-comments">--}}
                                                                    {{--                                                                            <div class="star_content">--}}
                                                                    {{--                                                                                <div class="star star_on"></div>--}}
                                                                    {{--                                                                                <div class="star star_on"></div>--}}
                                                                    {{--                                                                                <div class="star star_on"></div>--}}
                                                                    {{--                                                                                <div class="star star_on"></div>--}}
                                                                    {{--                                                                                <div class="star star_on"></div>--}}
                                                                    {{--                                                                            </div>--}}
                                                                    {{--                                                                            <span>5 review</span>--}}
                                                                    {{--                                                                        </div>--}}
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    {{--                                                                        <p class="seller_name">--}}
                                                                    {{--                                                                            <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                                                                    {{--                                                                                <i class="fa fa-user"></i>--}}
                                                                    {{--                                                                                David James--}}
                                                                    {{--                                                                            </a>--}}
                                                                    {{--                                                                        </p>--}}

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                        <div class="product-title" itemprop="name"><a
                                                                                href="{{route('product.details',$product -> slug)}}">{{$product->name}}</a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                    <span itemprop="price"
                                                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                                @if($product -> special_price)
                                                                                    <span
                                                                                        class="regular-price">{{$product -> price}}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-buttons d-flex justify-content-center"
                                                                        itemprop="offers" itemscope=""
                                                                    >
                                                                        <form
                                                                            action=""
                                                                            method="post" class="formAddToCart">
                                                                            @csrf
                                                                            <input type="hidden" name="id_product"
                                                                                   value="{{$product -> id}}">
                                                                            <a class="add-to-cart cart-addition"
                                                                               data-product-id="{{$product -> id}}"
                                                                               data-product-slug="{{$product -> slug}}"
                                                                               href="#"
                                                                               data-button-action="add-to-cart"><i
                                                                                    class="novicon-cart"></i><span>Add to cart</span></a>
                                                                        </form>

                                                                        <a class="addToWishlist  wishlistProd_22"
                                                                           href="#"
                                                                           data-product-id="{{$product -> id}}"
                                                                        >
                                                                            <i class="fa fa-heart"></i>
                                                                            <span>Add to Wishlist</span>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down"
                                                                           data-product-id="{{$product -> id}}"
                                                                           data-link-action="quickview">
                                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                @endforeach

                                            @endisset

                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="4" data-id-product-attribute="112" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Taylor Jonson--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="4">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row" data-id-product="5" data-id-product-attribute="134" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Taylor Jonson--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula vel tempus sit amet ulte</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">34.80 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="5">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="6" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Taylor Jonson--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">14.28 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="6">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="7" data-id-product-attribute="155" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Taylor Jonson--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec non lectus ac erat sedei</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">14.28 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="7">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_7" href="#" data-rel="7" onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row" data-id-product="8" data-id-product-attribute="172" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/59-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/60-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Taylor Jonson--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر">Curabitur in lorem sit ameten alt</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="8">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_8" href="#" data-rel="8" onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="9" data-id-product-attribute="179" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/64-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/64-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/65-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/65-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر">Mauris feugiat et dui sit amet</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">24.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="9">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_9" href="#" data-rel="9" onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="10" data-id-product-attribute="192" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/69-home_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/69-large_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/70-home_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/70-large_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي">Nullam lacinia metus posuere</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">36.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="10">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_10" href="#" data-rel="10" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row" data-id-product="12" data-id-product-attribute="232" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/79-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/80-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">Nam volutpat justo a vehicula</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">7.56 UK£</span>--}}



                                            {{--                                                                        <span class="regular-price">10.80 UK£</span>--}}




                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="12">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_12" href="#" data-rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="13" data-id-product-attribute="254" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        David James--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">12.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="13">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="14" data-id-product-attribute="270" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/89-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/89-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/90-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/90-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Donec laoreet imperdiet elit ut</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="14">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_14" href="#" data-rel="14" onclick="WishlistCart('wishlist_block_list', 'add', '14', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row" data-id-product="15" data-id-product-attribute="303" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/94-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/94-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/95-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/95-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        David James--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر">Nunc tempus velit quis urnanb</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">37.80 UK£</span>--}}



                                            {{--                                                                        <span class="regular-price">42.00 UK£</span>--}}




                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="15">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_15" href="#" data-rel="15" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="16" data-id-product-attribute="323" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/99-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/100-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود">Cras consequat quis dolor eunde</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">21.60 UK£</span>--}}



                                            {{--                                                                        <span class="regular-price">24.00 UK£</span>--}}




                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="16">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_16" href="#" data-rel="16" onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="17" data-id-product-attribute="328" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">12.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="17">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row" data-id-product="18" data-id-product-attribute="363" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/109-home_default/mauris-semper-mattis-gravida.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/109-large_default/mauris-semper-mattis-gravida.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/110-home_default/mauris-semper-mattis-gravida.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/110-large_default/mauris-semper-mattis-gravida.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-الحجم-ص/10-اللون_-احمر">Mauris semper mattis gravida</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="18">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_18" href="#" data-rel="18" onclick="WishlistCart('wishlist_block_list', 'add', '18', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="19" data-id-product-attribute="383" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="col-12 col-w40 pl-0">--}}
                                            {{--                                                        <div class="thumbnail-container">--}}

                                            {{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-cover"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                                <img--}}
                                            {{--                                                                    class="img-fluid image-secondary"--}}
                                            {{--                                                                    src = "http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
                                            {{--                                                                    alt = ""--}}
                                            {{--                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
                                            {{--                                                                    width="600"--}}
                                            {{--                                                                    height="600"--}}
                                            {{--                                                                >--}}
                                            {{--                                                            </a>--}}

                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="col-12 col-w60 no-padding">--}}
                                            {{--                                                        <div class="product-description">--}}
                                            {{--                                                            <div class="product-groups">--}}

                                            {{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                                <div class="product-comments">--}}
                                            {{--                                                                    <div class="star_content">--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                        <div class="star"></div>--}}
                                            {{--                                                                    </div>--}}
                                            {{--                                                                    <span>0 review</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                                <p class="seller_name">--}}
                                            {{--                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                        <i class="fa fa-user"></i>--}}
                                            {{--                                                                        Harry Makle--}}
                                            {{--                                                                    </a>--}}
                                            {{--                                                                </p>--}}

                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>--}}

                                            {{--                                                                <div class="product-group-price">--}}

                                            {{--                                                                    <div class="product-price-and-shipping">--}}



                                            {{--                                                                        <span itemprop="price" class="price">12.00 UK£</span>--}}





                                            {{--                                                                    </div>--}}

                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                                <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                    <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                    <input type="hidden" name="id_product" value="19">--}}
                                            {{--                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                                </form>--}}

                                            {{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">--}}
                                            {{--                                                                    <i class="fa fa-heart"></i>--}}
                                            {{--                                                                    <span>Add to Wishlist</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->
                        </div>
                    </div>
                    <div class="nov-row spacing-30 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/image.tpl -->
{{--                            @isset($data['latest_banners'])--}}
{{--                                @foreach($data['latest_banners'] as $banner)--}}
{{--                                    <div class="nov-image col-lg-6 col-md-6">--}}
{{--                                        <div class="block">--}}
{{--                                            <div class="block_content">--}}
{{--                                                <div class="effect">--}}
{{--                                                    <a href="{{route('category',$banner->category-> slug )}}"> <img--}}
{{--                                                            class="img-fluid" style="width: 300px; height: 300px"--}}
{{--                                                            src="{{$banner->getPhoto($banner->photo)}}" alt="banner-4"--}}
{{--                                                            title="banner-4"></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                            @endforeach--}}
{{--                        @endisset--}}



                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/image.tpl -->
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            <div
                                class="nov-productlist   productlist-slider      col-xl-9 col-lg-9 col-md-9 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{__('translate-site/index.trending_now')}}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist381904327"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="3"
                                             data-items_large="3" data-items_tablet="3" data-items_mobile="2">
                                            @isset($trending_now)
                                                @foreach($trending_now as $product)
                                                    <div class="item  text-center">
                                                        <div
                                                            class="product-miniature js-product-miniature item-one first_item p-5"
                                                            data-id-product="1" data-id-product-attribute="40" itemscope
                                                            itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product -> slug)}}"
                                                                   class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                        alt=""
                                                                        data-full-size-image-url="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                        alt=""
                                                                        data-full-size-image-url="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>


                                                            </div>

                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                {{--                                                                    <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-hummingbird-printed-t-shirt.html"></a></div>--}}


                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                {{--                                                                    <div class="product-comments">--}}
                                                                {{--                                                                        <div class="star_content">--}}
                                                                {{--                                                                            <div class="star star_on"></div>--}}
                                                                {{--                                                                            <div class="star star_on"></div>--}}
                                                                {{--                                                                            <div class="star star_on"></div>--}}
                                                                {{--                                                                            <div class="star star_on"></div>--}}
                                                                {{--                                                                            <div class="star star_on"></div>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                        <span>5 review</span>--}}
                                                                {{--                                                                    </div>--}}
                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                {{--                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                                                {{--                                                                    <p class="seller_name">--}}
                                                                {{--                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                                                                {{--                                                                            <i class="fa fa-user"></i>--}}
                                                                {{--                                                                            David James--}}
                                                                {{--                                                                        </a>--}}
                                                                {{--                                                                    </p>--}}

                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                    <div class="product-title" itemprop="name"><a
                                                                            href="{{route('product.details',$product -> slug)}}">{{$product->name}}</a>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                    <span itemprop="price"
                                                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                            @if($product -> special_price)
                                                                                <span
                                                                                    class="regular-price">{{$product -> price}}</span>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center"
                                                                     itemprop="offers" itemscope=""
                                                                     itemtype="http://schema.org/Offer">
                                                                    <form
                                                                        action=""
                                                                        method="post" class="formAddToCart">
                                                                        @csrf
                                                                        <input type="hidden" name="id_product"
                                                                               value="{{$product -> id}}">
                                                                        <a class="add-to-cart cart-addition" data-product-id="{{$product -> id}}" data-product-slug="{{$product -> slug}}" href="#"
                                                                           data-button-action="add-to-cart"><i
                                                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                                                    </form>

                                                                    <a class="addToWishlist  wishlistProd_22" href="#"
                                                                       data-product-id="{{$product -> id}}"
                                                                    >
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <a href="#" class="quick-view hidden-sm-down"
                                                                       data-product-id="{{$product -> id}}">
                                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endisset
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one first_item" data-id-product="3" data-id-product-attribute="95" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-the-best-is-yet-to-come-framed-poster.html">Smartphone &amp; Tablet</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star star_on"></div>--}}
                                            {{--                                                                    <div class="star star_on"></div>--}}
                                            {{--                                                                    <div class="star star_on"></div>--}}
                                            {{--                                                                    <div class="star star_on"></div>--}}
                                            {{--                                                                    <div class="star star_on"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>5 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">30.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="3">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="4" data-id-product-attribute="112" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-the-adventure-begins-framed-poster.html">Home Appliance</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="4">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one first_item" data-id-product="5" data-id-product-attribute="134" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-today-is-a-good-day-framed-poster.html">Audio</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula vel tempus sit amet ulte</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">34.80 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="5">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="6" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Home Appliance</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">14.28 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="6">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one first_item" data-id-product="7" data-id-product-attribute="155" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-donec-non-lectus-ac-erat-sedei.html">Home Appliance</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec non lectus ac erat sedei</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">14.28 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="7">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_7" href="#" data-rel="7" onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="8" data-id-product-attribute="172" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/59-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/60-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-curabitur-in-lorem-sit-ameten-alt.html">Audio</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Taylor Jonson--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر">Curabitur in lorem sit ameten alt</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">18.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="8">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_8" href="#" data-rel="8" onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one first_item" data-id-product="9" data-id-product-attribute="179" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/64-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/64-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/65-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/65-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-mauris-feugiat-et-dui-sit-amet.html">Smartphone &amp; Tablet</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Harry Makle--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر">Mauris feugiat et dui sit amet</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">24.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="9">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_9" href="#" data-rel="9" onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="10" data-id-product-attribute="192" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/69-home_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/69-large_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/70-home_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/70-large_default/nullam-lacinia-metus-posuere.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-nullam-lacinia-metus-posuere.html">Smartphone &amp; Tablet</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Harry Makle--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي">Nullam lacinia metus posuere</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">36.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="10">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_10" href="#" data-rel="10" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="item  text-center">--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one first_item" data-id-product="12" data-id-product-attribute="232" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/79-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/80-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}


                                            {{--                                                        <div class="product-flags discount">Sale</div>--}}



                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-nam-volutpat-justo-a-vehicula.html">Home Appliance</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    Harry Makle--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">Nam volutpat justo a vehicula</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">7.56 UK£</span>--}}



                                            {{--                                                                    <span class="regular-price">10.80 UK£</span>--}}




                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="12">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_12" href="#" data-rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="13" data-id-product-attribute="254" itemscope itemtype="http://schema.org/Product">--}}
                                            {{--                                                    <div class="thumbnail-container">--}}

                                            {{--                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-cover"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                            <img--}}
                                            {{--                                                                class="img-fluid image-secondary"--}}
                                            {{--                                                                src = "http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                alt = ""--}}
                                            {{--                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
                                            {{--                                                                width="600"--}}
                                            {{--                                                                height="600"--}}
                                            {{--                                                            >--}}
                                            {{--                                                        </a>--}}





                                            {{--                                                    </div>--}}

                                            {{--                                                    <div class="product-description">--}}
                                            {{--                                                        <div class="product-groups">--}}

                                            {{--                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-proin-placerat-lacus-eget-auctor.html">Audio</a></div>--}}


                                            {{--                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
                                            {{--                                                            <div class="product-comments">--}}
                                            {{--                                                                <div class="star_content">--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                    <div class="star"></div>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <span>0 review</span>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
                                            {{--                                                            <p class="seller_name">--}}
                                            {{--                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
                                            {{--                                                                    <i class="fa fa-user"></i>--}}
                                            {{--                                                                    David James--}}
                                            {{--                                                                </a>--}}
                                            {{--                                                            </p>--}}

                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


                                            {{--                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>--}}

                                            {{--                                                            <div class="product-group-price">--}}

                                            {{--                                                                <div class="product-price-and-shipping">--}}



                                            {{--                                                                    <span itemprop="price" class="price">12.00 UK£</span>--}}





                                            {{--                                                                </div>--}}

                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">--}}
                                            {{--                                                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">--}}
                                            {{--                                                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">--}}
                                            {{--                                                                <input type="hidden" name="id_product" value="13">--}}
                                            {{--                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>--}}
                                            {{--                                                            </form>--}}

                                            {{--                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">--}}
                                            {{--                                                                <i class="fa fa-heart"></i>--}}
                                            {{--                                                                <span>Add to Wishlist</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->--}}

                                            {{--                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">--}}
                                            {{--                                                                <i class="fa fa-search"></i><span> نظرة سريعة</span>--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            <div
                                class="nov-productlist     productlist-liststyle-2  col-xl-3 col-lg-3 col-md-3 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{__('translate-site/index.best_sellers')}}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist331208303"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="3" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                               @isset($best_sellers)
                                                   @foreach($best_sellers as $product)
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                             data-id-product="1" data-id-product-attribute="40" itemscope
                                                             itemtype="http://schema.org/Product">
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="{{route('product.details',$product -> slug)}}"
                                                                       class="thumbnail product-thumbnail two-image">
                                                                        <img
                                                                            class="img-fluid image-cover"
                                                                            src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                            alt=""
                                                                            data-full-size-image-url="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                            width="600"
                                                                            height="600"
                                                                        >
                                                                        <img
                                                                            class="img-fluid image-secondary"
                                                                            src="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                            alt=""
                                                                            data-full-size-image-url="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                            width="600"
                                                                            height="600"
                                                                        >
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">

                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>5 review</span>--}}
{{--                                                                        </div>--}}
                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                David James--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                        <div class="product-title" itemprop="name"><a
                                                                                href="{{route('product.details',$product -> slug)}}">
                                                                                {{$product -> name}}</a></div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                    <span itemprop="price"
                                                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                                @if($product -> special_price)
                                                                                    <span
                                                                                        class="regular-price">{{$product -> price}}</span>
                                                                                @endif

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                @endisset
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="2" data-id-product-attribute="60" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem--}}
{{--                                                                        ipsum dolor sit amet ege</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="3" data-id-product-attribute="95" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>5 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris--}}
{{--                                                                        molestie porttitor diam</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">30.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="4" data-id-product-attribute="112" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas--}}
{{--                                                                        vulputate ligula vel</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="5" data-id-product-attribute="134" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula--}}
{{--                                                                        vel tempus sit amet ulte</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">34.80 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="6" data-id-product-attribute="0" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam--}}
{{--                                                                        tempor orci eu pretium</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="7" data-id-product-attribute="155" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec--}}
{{--                                                                        non lectus ac erat sedei</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="8" data-id-product-attribute="172" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/59-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/60-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر">Curabitur--}}
{{--                                                                        in lorem sit ameten alt</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="9" data-id-product-attribute="179" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/64-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/64-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/65-home_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/65-large_default/mauris-feugiat-et-dui-sit-amet.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/9-179-mauris-feugiat-et-dui-sit-amet.html#/1-الحجم-ص/15-اللون_-اخضر">Mauris--}}
{{--                                                                        feugiat et dui sit amet</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">24.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="10" data-id-product-attribute="192" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/69-home_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/69-large_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/70-home_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/70-large_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي">Nullam--}}
{{--                                                                        lacinia metus posuere</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="12" data-id-product-attribute="232" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/79-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/80-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">Nam--}}
{{--                                                                        volutpat justo a vehicula</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">7.56 UK£</span>--}}


{{--                                                                        <span class="regular-price">10.80 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="13" data-id-product-attribute="254" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin--}}
{{--                                                                        placerat lacus eget auctor</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">12.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="14" data-id-product-attribute="270" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/89-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/89-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/90-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/90-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Donec--}}
{{--                                                                        laoreet imperdiet elit ut</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="15" data-id-product-attribute="303" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/94-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/94-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/95-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/95-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر">Nunc--}}
{{--                                                                        tempus velit quis urnanb</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">37.80 UK£</span>--}}


{{--                                                                        <span class="regular-price">42.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="16" data-id-product-attribute="323" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/99-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/100-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود">Cras--}}
{{--                                                                        consequat quis dolor eunde</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">21.60 UK£</span>--}}


{{--                                                                        <span class="regular-price">24.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="17" data-id-product-attribute="328" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam--}}
{{--                                                                        feugiat tellus nec ultrices</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">12.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="18" data-id-product-attribute="363" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/109-home_default/mauris-semper-mattis-gravida.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/109-large_default/mauris-semper-mattis-gravida.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/110-home_default/mauris-semper-mattis-gravida.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/110-large_default/mauris-semper-mattis-gravida.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/18-363-mauris-semper-mattis-gravida.html#/1-الحجم-ص/10-اللون_-احمر">Mauris--}}
{{--                                                                        semper mattis gravida</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="19" data-id-product-attribute="383" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus--}}
{{--                                                                        non ante quis est rhont</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">12.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="21" data-id-product-attribute="391" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/120-home_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/120-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/121-home_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/121-large_default/nunc-eros-lacus-porta-sed-mattis.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/21-391-nunc-eros-lacus-porta-sed-mattis.html#/1-الحجم-ص/13-اللون_-برتقالي">Nunc--}}
{{--                                                                        eros lacus porta sed mattis</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">16.20 UK£</span>--}}


{{--                                                                        <span class="regular-price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="22" data-id-product-attribute="408" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/22-408-aenean-porta-ligula-egestas-east.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/125-home_default/aenean-porta-ligula-egestas-east.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/125-large_default/aenean-porta-ligula-egestas-east.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/126-home_default/aenean-porta-ligula-egestas-east.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/126-large_default/aenean-porta-ligula-egestas-east.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/22-408-aenean-porta-ligula-egestas-east.html#/1-الحجم-ص/10-اللون_-احمر">Aenean--}}
{{--                                                                        porta ligula egestas east</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">24.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="23" data-id-product-attribute="443" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/23-443-aliquam-in-augue-ac-enim-tinci.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/131-home_default/aliquam-in-augue-ac-enim-tinci.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/131-large_default/aliquam-in-augue-ac-enim-tinci.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/132-home_default/aliquam-in-augue-ac-enim-tinci.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/132-large_default/aliquam-in-augue-ac-enim-tinci.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/23-443-aliquam-in-augue-ac-enim-tinci.html#/1-الحجم-ص/10-اللون_-احمر">Aliquam--}}
{{--                                                                        in augue ac enim tinci</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.40 UK£</span>--}}


{{--                                                                        <span class="regular-price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="24" data-id-product-attribute="0" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/24-nullam-sed-sollicitudin-mauris.html"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/137-home_default/nullam-sed-sollicitudin-mauris.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/137-large_default/nullam-sed-sollicitudin-mauris.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/138-home_default/nullam-sed-sollicitudin-mauris.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/138-large_default/nullam-sed-sollicitudin-mauris.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/24-nullam-sed-sollicitudin-mauris.html">Nullam--}}
{{--                                                                        sed sollicitudin mauris</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">9.60 UK£</span>--}}


{{--                                                                        <span class="regular-price">12.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="26" data-id-product-attribute="0" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w37 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/26-nullam-sed-sollicitudin-valumis.html"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/146-home_default/nullam-sed-sollicitudin-valumis.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/146-large_default/nullam-sed-sollicitudin-valumis.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/147-home_default/nullam-sed-sollicitudin-valumis.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/147-large_default/nullam-sed-sollicitudin-valumis.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w63 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/26-nullam-sed-sollicitudin-valumis.html">Nullam--}}
{{--                                                                        sed sollicitudin valumis</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->
                        </div>
                    </div>
                    <div class="nov-row policy-home col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-1"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{__('translate-site/index.free_delivery_from')}}</div>
                                                <div class="policy-des"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-2"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{__('translate-site/index.money_back_guarantee')}}</div>
                                                <div class="policy-des"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-3"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">{{__('translate-site/index.authenticity_is_guaranteed')}}</div>
                                                <div class="policy-des"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            @isset($main_categories)
                                @foreach($main_categories as $category)
                                    <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                {{$category->name}}
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist162539295"
                                                     class="product_list grid owl-carousel owl-theme multi-row"
                                                     data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"
                                                     data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                                     data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                                    @isset($category->products)
                                                        @foreach($category->products as $product)
                                                    <div class="item  text-center">

                                                                <div
                                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                                    data-id-product="1" data-id-product-attribute="40" itemscope
                                                                    itemtype="http://schema.org/Product">
                                                                    <div class="col-12 col-w27 no-padding">
                                                                        <div class="thumbnail-container">

                                                                            <a href="{{route('product.details',$product -> slug)}}"
                                                                               class="thumbnail product-thumbnail two-image">
                                                                                <img
                                                                                    class="img-fluid image-cover"
                                                                                    src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                                    alt=""
                                                                                    data-full-size-image-url="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                                                    width="600"
                                                                                    height="600"
                                                                                >
                                                                                <img
                                                                                    class="img-fluid image-secondary"
                                                                                    src="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                                    alt=""
                                                                                    data-full-size-image-url="{{$product->getPhoto($product -> images[1] -> photo ?? '')}}"
                                                                                    width="600"
                                                                                    height="600"
                                                                                >
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-w73 no-padding">
                                                                        <div class="product-description">
                                                                            <div class="product-groups">

                                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
{{--                                                                                <div class="product-comments">--}}
{{--                                                                                    <div class="star_content">--}}
{{--                                                                                        <div class="star star_on"></div>--}}
{{--                                                                                        <div class="star star_on"></div>--}}
{{--                                                                                        <div class="star star_on"></div>--}}
{{--                                                                                        <div class="star star_on"></div>--}}
{{--                                                                                        <div class="star star_on"></div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <span>5 review</span>--}}
{{--                                                                                </div>--}}
                                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
{{--                                                                                <p class="seller_name">--}}
{{--                                                                                    <a title="View seller profile"--}}
{{--                                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                                        David James--}}
{{--                                                                                    </a>--}}
{{--                                                                                </p>--}}

                                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                                <div class="product-title" itemprop="name"><a href="{{route('product.details',$product -> slug)}}">{{$product -> name}}</a></div>

                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span itemprop="price" class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                                        @if($product -> special_price)
                                                                                            <span
                                                                                                class="regular-price">{{$product -> price}}</span>
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


{{--                                                        <div--}}
{{--                                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                            data-id-product="2" data-id-product-attribute="60" itemscope--}}
{{--                                                            itemtype="http://schema.org/Product">--}}
{{--                                                            <div class="col-12 col-w27 no-padding">--}}
{{--                                                                <div class="thumbnail-container">--}}

{{--                                                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                                       class="thumbnail product-thumbnail two-image">--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-cover"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-secondary"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                    </a>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-12 col-w73 no-padding">--}}
{{--                                                                <div class="product-description">--}}
{{--                                                                    <div class="product-groups">--}}

{{--                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>0 review</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                David James--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

{{--                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                        <div class="product-title" itemprop="name"><a--}}
{{--                                                                                href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem--}}
{{--                                                                                ipsum dolor sit amet ege</a></div>--}}

{{--                                                                        <div class="product-group-price">--}}

{{--                                                                            <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                            </div>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div--}}
{{--                                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                            data-id-product="3" data-id-product-attribute="95" itemscope--}}
{{--                                                            itemtype="http://schema.org/Product">--}}
{{--                                                            <div class="col-12 col-w27 no-padding">--}}
{{--                                                                <div class="thumbnail-container">--}}

{{--                                                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                                       class="thumbnail product-thumbnail two-image">--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-cover"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-secondary"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                    </a>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-12 col-w73 no-padding">--}}
{{--                                                                <div class="product-description">--}}
{{--                                                                    <div class="product-groups">--}}

{{--                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                                <div class="star star_on"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>5 review</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                Taylor Jonson--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

{{--                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                        <div class="product-title" itemprop="name"><a--}}
{{--                                                                                href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris--}}
{{--                                                                                molestie porttitor diam</a></div>--}}

{{--                                                                        <div class="product-group-price">--}}

{{--                                                                            <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">30.00 UK£</span>--}}


{{--                                                                            </div>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    @endforeach
                                                    @endisset
{{--                                                    <div class="item  text-center">--}}
{{--                                                        <div--}}
{{--                                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                            data-id-product="4" data-id-product-attribute="112" itemscope--}}
{{--                                                            itemtype="http://schema.org/Product">--}}
{{--                                                            <div class="col-12 col-w27 no-padding">--}}
{{--                                                                <div class="thumbnail-container">--}}

{{--                                                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي"--}}
{{--                                                                       class="thumbnail product-thumbnail two-image">--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-cover"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-secondary"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                    </a>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-12 col-w73 no-padding">--}}
{{--                                                                <div class="product-description">--}}
{{--                                                                    <div class="product-groups">--}}

{{--                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>0 review</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                Taylor Jonson--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

{{--                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                        <div class="product-title" itemprop="name"><a--}}
{{--                                                                                href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas--}}
{{--                                                                                vulputate ligula vel</a></div>--}}

{{--                                                                        <div class="product-group-price">--}}

{{--                                                                            <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                            </div>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div--}}
{{--                                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                            data-id-product="5" data-id-product-attribute="134" itemscope--}}
{{--                                                            itemtype="http://schema.org/Product">--}}
{{--                                                            <div class="col-12 col-w27 no-padding">--}}
{{--                                                                <div class="thumbnail-container">--}}

{{--                                                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                                       class="thumbnail product-thumbnail two-image">--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-cover"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-secondary"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                    </a>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-12 col-w73 no-padding">--}}
{{--                                                                <div class="product-description">--}}
{{--                                                                    <div class="product-groups">--}}

{{--                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>0 review</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                Taylor Jonson--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

{{--                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                        <div class="product-title" itemprop="name"><a--}}
{{--                                                                                href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula--}}
{{--                                                                                vel tempus sit amet ulte</a></div>--}}

{{--                                                                        <div class="product-group-price">--}}

{{--                                                                            <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">34.80 UK£</span>--}}


{{--                                                                            </div>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div--}}
{{--                                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                            data-id-product="6" data-id-product-attribute="0" itemscope--}}
{{--                                                            itemtype="http://schema.org/Product">--}}
{{--                                                            <div class="col-12 col-w27 no-padding">--}}
{{--                                                                <div class="thumbnail-container">--}}

{{--                                                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html"--}}
{{--                                                                       class="thumbnail product-thumbnail two-image">--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-cover"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                        <img--}}
{{--                                                                            class="img-fluid image-secondary"--}}
{{--                                                                            src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                            alt=""--}}
{{--                                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                            width="600"--}}
{{--                                                                            height="600"--}}
{{--                                                                        >--}}
{{--                                                                    </a>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-12 col-w73 no-padding">--}}
{{--                                                                <div class="product-description">--}}
{{--                                                                    <div class="product-groups">--}}

{{--                                                                        <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                        <div class="product-comments">--}}
{{--                                                                            <div class="star_content">--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                                <div class="star"></div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <span>0 review</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                        <p class="seller_name">--}}
{{--                                                                            <a title="View seller profile"--}}
{{--                                                                               href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                                <i class="fa fa-user"></i>--}}
{{--                                                                                Taylor Jonson--}}
{{--                                                                            </a>--}}
{{--                                                                        </p>--}}

{{--                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                        <div class="product-title" itemprop="name"><a--}}
{{--                                                                                href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam--}}
{{--                                                                                tempor orci eu pretium</a></div>--}}

{{--                                                                        <div class="product-group-price">--}}

{{--                                                                            <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                            </div>--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach
                            @endisset


                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->

{{--                            <div--}}
{{--                                class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">--}}
{{--                                <div class="block block-product clearfix">--}}
{{--                                    <h2 class="title_block">--}}
{{--                                        GAMING GEAR--}}
{{--                                    </h2>--}}
{{--                                    <div class="block_content">--}}
{{--                                        <div id="productlist169691096"--}}
{{--                                             class="product_list grid owl-carousel owl-theme multi-row"--}}
{{--                                             data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"--}}
{{--                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"--}}
{{--                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="1" data-id-product-attribute="40" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>5 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam--}}
{{--                                                                        sed sollicitudin mauris</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">24.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="2" data-id-product-attribute="60" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem--}}
{{--                                                                        ipsum dolor sit amet ege</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="3" data-id-product-attribute="95" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                        <div class="star star_on"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>5 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris--}}
{{--                                                                        molestie porttitor diam</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">30.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="4" data-id-product-attribute="112" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas--}}
{{--                                                                        vulputate ligula vel</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="6" data-id-product-attribute="0" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam--}}
{{--                                                                        tempor orci eu pretium</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="7" data-id-product-attribute="155" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec--}}
{{--                                                                        non lectus ac erat sedei</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->--}}

{{--                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->--}}

{{--                            <div--}}
{{--                                class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">--}}
{{--                                <div class="block block-product clearfix">--}}
{{--                                    <h2 class="title_block">--}}
{{--                                        AUDIO--}}
{{--                                    </h2>--}}
{{--                                    <div class="block_content">--}}
{{--                                        <div id="productlist810673854"--}}
{{--                                             class="product_list grid owl-carousel owl-theme multi-row"--}}
{{--                                             data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"--}}
{{--                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"--}}
{{--                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="2" data-id-product-attribute="60" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem--}}
{{--                                                                        ipsum dolor sit amet ege</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="7" data-id-product-attribute="155" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec--}}
{{--                                                                        non lectus ac erat sedei</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">14.28 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="8" data-id-product-attribute="172" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/59-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/59-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/60-home_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/60-large_default/curabitur-in-lorem-sit-ameten-alt.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Taylor Jonson--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/8-172-curabitur-in-lorem-sit-ameten-alt.html#/1-الحجم-ص/10-اللون_-احمر">Curabitur--}}
{{--                                                                        in lorem sit ameten alt</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="10" data-id-product-attribute="192" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/69-home_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/69-large_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/70-home_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/70-large_default/nullam-lacinia-metus-posuere.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/10-192-nullam-lacinia-metus-posuere.html#/1-الحجم-ص/18-اللون_-وردي">Nullam--}}
{{--                                                                        lacinia metus posuere</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">36.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="12" data-id-product-attribute="232" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/79-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/79-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/80-home_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/80-large_default/nam-volutpat-justo-a-vehicula.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">Nam--}}
{{--                                                                        volutpat justo a vehicula</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">7.56 UK£</span>--}}


{{--                                                                        <span class="regular-price">10.80 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="13" data-id-product-attribute="254" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin--}}
{{--                                                                        placerat lacus eget auctor</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">12.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item  text-center">--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"--}}
{{--                                                    data-id-product="14" data-id-product-attribute="270" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/89-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/89-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/90-home_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/90-large_default/donec-laoreet-imperdiet-elit-ut.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/14-270-donec-laoreet-imperdiet-elit-ut.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Donec--}}
{{--                                                                        laoreet imperdiet elit ut</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">18.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature "--}}
{{--                                                    data-id-product="15" data-id-product-attribute="303" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/94-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/94-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/95-home_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/95-large_default/nunc-tempus-velit-quis-urnanb.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        David James--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/audio/15-303-nunc-tempus-velit-quis-urnanb.html#/1-الحجم-ص/10-اللون_-احمر">Nunc--}}
{{--                                                                        tempus velit quis urnanb</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">37.80 UK£</span>--}}


{{--                                                                        <span class="regular-price">42.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item"--}}
{{--                                                    data-id-product="16" data-id-product-attribute="323" itemscope--}}
{{--                                                    itemtype="http://schema.org/Product">--}}
{{--                                                    <div class="col-12 col-w27 no-padding">--}}
{{--                                                        <div class="thumbnail-container">--}}

{{--                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود"--}}
{{--                                                               class="thumbnail product-thumbnail two-image">--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-cover"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/99-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/99-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                                <img--}}
{{--                                                                    class="img-fluid image-secondary"--}}
{{--                                                                    src="http://demo.bestprestashoptheme.com/savemart/100-home_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    alt=""--}}
{{--                                                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/100-large_default/cras-consequat-quis-dolor-eunde.jpg"--}}
{{--                                                                    width="600"--}}
{{--                                                                    height="600"--}}
{{--                                                                >--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-w73 no-padding">--}}
{{--                                                        <div class="product-description">--}}
{{--                                                            <div class="product-groups">--}}

{{--                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->--}}
{{--                                                                <div class="product-comments">--}}
{{--                                                                    <div class="star_content">--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                        <div class="star"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <span>0 review</span>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->--}}

{{--                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}
{{--                                                                <p class="seller_name">--}}
{{--                                                                    <a title="View seller profile"--}}
{{--                                                                       href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">--}}
{{--                                                                        <i class="fa fa-user"></i>--}}
{{--                                                                        Harry Makle--}}
{{--                                                                    </a>--}}
{{--                                                                </p>--}}

{{--                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->--}}


{{--                                                                <div class="product-title" itemprop="name"><a--}}
{{--                                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/16-323-cras-consequat-quis-dolor-eunde.html#/1-الحجم-ص/11-اللون_-اسود">Cras--}}
{{--                                                                        consequat quis dolor eunde</a></div>--}}

{{--                                                                <div class="product-group-price">--}}

{{--                                                                    <div class="product-price-and-shipping">--}}


{{--                                                                        <span itemprop="price"--}}
{{--                                                                              class="price">21.60 UK£</span>--}}


{{--                                                                        <span class="regular-price">24.00 UK£</span>--}}


{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/productlist.tpl -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection

@section('scripts')
    <script>
        $(document).on('click', '.quick-view', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "block");
        });
        $(document).on('click', '.close', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "none");

            $('.not-loggedin-modal').css("display", "none");
            $('.alert-modal').css("display", "none");
            $('.alert-modal2').css("display", "none");
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.addToWishlist', function (e) {
            e.preventDefault();

            @guest('customer')
            toastr.warning('انت غير مسجل دخول في النظام')
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                dataType: 'json',
                success: function (data) {
                    if (data.wished) {
                        toastr.success(data.msg);
                    } else {
                        toastr.info(data.msg);

                    }
                }
            });
        });

        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();

            @guest('customer')
            toastr.warning('انت غير مسجل دخول في النظام')
            @endguest

            $.ajax({
                type: 'post',
                url: "{{Route('customer.saveProduct')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    if (data.status) {
                        toastr.success(data.msg);
                        $('.cart-products-count').html(data.cart_products_count)
                    } else {
                        toastr.info(data.msg);

                    }
                }
            });
        });
    </script>

@stop
