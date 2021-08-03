@extends('layouts.site')

@section('style')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300
        }

        .container {
            height: 100vh
        }

        .card {
            border: none
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5)
        }

        .form-control {
            height: 50px;
            border: 2px solid #eee;
            border-radius: 6px;
            font-size: 14px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #039be5;
            outline: 0;
            box-shadow: none
        }

        .input {
            position: relative
        }

        .input i {
            position: absolute;
            top: 16px;
            left: 11px;
            color: #989898
        }

        .input input {
            text-indent: 25px
        }

        .card-text {
            font-size: 13px;
            margin-left: 6px
        }

        .certificate-text {
            font-size: 12px
        }

        .billing {
            font-size: 11px
        }

        .super-price {
            top: 0px;
            font-size: 22px
        }

        .super-month {
            font-size: 11px
        }

        .line {
            color: #bfbdbd
        }

        .free-button {
            background: #1565c0;
            height: 52px;
            font-size: 15px;
            border-radius: 8px
        }

        .payment-card-body {
            flex: 1 1 auto;
            padding: 24px 1rem !important
        }
    </style>
    @stop

@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index-11.htm">
                            <span itemprop="name">{{__('translate-site/index.main')}}</span>
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
                    <h1 class="page-title">{{__('translate-site/index.PAYMENT_METHODS')}}</h1>
                    <div class="cart-grid row">

                        <form
                            role="form"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                                @csrf
                            <hr class="mb-4">
                            <div class='row mt-5'>
                                <div class='col-md-12 error form-group d-none'>
                                    <div class='alert-danger alert text-center'></div>
                                </div>
                            </div>
                            <h4 class="mb-3">Payment</h4>

                            <input type="hidden" name="amount" value="{{$amount}}" id="price_total">
                            <div class="d-block my-3">

                                <div class="custom-radio">
                                    <input  class="PaymentMethodId" id="PaymentMethodId1" type="radio" name="PaymentMethod" value="1">
                                    <label class="custom-control-label" for="credit">Visa</label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" class="PaymentMethodId" id="PaymentMethodId2" name="PaymentMethod"  value="2" >
                                    <label class="custom-control-label" for="debit">Master Card</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="nameCard" name="nameCard">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    @error('nameCard')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" name="numberCard" id="numberCard">
                                    @error('number')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration Month</label>
                                    <input type="text" class="form-control" name="mm" id="mm">

                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration Year</label>
                                    <input type="text" class="form-control" name="yy" id="yy">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" name="cvv" id="cvv">

                                </div>
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block mb-3" type="submit" id="payment">{{__('translate-site/index.continue_to_checkout')}}</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {

            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form         = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs       = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid         = true;
                $errorMessage.addClass('d-none');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.addClass('d-none');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('#numberCard').val(),
                        cvc: $('#cvv').val(),
                        exp_month: $('#mm').val(),
                        exp_year: $('#yy').val(),
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    //$form.get(0).submit();
                    $.ajax({
                        type: 'POST',
                        url: '{{route('payment.process')}}',
                        headers: {
                            Authorization: 'Bearer {{env('STRIPE_SECRET')}}'
                        },
                        data: {
                            amount: parseInt($('#price_total').val()),
                            PaymentMethod: $('input[name="PaymentMethod"]:checked').val(),
                            currency: 'usd',
                            source: token,
                            description: "Charge for madison.garcia@example.com",
                        },
                        success: (response) => {
                            if (response.status == true){
                                window.location=response.url;
                                toastr.success(response.msg);

                            }
                        },

                        error: (response) => {
                            toastr.error(response.msg);
                        }
                    })
                }
            }




        });
    </script>
    @stop
