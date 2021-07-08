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
                                    <a href="{{route('index.product')}}">المنتجات</a>

                                </li>
                                <li class="breadcrumb-item active"> تعديل منتج -
                                    {{$product_general->name}}</li>
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
                                        <strong> تعديل منتج -
                                            {{$product_general->name}} </strong></h4>
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
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form class="form" method="post"
                                                  action="{{route('update.product.general',$product_general->id)}}"
                                                  id="categoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <h4 class="form-section"><i
                                                        class="ft-home"></i>تعديل بيانات المنتج العامة
                                                </h4>
                                                <input type="hidden" name="product_id" value="{{$product_general->id}}">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">الاسم</label>
                                                                <input type="text" id="name" class="form-control"
                                                                       placeholder=""
                                                                       name="name" value="{{$product_general->name}}">
                                                                @error('name')
                                                                <span id="name_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput1">الاسم بالرابط </label>
                                                                <input type="text" id="slug" class="form-control"
                                                                       placeholder=""
                                                                       name="slug" value="{{$product_general->slug}}">
                                                                @error('slug')
                                                                <span id="slug_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">الوصف القصير</label>

                                                                <textarea name="short_description"
                                                                          id="short-description" cols="3" rows="4"
                                                                          class="form-control">{{$product_general->short_description}}</textarea>
                                                            </div>
                                                            @error('short_description')
                                                            <span id="slug_error"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">الحالة</label>
                                                                <input type="checkbox" name="is_active" value="1"
                                                                       id="switcheryColor4"
                                                                       class="switchery active" data-color="success"
                                                                       @if($product_general->is_active == 1) checked @endif/>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    for="projectinput2"> {{__('translate-admin/category.choose category')}} </label>
                                                                <select name="categories[]" id="parent_id"
                                                                        class="select2 form-control width-480"
                                                                        multiple>
                                                                    <optgroup
                                                                        label="{{__('translate-admin/category.choose_main_category')}} ">
                                                                        @if($data['categories'] && $data['categories'] -> count() > 0)
                                                                            @foreach($data['categories'] as $mainCategory)
                                                                                <option value="{{$mainCategory->id}}" @if($product_categories->contains('id', $mainCategory->id ) == $mainCategory->id) selected @endif>{{$mainCategory->name}}</option>

                                                                                @foreach ($mainCategory->childrenCategories as $index => $childCategory)
                                                                                    @include('admin.products.edit.child_category_edit', ['child_category' => $childCategory])
                                                                                @endforeach
                                                                            @endforeach
                                                                        @endif

                                                                    </optgroup>
                                                                </select>
                                                                @foreach($data['categories'] as $index)
                                                                    @if($errors->has('categories.'.$index))
                                                                        <span id="parent_id_error"
                                                                              class="text-danger">{{$errors->any('categories.'.$index)}}</span>
                                                                    @endif
                                                                @endforeach


                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput2"> العلامات </label>
                                                                <select name="tags[]" id="parent_id"
                                                                        class="select2 form-control width-480"
                                                                        multiple>
                                                                    <optgroup label="الرجاء اختر العلامة المناسبة">

                                                                        @if($data['tags'] && $data['tags'] -> count() > 0)
                                                                            @foreach($data['tags'] as $tags)
                                                                                <option value="{{$tags->id}}" @if($product_tags->contains('id', $tags->id ) == $tags->id) selected @endif>{{$tags->name}}</option>

                                                                            @endforeach
                                                                        @endif

                                                                    </optgroup>
                                                                </select>
                                                                @error('tags[0]')
                                                                <span id="parent_id_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput2"> الماركة
                                                                    التجارية </label>
                                                                <select name="brand_id" id="brand"
                                                                        class="select2 form-control width-480">
                                                                    <optgroup label="الرجاء اختر الماركة التجارية">
                                                                        @if($data['brand'] && $data['brand'] -> count() > 0)
                                                                            @foreach($data['brand'] as $brand)
                                                                                <option value="{{$brand->id}}" @if($product_general->brand_id == $brand->id) selected @endif>{{$brand->name}}</option>
                                                                            @endforeach
                                                                        @endif

                                                                    </optgroup>
                                                                </select>
                                                                @error('brand_id')
                                                                <span id="parent_id_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">الوصف</label>
                                                                <textarea name="description" id="ckeditor" cols="15"
                                                                          rows="15" class="ckeditor">{{$product_general->description}}</textarea>
                                                            </div>
                                                            @error('description')
                                                            <span id="slug_error"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
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
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection


