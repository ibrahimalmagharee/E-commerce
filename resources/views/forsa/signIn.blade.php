@extends('layouts.forsa')
@section('title')
    تسجيل الدخول
@endsection

@section('content')
    <main>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div class="text-center">
                        <a class="text-decoration-none" style="color: #37a495" href="{{route('forsa.index')}}"><h3 class="py-5">فرصة</h3></a>
                        <p class="pb-5">✨مرحبا بك في عالم التجارة الإلكترونية✨</p>
                    </div>
                    <form method="post" action="{{route('check.vendor.signIn')}}">
                        @csrf
                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني">
                            <div class="form-control-feedback"><i class="sicon-user text-muted text-bottom"></i>
                                @error('email')
                                <span id="email_error" class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور">
                            <div class="form-control-feedback"><i class="sicon-key text-muted text-bottom"></i>
                                @error('password')
                                <span id="password_error" class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="form-group login-options">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xs-6 align-left mr-3">--}}
{{--                                    <a href="{{route('vendor.password.request')}}">نسيت كلمة المرور؟</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <button type="submit" id="submit_btn" class="btn btn-info text-decoration-none text-white btn-block" style="color:#37a495;"> الدخول<i class="sicon-caret-left position-right"></i></button>
                        </div>
                        <div id="register_box text-right">
                            <div class="content-divider text-muted form-group text-center"><span>ليس لديك حساب متجر ؟
                </span></div>
                            <a href="{{route('vendor.signUp.page')}}" class="btn btn-outline-info btn-block btn-flat content-group">إنشاء متجر جديد</a>
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


