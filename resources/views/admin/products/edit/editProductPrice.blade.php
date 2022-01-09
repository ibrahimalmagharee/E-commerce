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
                                    <a href="{{route('index.product')}}">{{__('translate-admin/products.products')}}</a>

                                </li>
                                <li class="breadcrumb-item active">{{__('translate-admin/products.edit_product_price')}} -
                                    {{$product_price->name}}</li>
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
                                        <strong> {{__('translate-admin/products.edit_product_price')}} -
                                            {{$product_price->name}} </strong></h4>
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
                                                  action="{{route('update.product.price',$product_price->id)}}"
                                                  id="categoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <h4 class="form-section"><i
                                                        class="ft-home"></i>{{__('translate-admin/products.edit_product_price')}} -
                                                    {{$product_price->name}}
                                                </h4>
                                                <input type="hidden" name="product_id" value="{{$product_price->id}}">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput1" class="ml-1">{{__('translate-admin/products.price')}}</label>
                                                                <input type="number" id="price" class="form-control"
                                                                       placeholder=""
                                                                       name="price" value="{{$product_price->price}}">
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
                                                                       name="special_price" value="{{$product_price->special_price}}">
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
                                                                        <option value="percent" @if($product_price->special_price_type == 'percent') selected @endif>{{__('translate-admin/products.percent')}}</option>
                                                                        <option value="fixed" @if($product_price->special_price_type == 'fixed') selected @endif> {{__('translate-admin/products.fixed')}}</option>
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
                                                                <input type="date" name="special_price_start" id="special_price_start" class="form-control" value="{{date('Y-m-d', strtotime($product_price->special_price_start))}}">

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
                                                                <input type="date" name="special_price_end" id="special_price_end" class="form-control" value="{{date('Y-m-d', strtotime($product_price->special_price_end))}}">

                                                            </div>
                                                            @error('special_price_end')
                                                            <span id="special_price_end_error"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions">
                                                    <a href="{{route('index.product')}}" type="button"
                                                       class="btn btn-warning mr-1"
                                                       data-dismiss="modal"><i
                                                            class="ft-x"></i> {{__('translate-admin/products.retreat')}}
                                                    </a>
                                                    <button class="btn btn-primary"
                                                            id="updateCategory">{{__('translate-admin/products.update')}}</button>
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


