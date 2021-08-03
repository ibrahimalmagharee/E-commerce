@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{__('translate-admin/optionsAttributes.options')}}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('translate-admin/optionsAttributes.main')}}</a></li>
                                <li class="breadcrumb-item"><a href="{{route('index.product')}}">{{__('translate-admin/optionsAttributes.products')}}</a></li>
                                <li class="breadcrumb-item active">{{__('translate-admin/optionsAttributes.options')}} - {{$product->name}} </li>
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
                                    <a class="btn btn-outline-success float-left" href="javascript:void(0)"
                                       id="addNewOptions"><i class="la la-plus">{{__('translate-admin/optionsAttributes.add_option')}} </i></a>
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

                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                                            id="success_msg_add" style="display: none">تمت اضافة خيار الخاصية بنجاح
                                    </button>
                                </div>

                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="error_msg_add" style="display: none">فشلت عملية الاضافة
                                    </button>
                                </div>


                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                                            id="success_msg_delete" style="display: none">تم حذف خيار الخاصية بنجاح
                                    </button>
                                </div>

                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="error_msg_delete" style="display: none">لم تتم عملية الحذف
                                    </button>
                                </div>

                                <div class="card-content collapse show" id="viewMainCategory">
                                    <div class="card-body card-dashboard">
                                        <table class="table option-table">
                                            <thead>
                                            <tr>
                                                <th>{{__('translate-admin/optionsAttributes.name')}}</th>
                                                <th>{{__('translate-admin/optionsAttributes.price')}}</th>
                                                <th>{{__('translate-admin/optionsAttributes.product')}}</th>
                                                <th>{{__('translate-admin/optionsAttributes.attribute')}}</th>
                                                <th>{{__('translate-admin/optionsAttributes.process')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Begin Form Add Brand -->

    <div class="modal fade modal-open" id="option-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title form-section" id="modalheader">
                        <i class="ft-home"></i>  {{__('translate-admin/optionsAttributes.data_product_options')}} - {{$product->name}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" id="optionForm" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('translate-admin/optionsAttributes.name')}}</label>
                                                <input type="text" id="name" class="form-control" placeholder="الاسم : أحمر,أصفر,صغير,كبير ..."
                                                       name="name" value="{{old('name')}}">
                                                <span id="name_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('translate-admin/optionsAttributes.price')}}</label>
                                                <input type="number" id="price" class="form-control" placeholder="السعر : 20$"
                                                       name="price" value="{{old('price')}}">
                                                <span id="price_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('translate-admin/optionsAttributes.attribute')}}</label>
                                                <select name="attribute_id" id="attribute_id"
                                                        class="select form-control">
                                                    <optgroup label="{{__('translate-admin/optionsAttributes.choose_the_appropriate_feature')}}">
                                                        <option>{{__('translate-admin/optionsAttributes.choose_the_appropriate_feature')}}</option>
                                                        @isset($attributes)
                                                            @foreach($attributes as $attribute)
                                                                <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                                @endforeach
                                                            @endisset


                                                    </optgroup>
                                                </select>
                                                <span id="attribute_id_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <input type="hidden" name="action" id="action" value="Add">
                                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i
                                            class="ft-x"></i> {{__('translate-admin/optionsAttributes.retreat')}}
                                    </button>
                                    <button class="btn btn-primary" id="addOption"> {{__('translate-admin/optionsAttributes.save')}}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Form Add Brand -->



    <!-- // Basic form layout section end -->



    {{-- Confirmation Modal --}}
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">{{ __('translate-admin/optionsAttributes.confirm_delete')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="delete_modal_form">
                    @csrf
                    {{method_field('delete')}}

                    <div class="modal-body">
                        <input type="hidden" id="delete_language">
                        <h5>{{ __('translate-admin/optionsAttributes.alert_delete')}}</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">{{ __('translate-admin/optionsAttributes.cancel')}}</button>
                        <button type="submit" class="btn btn-danger" id="delete">{{ __('translate-admin/optionsAttributes.delete')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Confirmation Modal --}}


@endsection

@section('script')
    <script type="text/javascript">

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //Show Table

            var optionsTable = $('.option-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{route('index.option', $product->id)}}",
                    columns: [
                        {data: 'name', name: 'name'},
                        {data: 'price', name: 'price'},
                        {data: 'product_id', name: 'product_id'},
                        {data: 'attribute_id', name: 'attribute_id'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                @if(app()-> getLocale() == 'ar')
                language: {"url": "{{asset('assets/admin/js/dataTableArabic.json')}}"},
                @endif
                });







            //Show Form
            $('#addNewOptions').click(function () {
                $('#optionForm').trigger('reset');
                $('#option-modal').modal('show');

            });




            //Add Option
            $(document).on('click', '#addOption', function (e) {
                e.preventDefault();
                var formData = new FormData($('#optionForm')[0]);
                $('#name_error').text('');
                $('#price_error').text('');
                $('#attribute_id_error').text('');
                $.ajax({
                    type: 'post',
                    url: "{{ route('save.option') }}",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: 'json',

                    success: function (data) {
                        if (data.status == true) {
                            toastr.success(data.msg);
                            $('#optionForm').trigger('reset');
                            $('#option-modal').modal('hide');
                            optionsTable.draw();
                        } else {
                            toastr.error(data.msg);
                            $('#optionForm').trigger('reset');
                            $('#option-modal').modal('hide');
                            optionsTable.draw();
                        }

                    },

                    error: function (reject) {
                        console.log('Error: not added', reject);
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);


                        });

                    }

                });
            });



            //Delete

            $('body').on('click', '.deleteOption', function () {
                var id = $(this).data('id');
                $('#delete-modal').modal('show');

                $('#delete').click(function (e) {
                    e.preventDefault();
                    $.ajax({

                        url: "/ar/admin/product/attribute/option/delete-option/" + id,

                        success: function (data) {
                            console.log('success:', data);
                            if (data.status == true) {
                                toastr.warning(data.msg);
                                $('#delete-modal').modal('hide');
                                optionsTable.draw();
                            }

                        }

                    });
                });

                $('#cancel').click(function () {
                    $('#delete-modal').modal('hide');
                });
            });

        });
    </script>
@endsection
