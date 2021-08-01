@extends('layouts.forsa')
@section('title')
   اشترك الآن
@endsection

@section('content')
    <main>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div class="text-center">
                        <a class="text-decoration-none" style="color: #37a495" href="{{route('forsa.index')}}"><h3 class="py-5">فرصة</h3></a>
                        <p class="">✨مرحبا بك في عالم التجارة الإلكترونية✨</p>
                        <p class="">✨اغتنم الفرصة و اشترك الآن✨</p>
                    </div>
                    <form
                        role="form"
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf
                        <div class='row mt-5'>
                            <div class='col-md-12 error form-group d-none'>
                                <div class='alert-danger alert text-center'></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">

                                <div class="row mt-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="PaymentMethod" value="1">
                                        <label class="form-check-label mr-5" for="exampleRadios1">
                                            Visa Card
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="PaymentMethod" value="2">
                                        <label class="form-check-label mr-5" for="exampleRadios2">
                                            Master Card
                                        </label>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <select class="custom-select col-6" name="subscription_type" id="subscription_type">
                                        <option value="" selected>نوع الاشتراك</option>
                                        <option value="1">اشتراك شهري</option>
                                        <option value="2">اشتراك سنوي</option>
                                    </select>
                                </div>

                                <input type="hidden" name="amount" value="1"  id="amount">


                                <div class="row mt-1">
                                    <div class="col-6 col-md-6 text-right mt-5">
                                        <label class=" about-text  MontserratArabicLight" for="validationCustom01">اسم صاحب البطاقة</label>
                                        <input type="text" class="form-control" id="nameCard" name="nameCard">
                                        <small>Full name as displayed in card</small>
                                        @error('nameCard')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-md-6 text-right mt-5">
                                        <label class=" about-text MontserratArabicLight" for="validationCustom01">رقم البطاقة</label>
                                        <input type="text" class="form-control" name="numberCard" id="numberCard">
                                        @error('number')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-7 col-md-7 text-right">
                                        <div class="row pr-3">
                                            <label class=" about-text 2 MontserratArabicLight" for="validationCustom01">Expire Date</label>
                                        </div>
                                        <div class="row pr-3">

                                            <input type="text" class="form-control col-5" placeholder="Expiration Month" name="mm" id="mm">
                                            <input type="text" class="form-control col-5 mr-2" placeholder="Expiration Year" name="yy" id="yy">
                                        </div>

                                    </div>
                                    <div class="col-4 col-md-4 text-right">
                                        <label for="cc-expiration">CVV</label>
                                        <input type="text" class="form-control" name="cvv" id="cvv">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <button class="btn btn-info text-decoration-none text-white btn-block btn-flat content-group" type="submit" id="payment">  ادفع الآن</button>

                                </div>

                            </div>

                        </div>
                    </form>

                </div>
                <div class="col-md-6 col-sm-12 py-5">
                    <section class="container my-5 py-5">

                        <div  class="owl-carousel first owl-theme">
                            @isset($vendors)
                                @foreach($vendors as $vendor)
                                    <div class="item p-5">
                                        <div class="row text-center">
                                            <div class="col-md-12 col-sm-12">
                                                <p> فرصة جعلتني أستطيع الدخول إلى مشروعي الخاص بأقل التكاليف و بخدمات جداً رائعه.. سعيده لوصولي إلى هناو ممتنه جدا للفريق الذي يعمل في سله </p>
                                                <h2 class=" py-5">متجر {{$vendor->name}} </h2>

                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            @endisset


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection

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
                    var amount = 0;
                    if ( $('select[name="subscription_type"]').val() == 1) {
                        amount = 200
                    }else if ($('select[name="subscription_type"]').val() == 2){
                        amount = 300;
                    }

                    // console.log( $('select[name="subscription_type"]').val());
                    // console.log(amount);

                    //$form.get(0).submit();
                    $.ajax({
                        type: 'POST',
                        url: '{{route('forsa.payment')}}',
                        headers: {
                            Authorization: 'Bearer {{env('STRIPE_SECRET')}}'
                        },
                        data: {
                            amount: parseInt(amount),
                            subscription_type: $('select[name="subscription_type"]').val(),
                            currency: 'usd',
                            source: token,
                            description: "Charge for madison.garcia@example.com",
                        },
                        success: (response) => {
                            if (response.status == true){
                               // window.location=response.url;
                                toastr.success(response.msg);
                                $('#payment-form').trigger('reset')

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
