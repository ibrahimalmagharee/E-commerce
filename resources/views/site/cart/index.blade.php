@extends('layouts.site')

@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index-11.htm">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section id="main">
                    <h1 class="page-title">Shopping Cart</h1>
                    <div class="cart-grid row">
                        <div class="cart-grid-body col-xs-12 col-lg-9">
                            <!-- cart products detailed -->
                            <div class="cart-container">
                                <div class="cart-overview js-cart"
                                     data-refresh-url="">
                                    @isset($cart_products)
                                        @isset($products)
                                        <ul class="cart-items">
                                            @foreach($cart_products  as $cart_product)
                                                @foreach($products as $index=>$product)
                                                    @if($product->id == $cart_product->product_id)
                                                <li class="cart-item delete-product" data-id="{{$index+1}}">
                                                    <div class="product-line-grid row spacing-10">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-sm-2 col-xs-4">
                                                        <span class="product-image media-middle">
                                                          <img class="img-fluid"
                                                               src="{{$product->getPhoto($product -> images[0] -> photo ?? '')}}"
                                                               alt="Vehicula vel tempus sit amet ulte">
                                                        </span>
                                                        </div>

                                                        <!--  product left body: description -->
                                                        <div class="product-line-grid-body col-sm-10 col-xs-8">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <div class="product-line-info">
                                                                        <a class="label"
                                                                           href="{{route('product.details',$product -> slug)}}"
                                                                           data-id_customization="0">{{$product -> name}}</a>
                                                                    </div>

                                                                    <div class="product-line-info product-price">
                                                                       <span itemprop="price"
                                                                             class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                                        @if($product -> special_price)
                                                                            <span
                                                                                class="regular-price">{{$product -> price}}</span>
                                                                        @endif

                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="text-center product-line-actions col-sm-6 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-9 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-6 qty">
                                                                                    <div class="label" @if(app() -> getLocale() === 'ar') style="margin-right: 150px" @elseif(app() -> getLocale() === 'en') style="margin-left: 150px" @endif>Total</div>

                                                                                    <div class="label">Qty:</div>

                                                                                    <div
                                                                                        class="input-group bootstrap-touchspin">
                                                                                <span
                                                                                    class="input-group-addon bootstrap-touchspin-prefix"
                                                                                    style="display: none;"></span><input
                                                                                            class="js-cart-line-product-quantity productQuantity form-control"
                                                                                            data-product-id="{{$product->id}}"
                                                                                            data-product-price="@if($product -> special_price) {{$product->special_price}} @else {{$product->price}} @endif"
                                                                                            type="text"
                                                                                            value="{{$cart_product->quantity}}"
                                                                                            name="product-quantity-spin"
                                                                                            min="1"
                                                                                            style="display: block;"><span
                                                                                            class="input-group-addon bootstrap-touchspin-postfix"
                                                                                            style="display: none;"></span>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="" @if(app() -> getLocale() === 'ar') style="margin-top: 50px; margin-right: 30px"  @elseif(app() -> getLocale() === 'en') style="margin-top: 50px; margin-left: 30px" @endif>
                                                                                    @if($product->special_price)
                                                                                        <span id="product_price_{{$index+1}}"  data-product-id="{{$product->id}}">$ {{$product->special_price * $cart_product->quantity}} </span>

                                                                                    @else
                                                                                        <span id="product_price_{{$index+1}}"  data-product-id="{{$product->id}}">$ {{$product->price * $cart_product->quantity}} </span>

                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                        </div>


                                                                        <div
                                                                            class="col-sm-3 col-xs-12 text-xs-right align-self-end">
                                                                            <div class="cart-line-product-actions shop-item">
                                                                                <a class="remove-from-cart"
                                                                                   rel="nofollow"
                                                                                    data-link-action="delete-from-cart"
                                                                                    data-product-id="{{$product -> id}}"
                                                                                    data-id-customization="">
                                                                                    <i class="fa fa-trash-o"
                                                                                       aria-hidden="true"></i>

                                                                                </a>


                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </ul>
                                     @endisset
                                    @endisset
                                </div>
                            </div>
                            <a class="label btn btn-primary mt-5 " href="{{route('home')}}">
                                Continue shopping
                            </a>
                            <!-- shipping informations -->
                        </div>
                        <!-- Right Block: cart subtotal & cart total -->
                        <div class="cart-grid-right col-xs-12 col-lg-3">
                            <div class="cart-summary">
                                <div class="cart-detailed-totals">
                                    <div class="cart-summary-products">
                                        <div class="summary-label" id="number_cart_product">There are  ({{count($cart_products)}}) items in your cart</div>
                                    </div>

                                    <div class="">
                                        <div class="cart-summary-line cart-total">
                                            <span class="label">Total:</span>
                                            <span class="value" id="total_price">$ {{$total_price}} </span>
                                        </div>

                                    </div>

                                </div>


                                <div class="checkout text-xs-center card-block">
                                    <a href="{{route('payment', $total_price)}}" id="payment_amount" type="button" class="btn btn-primary"> proceed to payment
                                    </a>
                                </div>


                            </div>


                            <div class="blockreassurance_product">
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Security policy (edit with
                                        Customer reassurance module)</p>
                                </div>
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Delivery policy (edit with
                                        Customer reassurance module)</p>
                                </div>
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Return policy (edit with Customer
                                        reassurance module)</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('change', '.productQuantity', function(e){
            e.preventDefault();
            let product_id = $(this).attr('data-product-id');
            let quantity = $(this).val();
            let product_price_id = $(this).closest('li').data('id');
            let product_price = $(this).attr('data-product-price');
            $('#product_price_'+product_price_id).html('$ ' + product_price *  quantity);

            console.log(product_id,quantity)
            // totalPrice();

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '{{ route('Product.update.quantity') }}',
                data: {'quantity': quantity, 'product_id': product_id},
                success: function (data) {
                    toastr.success(data.msg);
                    $('#total_price').html('$ ' + data.total_price);
                    //$('#total_price').attr('data-total-price', data.total_price);
                },

                error: function () {
                    toastr.error('لم تتم تحديث كمية المنتج');
                }
            });
        });

        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();
            @guest('customer')
            toastr.warning('انت غير مسجل دخول في النظام')
                @endguest

            var Clickedthis = $(this);
            var product_id = $(Clickedthis).closest('.delete-product').attr('data-product-id');
            $.ajax({
                type: 'delete',
                url: "{{route('Product.destroy')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                 },
                success: function (data) {
                    $(Clickedthis).closest('.delete-product').remove();
                    toastr.success(data.msg);
                    $('#total_price').html('$ ' + data.total_price);
                    $('#number_cart_product').html("There are (" + data.number_cart_product + ") items in your cart")
                }
            });
        });
    </script>
    @stop
