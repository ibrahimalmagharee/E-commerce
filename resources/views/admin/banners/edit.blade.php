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
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/banners.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.banners')}}">{{__('translate-admin/banners.banners')}}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/banners.edit_banner')}} </li>
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
                                        <strong> {{__('translate-admin/banners.edit_banner')}}</strong></h4>
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

                                        <form class="form" id="editSliderForm" method="post" action="{{route('update.banner', $banner->id)}}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$banner->id}}">
                                            <div class="form-group">
                                                <div class="text-center">

                                                    <img src="{{$banner->getPhoto($banner->photo)}}" alt="photo"
                                                         class="height-150">


                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label> {{__('translate-admin/banners.photo')}} </label>
                                                                    <label id="projectinput7" class="file center-block">
                                                                        <input type="file" id="file" name="photo">
                                                                        <span class="file-custom"></span>
                                                                    </label>
                                                                    @error('photo')
                                                                    <span id="photo_error" class="text-danger">{{$message}} </span>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput2">{{__('translate-admin/banners.select_category')}}</label>
                                                                        <select name="category_id" id="category_id" class="form-control">
                                                                            <optgroup label="{{__('translate-admin/banners.category_id.required')}}">
                                                                                @isset($data['categories'] )
                                                                                    @foreach($data['categories'] as $category)

                                                                                        <option value="{{$category->id}}" @if($category->id == $banner->category_id) selected @endif>{{$category->name}}</option>
                                                                                    @endforeach
                                                                                @endisset
                                                                            </optgroup>
                                                                        </select>
                                                                        @error('category_id')
                                                                        <span id="category_id_error" class="text-danger">{{$message}} </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                </div>


                                            <div class="form-actions">
                                                <input type="hidden" name="action" id="action" value="Update">
                                                <a href="{{route('index.banners')}}" type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                    <i
                                                        class="ft-x"></i> {{__('translate-admin/banners.retreat')}}
                                                </a>
                                                <button class="btn btn-primary" id="updateSlider"> {{__('translate-admin/banners.update')}}</button>
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
@section('script')
@endsection



