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
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/category.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.categories')}}">{{__('translate-admin/category.main_category')}}</a>

                                </li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/category.editCategory')}}
                                    {{$categories->name}}</li>
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
                                        <strong> {{__('translate-admin/category.editCategory')}}
                                            {{$categories->name}} </strong></h4>
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


                                <!--  Begin Form Edit -->
                                @if($categories -> parent_id == null)
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form class="form" method="post"
                                                  action="{{route('update.category',$categories->id)}}"
                                                  id="categoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <h4 class="form-section"><i
                                                        class="ft-home"></i>{{__('translate-admin/category.edit')}} {{__('translate-admin/category.data_mainCategory')}}
                                                </h4>
                                                <input type="hidden" name="id" value="{{$categories->id}}">
                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <img src="{{$categories->photo}}" alt="photo"
                                                             class="height-150">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label> {{__('translate-admin/category.photo')}} </label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="photo">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('photo')
                                                     <span id="photo_error" class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>

                                                <input type="hidden" name="type" id="type" value="1">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('translate-admin/category.name')}}</label>
                                                                <input type="text" id="name" class="form-control"
                                                                       placeholder=""
                                                                       name="name" value="{{$categories->name}}">
                                                                @error('name')
                                                                <span id="name_error" class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('translate-admin/category.slug')}} </label>
                                                                <input type="text" id="slug" class="form-control"
                                                                       placeholder=""
                                                                       name="slug" value="{{$categories->slug}}">
                                                                @error('slug')
                                                                <span id="slug_error" class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">{{__('translate-admin/category.status')}}</label>
                                                                <input type="checkbox" name="is_active" value="1"
                                                                       id="switcheryColor4"
                                                                       class="switchery active" data-color="success"
                                                                       @if($categories->is_active == 1 ) checked @endif/>

                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="form-actions">
                                                    <a href="{{route('index.categories')}}" type="button"
                                                       class="btn btn-warning mr-1"
                                                       data-dismiss="modal"><i
                                                            class="ft-x"></i> {{__('translate-admin/category.retreat')}}
                                                    </a>
                                                    <button class="btn btn-primary"
                                                            id="updateCategory"> {{__('translate-admin/category.update')}}</button>
                                                </div>

                                            </form>


                                        </div>
                                    </div>

                                @else
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form class="form" method="post"
                                                  action="{{route('update.category',$categories->id)}}"
                                                  id="categoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <h4 class="form-section"><i
                                                        class="ft-home"></i>{{__('translate-admin/category.edit')}} {{__('translate-admin/category.data_subCategory')}}
                                                </h4>
                                                <input type="hidden" name="id" value="{{$categories->id}}">
                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <img src="{{$categories->photo}}" alt="photo"
                                                             class="height-150">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>{{__('translate-admin/category.photo')}}</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="photo">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('photo')
                                                    <span id="photo_error" class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>

                                                <input type="hidden" name="type" id="type" value="2">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('translate-admin/category.name')}} </label>
                                                                <input type="text" id="name" class="form-control"
                                                                       placeholder=""
                                                                       name="name" value="{{$categories->name}}">
                                                                @error('name')
                                                                <span id="name_error" class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">{{__('translate-admin/category.slug')}} </label>
                                                                <input type="text" id="slug" class="form-control"
                                                                       placeholder=""
                                                                       name="slug" value="{{$categories->slug}}">
                                                                @error('slug')
                                                                <span id="slug_error" class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2"> {{__('translate-admin/category.choose category')}} </label>
                                                                <select name="parent_id" id="parent_id"
                                                                        class="select2 form-control width-480">
                                                                    <optgroup
                                                                        label="{{__('translate-admin/category.choose_main_category')}} ">
                                                                        @if($mainCategories && $mainCategories -> count() > 0)
                                                                            @foreach($mainCategories as $mainCategory)
                                                                                <option value="{{$mainCategory->id}}"
                                                                                        @if($mainCategory -> id == $categories->parent_id) selected @endif>{{$mainCategory->name}}</option>

                                                                                @foreach ($mainCategory->childrenCategories as $index => $childCategory)
                                                                                    @include('admin.categories.child_category_edit', ['child_category' => $childCategory])
                                                                                @endforeach
                                                                            @endforeach
                                                                        @endif

                                                                    </optgroup>
                                                                </select>
                                                                @error('parent_id')
                                                                <span id="parent_id_error" class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">{{__('translate-admin/category.status')}}</label>
                                                                <input type="checkbox" name="is_active" value="1"
                                                                       id="switcheryColor4"
                                                                       class="switchery active" data-color="success"
                                                                       @if($categories->is_active == 1 ) checked @endif/>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">


                                                    </div>


                                                </div>

                                                <div class="form-actions">
                                                    <a href="{{route('index.categories')}}" type="button"
                                                       class="btn btn-warning mr-1"
                                                       data-dismiss="modal"><i
                                                            class="ft-x"></i> {{__('translate-admin/category.retreat')}}
                                                    </a>
                                                    <button class="btn btn-primary"
                                                            id="updateCategory"> {{__('translate-admin/category.update')}}</button>
                                                </div>

                                            </form>


                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection


