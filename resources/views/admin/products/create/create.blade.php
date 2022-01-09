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
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/products.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.product')}}"> {{__('translate-admin/products.products')}} -</a>

                                </li>
                                <li class="breadcrumb-item active">{{__('translate-admin/products.add_product')}}
                                </li>
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
                                        <strong>{{__('translate-admin/products.add_product')}}
                                        </strong></h4>
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



                                        <ul class="nav nav-tabs nav-linetriangle no-hover-bg">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="generalLable-tab" data-toggle="tab"
                                                   href="#general" aria-controls="general"
                                                   aria-expanded="true">
                                                    {{__('translate-admin/products.general_product_information')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="priceLable-tab" data-toggle="tab"
                                                   href="#price" aria-controls="price"
                                                   aria-expanded="false">
                                                    {{__('translate-admin/products.product_price_information')}}</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="storeLable-tab" data-toggle="tab"
                                                   href="#store" aria-controls="store"
                                                   aria-expanded="false">
                                                    {{__('translate-admin/products.product_stoke_information')}}</a>
                                            </li>
                                        </ul>

                                        <form class="form" method="post"
                                              action="{{route('save.product.general')}}"
                                              id="categoryForm" enctype="multipart/form-data">
                                            @csrf


                                        <div class="tab-content px-1 pt-1">

                                            <div role="tabpanel" class="tab-pane active" id="general"
                                                 aria-labelledby="generalLable-tab"
                                                 aria-expanded="true">
                                                    <h4 class="form-section"><i
                                                            class="ft-home"></i>{{__('translate-admin/products.add_product')}}
                                                    </h4>
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="projectinput1">{{__('translate-admin/products.name')}}</label>
                                                                    <input type="text" id="name" class="form-control"
                                                                           placeholder=""
                                                                           name="name" value="{{old('name')}}">
                                                                    @error('name')
                                                                    <span id="name_error"
                                                                          class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="projectinput1">{{__('translate-admin/products.slug')}} </label>
                                                                    <input type="text" id="slug" class="form-control"
                                                                           placeholder=""
                                                                           name="slug" value="{{old('slug')}}">
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
                                                                    <label for="projectinput1">{{__('translate-admin/products.short_description')}}</label>

                                                                    <textarea name="short_description"
                                                                              id="short-description" cols="3" rows="4"
                                                                              class="form-control"></textarea>
                                                                </div>
                                                                @error('short_description')
                                                                <span id="slug_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1">{{__('translate-admin/products.status')}}</label>
                                                                    <input type="checkbox" name="is_active" value="1"
                                                                           id="switcheryColor4"
                                                                           class="switchery active" data-color="success"
                                                                           checked/>

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="projectinput2"> {{__('translate-admin/products.category')}} </label>
                                                                    <select name="categories[]" id="parent_id"
                                                                            class="select2 form-control width-480"
                                                                            multiple>
                                                                        <optgroup
                                                                            label="{{__('translate-admin/category.choose_main_category')}} ">
                                                                            @if($data['categories'] && $data['categories'] -> count() > 0)
                                                                                @foreach($data['categories'] as $mainCategory)
                                                                                    <option
                                                                                        value="{{$mainCategory->id}}">{{$mainCategory->name}}</option>

                                                                                    @foreach ($mainCategory->childrenCategories as $index => $childCategory)
                                                                                        @include('admin.categories.child_category', ['child_category' => $childCategory])
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
                                                                    <label for="projectinput2"> {{__('translate-admin/products.tags')}} </label>
                                                                    <select name="tags[]" id="parent_id"
                                                                            class="select2 form-control width-480"
                                                                            multiple>
                                                                        <optgroup label="{{__('translate-admin/products.please_choose_the_appropriate_tag')}}">
                                                                            @if($data['tags'] && $data['tags'] -> count() > 0)
                                                                                @foreach($data['tags'] as $tag)
                                                                                    <option
                                                                                        value="{{$tag->id}}">{{$tag->name}}</option>

                                                                                @endforeach
                                                                            @endif

                                                                        </optgroup>
                                                                    </select>
                                                                    @error('tags')
                                                                    <span id="parent_id_error"
                                                                          class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">{{__('translate-admin/products.brand')}}</label>
                                                                    <select name="brand_id" id="brand"
                                                                            class="select2 form-control width-480">
                                                                        <optgroup label="{{__('translate-admin/products.please_select_a_brand')}}">
                                                                            @if($data['brand'] && $data['brand'] -> count() > 0)
                                                                                @foreach($data['brand'] as $brand)
                                                                                    <option
                                                                                        value="{{$brand->id}}">{{$brand->name}}</option>
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
                                                                              rows="15" class="ckeditor"></textarea>
                                                                </div>
                                                                @error('description')
                                                                <span id="slug_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                        </div>


                                                    </div>


                                            </div>

                                            <div class="tab-pane" id="price"
                                                 aria-labelledby="priceLable-tab">

                                                    <h4 class="form-section"><i
                                                            class="ft-home"></i>{{__('translate-admin/products.add_product_price')}}
                                                    </h4>
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1" class="ml-1">{{__('translate-admin/products.price')}}</label>
                                                                    <input type="number" id="price" class="form-control"
                                                                           placeholder=""
                                                                           name="price" value="{{old('price')}}">
                                                                    @error('price')
                                                                    <span id="price_error"
                                                                          class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="projectinput1" class="ml-1">{{__('translate-admin/products.special_price')}} </label>
                                                                    <input type="number" id="special_price" class="form-control"
                                                                           placeholder=""
                                                                           name="special_price" value="{{old('special_price')}}">
                                                                    @error('special_price')
                                                                    <span id="special_price_error"
                                                                          class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput2" class="ml-1">{{__('translate-admin/products.type_price')}}</label>
                                                                    <select name="special_price_type" id="special_price_type"
                                                                            class="select2 form-control width-300">
                                                                        <optgroup label="{{__('translate-admin/products.please_select_a_price_type')}}">
                                                                            <option value="">{{__('translate-admin/products.please_select_a_price_type')}}</option>
                                                                            <option value="percent">{{__('translate-admin/products.percent')}}</option>
                                                                            <option value="fixed"> {{__('translate-admin/products.fixed')}}</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                                @error('special_price_type')
                                                                <span id="special_price_type_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="srartdate"
                                                                           class="card-title ml-1">{{__('translate-admin/products.start_date')}}</label>
                                                                    <input type="date" name="special_price_start" id="special_price_start" class="form-control" value="{{old('special_price_start')}}">

                                                                </div>
                                                                @error('special_price_start')
                                                                <span id="special_price_start_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="enddate"
                                                                           class="card-title ml-1">{{__('translate-admin/products.end_date')}}</label>
                                                                    <input type="date" name="special_price_end" id="special_price_end" class="form-control" value="{{old('special_price_end')}}">

                                                                </div>
                                                                @error('special_price_end')
                                                                <span id="special_price_end_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>


                                            </div>

                                            <div class="tab-pane" id="store"
                                                 aria-labelledby="storeLable-tab">
                                                    <h4 class="form-section"><i
                                                            class="ft-home"></i>{{__('translate-admin/products.add_product_stoke')}}
                                                    </h4>

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1" class="ml-1">{{__('translate-admin/products.product_code')}}</label>
                                                                <input type="text" id="SKU" class="form-control"
                                                                       placeholder="كود المنتج"
                                                                       name="SKU" value="{{old('SKU')}}">
                                                                @error('SKU')
                                                                <span id="SKU_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2">{{__('translate-admin/products.warehouse_tracking')}}</label>
                                                                <select name="manage_stock" id="manage_stock" class="form-control">
                                                                    <optgroup label="{{__('translate-admin/products.do_you_want_to_track_the_warehouse')}}">
                                                                        <option value="">{{__('translate-admin/products.do_you_want_to_track_the_warehouse')}}</option>
                                                                        <option value="1">{{__('translate-admin/products.enable_tracking')}}</option>
                                                                        <option value="0">{{__('translate-admin/products.unable_tracking')}}</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            @error('manage_stock')
                                                            <span id="manage_stock_error"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2">{{__('translate-admin/products.product_status')}}</label>
                                                                <select name="in_stock" id="in_stock" class="form-control">
                                                                    <optgroup label="{{__('translate-admin/products.please_select_a_product_status')}}">
                                                                        <option value="">{{__('translate-admin/products.please_select_a_product_status')}}</option>
                                                                        <option value="1">{{__('translate-admin/products.available')}}</option>
                                                                        <option value="0">{{__('translate-admin/products.unavailable')}}</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            @error('in_stock')
                                                            <span id="in_stockerror"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6" style="display:none"  id="qtyDiv">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('translate-admin/products.quantity')}}
                                                                </label>
                                                                <input type="number" id="qty"
                                                                       class="form-control"
                                                                       placeholder="{{__('translate-admin/products.quantity')}}"
                                                                       value="{{old('qty')}}"
                                                                       name="qty">
                                                                @error("qty")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                            <div class="form-actions">
                                                <a href="{{route('index.product')}}" type="button"
                                                   class="btn btn-warning mr-1"
                                                   data-dismiss="modal"><i
                                                        class="ft-x"></i> {{__('translate-admin/products.retreat')}}
                                                </a>
                                                <button type="submit" class="btn btn-primary"
                                                        id="updateCategory"> {{__('translate-admin/products.save')}}</button>
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

@section('script')
    <script type="text/javascript">
        $(document).on('change','#manage_stock',function(){
            if($(this).val() == 1 ){
                $('#qtyDiv').show();
            }else{
                $('#qtyDiv').hide();
            }
        });

    </script>
    @endsection


