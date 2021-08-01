@extends('layouts.forsa')
@section('title')
    تسجيل
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
                    <form id="form" method="post" action="{{route('vendor.signUp')}}" class="text-right">
                       @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>اسم المتجر <span class="text-danger">*</span></label>
                                    <div class="input-group">
                      <span class="input-group-addon"
                      ><i class="sicon-store2"></i
                          ></span>
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            maxlength="30"
                                            placeholder="متجر ..."
                                            value="{{old('name')}}"
                                        />
                                    </div>
                                    @error('name')
                                    <span id="name_error" class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>رابط المتجر <span class="text-danger">*</span></label
                                    >
                                    <div class="input-group">
                      <span class="input-group-addon"
                      ><i class="sicon-link"></i
                          ></span>
                                        <input type="text" name="domain" value="{{old('domain')}}" class="form-control"/>
                                    </div>
                                    <small class="text-muted "
                                    >سيكون هو رابط المتجر الذي يمكن للعملاء الدخول عليه للطلب.
                                        يجب استخدام الأحرف الانجليزية والارقام</small
                                    >
                                    @error('domain')
                                    <span id="domain_error" class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label
                                    >رقم الجوال <span class="text-danger">*</span></label
                                    >
                                    <div class="input-group mb-3" style="direction: ltr;">
                                        <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" aria-label="Default"
                                               aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    @error('mobile')
                                    <span id="mobile_error" class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                    >البريد الالكتروني <span class="text-danger">*</span></label
                                    >
                                    <div class="input-group">
                                        <input
                                            type="email"
                                            name="email"
                                            value="{{old('email')}}"
                                            class="form-control "
                                            placeholder=" البريد الالكتروني "
                                        />
                                    </div>
                                    @error('email')
                                    <span id="email_error" class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                    >كلمة المرور <span class="text-danger">*</span></label
                                    >
                                    <div class="input-group">
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control "
                                            placeholder=" كلمة المرور "
                                        />
                                    </div>
                                    @error('password')
                                    <span id="password_error" class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-40 text-center">
                                <button
                                    type="submit"
                                    id="submit_btn"
                                    class="btn btn-info btn-block "
                                >
                                    إنشاء المتجر
                                </button>
                                <br/>
                                <a href="{{route('vendor.signIn.page')}}" class="font-14">
                                    <i class="sicon-caret-right position-left text-bottom"></i>
                                    العودة لتسجيل الدخول
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 py-5">
                    <section class="container my-5 py-5">

                        <div class="owl-carousel first owl-theme">
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



