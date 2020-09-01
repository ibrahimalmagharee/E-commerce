@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('translate-admin/shipping.main')}}</a></li>
                                <li class="breadcrumb-item">{{__('translate-admin/shipping.setting')}}</li>
                                <li class="breadcrumb-item">{{__('translate-admin/shipping.shipping-method')}}</li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/shipping.edit')}} - {{$shipping_method->value}}</li>
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
                                    <h4 class="card-title text-center"><strong> {{__('translate-admin/shipping.edit')}}
                                            - {{$shipping_method->value}} </strong></h4>
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

                            @include('admin.includes.alert.success')
                            @include('admin.includes.alert.errors')

                            <!--  Begin Form Edit -->
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" id="categoryFormLocale" method="post"
                                              action="{{route('update.shipping',$shipping_method->id)}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <h4 class="form-section"><i class="ft-home"></i> {{__('translate-admin/shipping.shipping-method')}}
                                                - {{$shipping_method->value}}</h4>
                                            <input type="hidden" name="id" value="{{$shipping_method->id}}">

                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('translate-admin/shipping.shipping-method')}} </label>
                                                            <input type="text" id="value" class="form-control" placeholder="" name="value" value="{{$shipping_method->value}}">

                                                            @error('value')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('translate-admin/shipping.shipping price')}}</label>
                                                            <input type="number" id="plain_value" class="form-control" placeholder="" name="plain_value" value="{{$shipping_method -> plain_value}}">

                                                            @error('plain_value')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                    <i class="ft-x"></i> {{__('translate-admin/shipping.retreat')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="la la-check-square-o"></i> {{__('translate-admin/shipping.update')}}
                                                </button>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
