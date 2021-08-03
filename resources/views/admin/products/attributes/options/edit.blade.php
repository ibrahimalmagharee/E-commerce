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
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/optionsAttributes.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.option', $option->product_id)}}">{{__('translate-admin/optionsAttributes.options')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('translate-admin/optionsAttributes.edit_option')}} -
                                    {{$option->name}} </li>
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
                                        <strong> {{__('translate-admin/optionsAttributes.edit_option')}} -
                                            {{$option->name}} </strong></h4>
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


                                <!-- Begin Form Edit attribute -->
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form class="form" method="post" action="{{route('update.option', $option->id)}}" id="optionForm" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="option_id" value="{{$option->id}}">
                                            <input type="hidden" name="product_id" value="{{$option->product_id}}">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('translate-admin/optionsAttributes.name')}} </label>
                                                            <input type="text" id="name" class="form-control" placeholder="الاسم : أحمر,أصفر,صغير,كبير ..."
                                                                   name="name" value="{{$option->name}}">
                                                            @error('name')
                                                            <span id="name_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('translate-admin/optionsAttributes.price')}} </label>
                                                            <input type="number" id="price" class="form-control" placeholder="السعر : 20$"
                                                                   name="price" value="{{$option->price}}">

                                                            @error('price')
                                                            <span id="price_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('translate-admin/optionsAttributes.attribute')}} </label>
                                                            <select name="attribute_id" id="attribute_id"
                                                                    class="select form-control">
                                                                <optgroup label="{{__('translate-admin/optionsAttributes.choose_the_appropriate_feature')}} ">
                                                                    <option>{{__('translate-admin/optionsAttributes.choose_the_appropriate_feature')}} </option>
                                                                    @isset($attributes)
                                                                        @foreach($attributes as $attribute)
                                                                            <option value="{{$attribute->id}}" @if($attribute->id == $option->attribute_id) selected @endif>{{$attribute->name}}</option>
                                                                        @endforeach
                                                                    @endisset


                                                                </optgroup>
                                                            </select>
                                                            @error('attribute_id')
                                                            <span id="attribute_id_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <a href="{{route('index.option', $option->product_id)}}" type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i
                                                        class="ft-x"></i> {{__('translate-admin/optionsAttributes.retreat')}}
                                                </a>
                                                <button class="btn btn-primary" id="addOption"> {{__('translate-admin/optionsAttributes.update')}} </button>
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


