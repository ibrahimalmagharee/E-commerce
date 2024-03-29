@extends('layouts.site')
@section('content')

    <div id="wrapper-site">

        <nav data-depth="3" class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">

                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="{{route('home')}}">
                                <span itemprop="name">{{__('translate-site/index.main')}}</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="">
                                <span itemprop="name">{{$product -> name}}</span>
                            </a>
                            <meta itemprop="position" content="3">
                        </li>
                    </ol>

                </div>
            </div>
        </nav>


        <div class="no-index">
            <div id="content-wrapper">

                <section id="main" itemscope="" itemtype="https://schema.org/Product">
                    <div class="product-detail-top">
                        <div class="container">
                            <div class="row main-productdetail" data-product_layout_thumb="list_thumb"
                                 style="position: relative;">
                                <div class="col-lg-5 col-md-4 col-xs-12 box-image">
                                    <section class="page-content" id="content">
                                        <div class="images-container list_thumb">
                                            <div class="product-cover">
                                                <img class="js-qv-product-cover img-fluid"
                                                     src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                     alt="" title="" style="width:100%;" itemprop="image">
                                                <div class="layer hidden-sm-down" data-toggle="modal"
                                                     data-target="#product-modal">
                                                    <i class="fa fa-expand"></i>
                                                </div>
                                            </div>

                                            <div class="js-qv-mask mask only-product">
                                                <div class="row">
                                                    @isset($product -> images)
                                                        @foreach($product -> images as $image)
                                                            <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                                                <img class="img-fluid thumb js-thumb  selected "
                                                                     data-image-medium-src="{{$image->getPhoto($image -> photo ?? '')}}"
                                                                     data-image-large-src="{{$image->getPhoto($image -> photo ?? '')}}"
                                                                     src="{{$image->getPhoto($image -> photo ?? '')}}"
                                                                     alt="" title="" itemprop="image">
                                                            </div>
                                                        @endforeach
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                                    <div class="product-information">
                                        <div class="product-actions">
                                            <div id="" class="row">
                                                <input type="hidden" name="id_product" value="{{$product -> id }}"
                                                       id="product_page_product_id">

                                                <div class="productdetail-right col-12 col-lg-6 col-md-6">
                                                    <div class="product-reviews">
                                                        <div id="product_comments_block_extra">
{{--                                                            <div class="comments_note">--}}
{{--                                                                <span>Review: </span>--}}
{{--                                                                <div class="star_content clearfix">--}}
{{--                                                                    <div class="star star_on"></div>--}}
{{--                                                                    <div class="star star_on"></div>--}}
{{--                                                                    <div class="star star_on"></div>--}}
{{--                                                                    <div class="star star_on"></div>--}}
{{--                                                                    <div class="star star_on"></div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="comments_advices">--}}
{{--                                                                <a href="#" class="comments_advices_tab"><i--}}
{{--                                                                        class="fa fa-comments"></i>Read reviews (1)</a>--}}
{{--                                                                <a class="open-comment-form" data-toggle="modal"--}}
{{--                                                                   data-target="#new_comment_form" href="#"><i--}}
{{--                                                                        class="fa fa-edit"></i>Write your review</a>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <!--  /Module NovProductComments -->
                                                    </div>

                                                    <h1 class="detail-product-name"
                                                        itemprop="name">{{$product -> name}}</h1>
                                                    <div
                                                        class="group-price d-flex justify-content-start align-items-center">
                                                        <div class="product-prices">
                                                            <div class="product-price " itemprop="offers" itemscope=""
                                                                 itemtype="https://schema.org/Offer">
                                                                <div class="current-price">
                                                                    <span itemprop="price"
                                                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                    @if($product -> special_price)
                                                                        <span
                                                                            class="regular-price">{{$product -> price}}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="tax-shipping-delivery-label">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="in_border end">

                                                        <div class="sku">
                                                            <label class="control-label">{{__('translate-site/index.sku')}}:</label>
                                                            <span itemprop="sku"
                                                                  content="demo_1">{{$product -> sku ?? '--'}}</span>
                                                        </div>
                                                        <div class="pro-cate">
                                                            <label class="control-label">{{__('translate-site/index.categories')}}:</label>

                                                            @isset($product -> categories)
                                                                <div>
                                                                    @foreach($product -> categories as $category )
                                                                        <span><a
                                                                                href="{{route('category',$category -> slug )}}"
                                                                                title="Computer &amp; Networking">{{$category -> name}}</a></span>
                                                                    @endforeach
                                                                </div>
                                                            @endisset
                                                        </div>
                                                        <div class="pro-tag">
                                                            <label class="control-label">{{__('translate-site/index.tags')}}:</label>
                                                            @isset($product -> tags)
                                                                <div>
                                                                    @foreach($product -> tags as $tag )
                                                                        <span><a href="">{{$tag -> name}}</a></span>
                                                                    @endforeach
                                                                </div>
                                                            @endisset
                                                        </div>
                                                    </div>


                                                    <div id="_desktop_productcart_detail">
                                                        <div class="product-add-to-cart in_border">
                                                            <div class="add">
                                                                <button class="btn btn-primary cart-addition add-to-cart"
                                                                        data-button-action="add-to-cart" type="submit" data-product-id="{{$product -> id}}">
                                                                    <div class="icon-cart">
                                                                        <i class="shopping-cart"></i>
                                                                    </div>
                                                                    <span>{{__('translate-site/index.add_to_cart')}}</span>
                                                                </button>
                                                            </div>

                                                            <a class="addToWishlist  wishlistProd_22" href="#"
                                                               data-product-id="{{$product -> id}}"
                                                            >
                                                                <i class="fa fa-heart"></i>
                                                                <span>Add to Wishlist</span>
                                                            </a>


                                                            <div class="clearfix"></div>

                                                            <div id="product-availability" class="info-stock mt-20">
                                                                <label class="control-label">{{__('translate-site/index.availability')}}:</label>
                                                                {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <input class="product-refresh ps-hidden-by-js" name="refresh"
                                                           type="submit" value="Refresh">

                                                </div>
                                                <div class="productdetail-left col-12 col-lg-6 col-md-6">


                                                    <div class="product-quantity">
                                                        <span class="control-label">{{__('translate-site/index.qty')}} : </span>
                                                        <div class="qty">
                                                            <input type="text" name="qty" id="quantity_wanted" value="1"
                                                                   class="input-group" min="1">
                                                        </div>
                                                    </div>


                                                    <div class="product-variants in_border">
                                                        @if(isset($product_attributes) && count($product_attributes) > 0 )
                                                            @foreach($product_attributes as $attribute)
                                                                <div class="product-variants-item">
                                                                    <span
                                                                        class="control-label">{{$attribute -> name}} : </span>
                                                                    @if(isset($attribute -> options) && count($attribute -> options) > 0 )
                                                                        <select id="group_1" data-product-attribute="1"
                                                                                name="{{$attribute -> name}}">
                                                                            @foreach($attribute -> options as $option)
                                                                                @if($option->product_id == $product -> id)
                                                                                    <option value="{{$option -> id}}" title="S">
                                                                                        {{$option -> name}}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                    @endif

                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-middle">
                        <div class="container">
                            <div class="row">
                                <div class="tabs col-lg-9 col-md-7 ">
                                    <ul class="nav nav-tabs">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" aria-expanded="true" href="#product-details">{{__('translate-site/index.product_details')}}</a>
                                        </li>
{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link" data-toggle="tab" href="#reviews">Write Your Own--}}
{{--                                                Review<span class='count-comment'> (1)</span></a>--}}
{{--                                        </li>--}}

                                    </ul>

                                    <div class="tab-content" id="tab-content">

                                        <div class="tab-pane fade active in" id="product-details">

                                            <section class="product-features">
                                                <h3>{!! $product -> description  !!}</h3>

                                            </section>


                                        </div>

                                        <div class="tab-pane fade in" id="reviews">
                                            <div id="product_comments_block_tab">
                                                <div class="comment clearfix">
                                                    <div class="comment_author">
                                                        <span>Grade&nbsp</span>
                                                        <div class="star_content clearfix">
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                        </div>
                                                        <div class="comment_author_infos">
                                                            <div class="user-comment"><i class="fa fa-user-o"></i> dfsfs
                                                            </div>
                                                            <div class="date-comment">08/07/2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="comment_details">
                                                        <h4>fsfdfs</h4>
                                                        <p>fdfsd</p>
                                                        <ul>
                                                            <li>1 out of 2 people found this review useful.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center mt-10">
                                                <a id="new_comment_tab_btn" class="open-comment-form btn btn-default"
                                                   data-toggle="modal" data-target="#new_comment_form" href="#">Write
                                                    your review !</a>
                                            </p>

                                        </div>


                                        <div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-xs-center"><i
                                                                class="fa fa-edit"></i> Write your review</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <i class="material-icons close">close</i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="id_new_comment_form" action="#">
                                                            <div class="product row no-gutters">
                                                                <div class="product-image col-4">
                                                                    <img class="img-fluid"
                                                                         src="../../24-medium_default/hummingbird-printed-t-shirt.jpg"
                                                                         height="" width=""
                                                                         alt="Nullam sed sollicitudin mauris">
                                                                </div>
                                                                <div class="product_desc col-8">
                                                                    <p class="product_name">Nullam sed sollicitudin
                                                                        mauris</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit. Aenean commodo ligula eget
                                                                        dolor. Aenean massa. Cum sociis natoque
                                                                        penatibus et magnis dis parturient montes,
                                                                        nascetur ridiculus mus. Donec quam felis,
                                                                        ultricies nec, pellentesque eu, pretium quis,
                                                                        sem. Nulla consequat massa quis enim. Donec pede
                                                                        justo, fringilla vel, aliquet nec, vulputate
                                                                        eget, arcu. Lorem ipsum dolor sit amet,
                                                                        consectetuer adipiscing elit. Aenean commodo
                                                                        ligula eget dolor. Aenean massa.</p>
                                                                </div>
                                                            </div>
                                                            <div class="new_comment_form_content">
                                                                <div id="new_comment_form_error"
                                                                     class="error alert alert-danger">
                                                                    <ul></ul>
                                                                </div>
                                                                <ul id="criterions_list">
                                                                    <li>
                                                                        <label>Quality</label>
                                                                        <div class="star_content">
                                                                            <input class="star" type="radio"
                                                                                   name="criterion[1]" value="1">
                                                                            <input class="star" type="radio"
                                                                                   name="criterion[1]" value="2">
                                                                            <input class="star" type="radio"
                                                                                   name="criterion[1]" value="3">
                                                                            <input class="star" type="radio"
                                                                                   name="criterion[1]" value="4">
                                                                            <input class="star" type="radio"
                                                                                   name="criterion[1]" value="5"
                                                                                   checked="checked">
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </li>
                                                                </ul>
                                                                <label for="comment_title">Title for your review<sup
                                                                        class="required">*</sup></label>
                                                                <input id="comment_title" name="title" type="text"
                                                                       value="">

                                                                <label for="content">Your review<sup
                                                                        class="required">*</sup></label>
                                                                <textarea id="content" name="content"></textarea>

                                                                <label>Your name<sup class="required">*</sup></label>
                                                                <input id="commentCustomerName" name="customer_name"
                                                                       type="text" value="">

                                                                <div id="new_comment_form_footer">
                                                                    <input id="id_product_comment_send"
                                                                           name="id_product" type="hidden" value='1'>
                                                                    <div class="fl"><sup class="required">*</sup>
                                                                        Required fields
                                                                    </div>
                                                                    <div class="fr">
                                                                        <button id="submitNewMessage"
                                                                                data-dismiss="modal" aria-label="Close"
                                                                                class="btn btn-primary"
                                                                                name="submitMessage" type="submit">Send
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form><!-- /end new_comment_form_content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                     </div>
                                </div>
                                <div class="col-lg-3 col-md-5">

                                     <div class="nov-html col-xl-12 col-lg-12 col-md-12 policy-product no-padding">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="policy-row d-flex">
                                                    <div class="icon-policy"><i
                                                            class="noviconpolicy noviconpolicy-1">1</i></div>
                                                    <div class="policy-content">
                                                        <div class="policy-name">{{__('translate-site/index.free_delivery_from')}}</div>
                                                    </div>
                                                </div>
                                                <div class="policy-row d-flex">
                                                    <div class="icon-policy"><i
                                                            class="noviconpolicy noviconpolicy-2">2</i></div>
                                                    <div class="policy-content">
                                                        <div class="policy-name">{{__('translate-site/index.money_back_guarantee')}}</div>

                                                    </div>
                                                </div>
                                                <div class="policy-row d-flex">
                                                    <div class="icon-policy"><i
                                                            class="noviconpolicy noviconpolicy-3">3</i></div>
                                                    <div class="policy-content">
                                                        <div class="policy-name">{{__('translate-site/index.authenticity_is_guaranteed')}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-detail-bottom">
                        <div class="container">

                            <section class="relate-product product-accessories clearfix">
                                <h3 class="h5 title_block">{{__('translate-site/index.related_products')}}<span class="sub_title">Hand-picked arrivals from the best designer</span>
                                </h3>

                                <div class="products product_list grid owl-carousel owl-theme" data-autoplay="true"
                                     data-autoplaytimeout="6000" data-loop="true" data-items="5" data-margin="0"
                                     data-nav="true" data-dots="false" data-items_mobile="2">
                                    @if( isset($related_products) && count($related_products) > 0 )
                                        @foreach($related_products as $_product)
                                    <div class="item  text-center">
                                        <div class="product-miniature js-product-miniature item-two first_item"
                                             data-id-product="{{$_product -> id }}" data-id-product-attribute="60" itemscope=""
                                             itemtype="http://schema.org/Product">
                                            <div class="product-cat-content">
                                                <div class="category-title">
                                                <div class="product-title" itemprop="name"><a
                                                        href="{{route('product.details',$_product -> slug)}}">{{$_product -> name}}</a></div>

                                            </div>
                                            <div class="thumbnail-container">

                                                <a href="{{route('product.details',$_product -> slug)}}"
                                                   class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover"
                                                         src="{{$_product->getPhoto($_product -> images[0] -> photo ?? '')}}"
                                                         alt=""
                                                         data-full-size-image-url="{{$_product->getPhoto($_product -> images[0] -> photo ?? '')}}"
                                                         width="600" height="600">
                                                    <img class="img-fluid image-secondary"
                                                         src="{{$_product->getPhoto($_product -> images[1] -> photo ?? '')}}"
                                                         alt=""
                                                         data-full-size-image-url="{{$_product->getPhoto($_product -> images[1] -> photo ?? '')}}"
                                                         width="600" height="600">
                                                </a>

                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                             <span itemprop="price"
                                                                   class="price">{{$_product -> special_price ?? $_product -> price }}</span>
                                                            @if($_product -> special_price)
                                                                <span
                                                                    class="regular-price">{{$_product -> price}}</span>
                                                            @endif

                                                        </div>
                                                    </div>
{{--                                                    <div class="product-comments">--}}
{{--                                                        <div class="star_content">--}}
{{--                                                            <div class="star"></div>--}}
{{--                                                            <div class="star"></div>--}}
{{--                                                            <div class="star"></div>--}}
{{--                                                            <div class="star"></div>--}}
{{--                                                            <div class="star"></div>--}}
{{--                                                        </div>--}}
{{--                                                        <span>0 review</span>--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="product-buttons d-flex justify-content-start"
                                                     itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">


                                                    <a class="addToWishlist  wishlistProd_22" href="#"
                                                       data-product-id="{{$_product -> id}}"
                                                    >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>

{{--                                                    <a class="add-to-cart cart-addition" data-product-id="{{$product -> id}}" data-product-slug="{{$product -> slug}}" href="#"--}}
{{--                                                       data-button-action="add-to-cart"><i--}}
{{--                                                            class="novicon-cart"></i><span>Add to cart</span></a>--}}
                                                    <a href="#" class="quick-view cart-addition hidden-sm-down"
                                                       data-product-id="{{$_product -> id}}">
                                                        <i class="fa fa-shopping-cart"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                @endif
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('site.includes.not-logged')
    @include('site.includes.alert')   <!-- we can use only one with dynamic text -->
    @include('site.includes.alert2')
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
            toastr.warning('{{__('translate-site/index.you_are_not_logged_into_the_system')}}')
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                dataType: 'json',
                success: function (data) {
                    if(data.wished ){
                        toastr.success(data.msg);
                    }

                    else{
                        toastr.info(data.msg);

                    }
                }
            });
        });

        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();
            let qty = $('#quantity_wanted').val();
            @guest('customer')
            toastr.warning('{{__('translate-site/index.you_are_not_logged_into_the_system')}}')
            @endguest

            $.ajax({
                type: 'post',
                url: "{{Route('customer.saveProduct')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                    'quantity': qty,
                },
                success: function (data) {
                    if(data.status ){
                        toastr.success(data.msg);
                        $('.cart-products-count').html(data.cart_products_count)
                    }

                    else{
                        toastr.info(data.msg);

                    }
                }
            });
        });
    </script>

@stop

