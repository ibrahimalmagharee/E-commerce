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
                                <li class="breadcrumb-item active"> {{__('translate-admin/products.edit_product_stoke')}} -
                                    {{$product_store->name}}</li>
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
                                        <strong>{{__('translate-admin/products.edit_product_stoke')}} -
                                            {{$product_store->name}} </strong></h4>
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
                                                  action="{{route('update.product.store',$product_store->id)}}"
                                                  id="categoryForm" enctype="multipart/form-data">
                                                @csrf
                                                <h4 class="form-section"><i
                                                        class="ft-home"></i>{{__('translate-admin/products.edit_product_stoke')}} -
                                                    {{$product_store->name}}
                                                </h4>
                                                <input type="hidden" name="product_id" value="{{$product_store->id}}">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1" class="ml-1">{{__('translate-admin/products.product_code')}} </label>
                                                                <input type="text" id="SKU" class="form-control"
                                                                       placeholder=""
                                                                       name="SKU" value="{{$product_store->SKU}}">
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
                                                                        <option value="1" @if($product_store->manage_stock == 1) selected @endif>{{__('translate-admin/products.enable_tracking')}}</option>
                                                                        <option value="0" @if($product_store->manage_stock == 0) selected @endif>{{__('translate-admin/products.unable_tracking')}}</option>
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
                                                                <label for="projectinput2">{{__('translate-admin/products.product_status')}} </label>
                                                                <select name="in_stock" id="in_stock" class="form-control">
                                                                    <optgroup label="{{__('translate-admin/products.please_select_a_product_status')}}">
                                                                        <option value="">{{__('translate-admin/products.please_select_a_product_status')}}</option>
                                                                        <option value="1" @if($product_store->in_stock == 1) selected @endif>{{__('translate-admin/products.available')}}</option>
                                                                        <option value="0" @if($product_store->in_stock == 0) selected @endif>{{__('translate-admin/products.unavailable')}}</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            @error('in_stock')
                                                            <span id="in_stockerror"
                                                                  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6" style="display:@if($product_store->manage_stock == 0) none @endif"  id="qtyDiv">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('translate-admin/products.quantity')}}
                                                                </label>
                                                                <input type="number" id="qty"
                                                                       class="form-control"
                                                                       placeholder=""
                                                                       value="{{$product_store->qty}}"
                                                                       name="qty">
                                                                @error("qty")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
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
                                                    <button class="btn btn-primary"
                                                            id="updateCategory"> {{__('translate-admin/products.update')}}</button>
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


