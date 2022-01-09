@extends('layouts.forsa')

@section('content')
    <main>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div class="text-center">
                        <a class="text-decoration-none" style="color: #37a495" href="{{route('forsa.index')}}"><h3 class="py-5">فرصة</h3></a>
                        <p class="pb-5">✨إستعادة كلمة المرور✨</p>
                        @if (session('status'))
                            <div class="alert alert-success mx-lg-5 text-center">
                                <p><small>تم ارسال ايميل يمكنك مراجعة بريدك الالكتروني</small></p>
                            </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('vendor.password.email')}}">
                        @csrf
                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني">
                            <div class="form-control-feedback"><i class="sicon-user text-muted text-bottom"></i>
                                @error('email')
                                <span id="email_error" class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="submit_btn" class="btn btn-info text-decoration-none text-white btn-block" style="color:#37a495;"> ارسال<i class="sicon-caret-left position-right"></i></button>
                        </div>
                        <div id="register_box text-right">
                            <div class="text-center"><span>ليس لديك حساب متجر ؟
                </span></div>
                            <a href="{{route('vendor.signUp.page')}}" class="btn btn-outline-info btn-block btn-flat content-group mt-2">إنشاء متجر جديد</a>
                            <a href="{{route('vendor.signIn.page')}}" class="btn btn-outline-info btn-block btn-flat content-group mt-2">أو تسجيل الدخول</a>
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


