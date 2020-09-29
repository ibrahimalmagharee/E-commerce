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
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/brand.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.brand')}}">{{__('translate-admin/brand.brands')}}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/brand.editBrand')}} -
                                    {{$brand->name}} {{__('translate-admin/brand.commercial')}}</li>
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
                                        <strong> {{__('translate-admin/brand.editBrand')}}-
                                            {{$brand->name}} {{__('translate-admin/brand.commercial')}} </strong></h4>
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

                                        <form class="form" id="editBrandForm" method="post" action="{{route('update.brand', $brand->id)}}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$brand->id}}">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{$brand->logo}}" alt="photo"
                                                         class="height-150">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label> {{__('translate-admin/brand.logo')}} </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="logo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('logo')
                                                <span id="logo_error" class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{__('translate-admin/brand.name')}}</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   placeholder=""
                                                                   name="name" value="{{$brand->name}}">
                                                            @error('name')
                                                            <span id="name_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">{{__('translate-admin/brand.status')}}</label>
                                                            <input type="checkbox" name="is_active" value="1"
                                                                   id="switcheryColor4"
                                                                   class="switchery active" data-color="success"
                                                                   @if($brand->is_active == 1) checked @endif/>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <input type="hidden" name="action" id="action" value="Update">
                                                <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                    <i
                                                        class="ft-x"></i> {{__('translate-admin/brand.retreat')}}
                                                </button>
                                                <button class="btn btn-primary" id="updateBrand"> {{__('translate-admin/brand.update')}}</button>
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


