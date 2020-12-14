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
                                <li class="breadcrumb-item active"> تعديل مخزون المنتج -
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
                                        <strong> تعديل مخزون المنتج -
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
                                                        class="ft-home"></i>تعديل مخزون المنتج
                                                </h4>
                                                <input type="hidden" name="product_id" value="{{$product_store->id}}">

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1" class="ml-1">كود المنتج</label>
                                                                <input type="text" id="SKU" class="form-control"
                                                                       placeholder="كود المنتج"
                                                                       name="SKU" value="{{$product_store->SKU}}">
                                                                @error('SKU')
                                                                <span id="SKU_error"
                                                                      class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2">تتبع المستودع</label>
                                                                <select name="manage_stock" id="manage_stock" class="form-control">
                                                                    <optgroup label="هل تريد تتبع المستودع">
                                                                        <option value="">هل تريد تتبع المستودع</option>
                                                                        <option value="1" @if($product_store->manage_stock == 1) selected @endif>اتاحة التتبع</option>
                                                                        <option value="0" @if($product_store->manage_stock == 0) selected @endif> عدم اتاحة التتبع</option>
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
                                                                <label for="projectinput2">حالة النتج</label>
                                                                <select name="in_stock" id="in_stock" class="form-control">
                                                                    <optgroup label="الرجاء اختر حالة المنتج">
                                                                        <option value="">الرجاء اختر حالة المنتج</option>
                                                                        <option value="1" @if($product_store->in_stock == 1) selected @endif>متاح</option>
                                                                        <option value="0" @if($product_store->in_stock == 0) selected @endif>غير متاح</option>
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
                                                                <label for="projectinput1">الكمية
                                                                </label>
                                                                <input type="number" id="qty"
                                                                       class="form-control"
                                                                       placeholder="كمية المنتج"
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


