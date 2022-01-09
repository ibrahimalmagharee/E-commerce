@extends('layouts.superAdmin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{route('superAdmin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.vendors')}}">التجار</a>
                                </li>
                                <li class="breadcrumb-item active"> تعديل  -
                                    {{$vendor->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">
                                        <strong> تعديل-
                                            {{$vendor->name}}  </strong></h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>


                                <!-- Begin Form Edit Brand -->
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form class="form" id="editVendorForm" method="post" action="{{route('update.vendor', $vendor->id)}}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$vendor->id}}">

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الاسم</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   placeholder=""
                                                                   name="name" value="{{$vendor->name}}">
                                                            @error('name')
                                                            <span id="name_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الدومين</label>
                                                            <input type="text" id="domain" class="form-control" placeholder=""
                                                                   name="domain" value="{{$vendor->domain}}">

                                                            @error('domain')
                                                            <span id="domain_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">قاعدة البيانات</label>
                                                            <input type="text" id="database" class="form-control" placeholder=""
                                                                   name="database" value="{{$vendor->database}}">

                                                            @error('database')
                                                            <span id="database_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الايميل</label>
                                                            <input type="email" id="email" class="form-control" placeholder=""
                                                                   name="email" value="{{$vendor->email}}">

                                                            @error('email')
                                                            <span id="email_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الجوال</label>
                                                            <input type="text" id="mobile" class="form-control" placeholder=""
                                                                   name="mobile" value="{{$vendor->mobile}}">

                                                            @error('mobile')
                                                            <span id="mobile_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <input type="hidden" name="action" id="action" value="Update">
                                                <a type="button" href="{{route('index.vendors')}}" class="btn btn-warning mr-1" data-dismiss="modal">
                                                    <i
                                                        class="ft-x"></i>تراجع
                                                </a>
                                                <button class="btn btn-primary" id="updateVendor"> تحديث</button>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                                <!-- End Form Edit Brand -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection


