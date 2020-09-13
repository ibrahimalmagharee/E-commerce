@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{__('translate-admin/category.main_category')}} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('translate-admin/category.main_category')}} </a></li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/category.main_category')}}</li>
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
                                        <label for="type" id="chooseTypeCategory" class="card-title"><strong>{{__('translate-admin/category.choose_type_category')}}</strong> </label>
                                    <a class="btn btn-outline-success float-left" href="javascript:void(0)"
                                       id="addNewMainCategory"> {{__('translate-admin/category.add_mainCategory')}}</a>

                                    <a class="btn btn-outline-success float-left" href="javascript:void(0)"
                                       id="addNewSubCategory"> {{__('translate-admin/category.add_subCategory')}}</a>


                                    <div class="card-body" style="margin-top: 8em">
                                            <label><strong>{{__('translate-admin/category.show_category')}} </strong></label>
                                            <a href="{{route('index.subCategories')}}" class="btn btn-primary" id="viewCategory">  {{__('translate-admin/category.subCategory')}}</a>
                                    </div>


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
                                            id="success_msg_add" style="display: none">{{ __('translate-admin/category.success-add')}}
                                    </button>
                                </div>

                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="error_msg_add" style="display: none">{{ __('translate-admin/category.exception-add')}}
                                    </button>
                                </div>


                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                                            id="success_msg_delete" style="display: none">{{ __('translate-admin/category.success-delete')}}
                                    </button>
                                </div>

                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="error_msg_delete" style="display: none">{{ __('translate-admin/category.exception-delete')}}
                                    </button>
                                </div>

                                <div class="card-content collapse show" id="viewMainCategory">
                                    <div class="card-body card-dashboard">
                                        <table class="table mainCategory-table">
                                            <thead>
                                            <tr>
                                                <th> {{ __('translate-admin/category.name')}}</th>
                                                <th>{{ __('translate-admin/category.slug')}}</th>
                                                <th>{{ __('translate-admin/category.status')}}</th>
                                                <th>{{ __('translate-admin/category.photo')}}</th>
                                                <th>{{ __('translate-admin/category.process')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
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

    <!-- Begin Form Add Main Category -->

    <div class="modal fade modal-open" id="mainCategory-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title form-section" id="modalheader">
                        <i class="ft-home"></i> {{ __('translate-admin/category.data_mainCategory')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" id="mainCategoryForm" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label> {{ __('translate-admin/category.photo')}} </label>
                                    <label id="projectinput7" class="file center-block">
                                        <input type="file" id="file" name="photo">
                                        <span class="file-custom"></span>
                                    </label>
                                    <span id="photo_error" class="text-danger"> </span>
                                </div>

                                <input type="hidden" name="type" id="type" value="main">

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> {{ __('translate-admin/category.name')}} </label>
                                                <input type="text" id="name" class="form-control" placeholder=""
                                                       name="name">
                                                <span id="name_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> {{ __('translate-admin/category.slug')}} </label>
                                                <input type="text" id="slug" class="form-control" placeholder=""
                                                       name="slug">
                                                <span id="slug_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <label for="switcheryColor4" class="card-title ml-1">{{ __('translate-admin/category.status')}}</label>
                                                <input type="checkbox" name="is_active" value="1" id="switcheryColor4"
                                                       class="switchery active" data-color="success" checked/>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div class="form-actions">
                                    <input type="hidden" name="action" id="action" value="Add">
                                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i
                                            class="ft-x"></i> {{ __('translate-admin/category.retreat')}}
                                    </button>
                                    <button class="btn btn-primary" id="addMainCategory"> {{ __('translate-admin/category.save')}}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Form Add Main Category -->

    <!-- Begin Form Add Sub Category -->

    <div class="modal fade modal-open" id="subCategory-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalheader">
                        <i class="ft-home"></i> {{ __('translate-admin/category.data_subCategory')}}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" id="subCategoryForm" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label> {{ __('translate-admin/category.photo')}} </label>
                                    <label id="projectinput7" class="file center-block">
                                        <input type="file" id="file" name="photo">
                                        <span class="file-custom"></span>
                                    </label>
                                    <span id="subphoto_error" class="text-danger"> </span>
                                </div>

                                <input type="hidden" name="type" id="type" value="sub">

                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput2"> {{ __('translate-admin/category.choose category')}} </label>
                                                <select name="parent_id" id="parent_id" class="select2 form-control width-200">
                                                    <optgroup label="{{ __('translate-admin/category.choose_main_category')}}">
                                                        @if($main_categories && $main_categories -> count() > 0)
                                                            @foreach($main_categories as $main_category)
                                                                <option value="{{$main_category->id}}">{{$main_category->name}}</option>
                                                                @endforeach
                                                            @endif

                                                    </optgroup>
                                                </select>
                                                <span id="parent_id_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">{{ __('translate-admin/category.name')}} </label>
                                                <input type="text" id="name" class="form-control" placeholder=""
                                                       name="name">
                                                <span id="subname_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> {{ __('translate-admin/category.slug')}} </label>
                                                <input type="text" id="slug" class="form-control" placeholder=""
                                                       name="slug">
                                                <span id="subslug_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <label for="switcheryColor4" class="card-title ml-1">{{ __('translate-admin/category.status')}}</label>
                                                <input type="checkbox" name="is_active" value="1" id="switcheryColor4"
                                                       class="switchery active" data-color="success" checked/>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div class="form-actions">
                                    <input type="hidden" name="action" id="action" value="Add">
                                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i
                                            class="ft-x"></i> {{ __('translate-admin/category.retreat')}}
                                    </button>
                                    <button class="btn btn-primary" id="addSubCategory"> {{ __('translate-admin/category.save')}}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Form Add Sub Category -->

    <!-- // Basic form layout section end -->



    {{-- Confirmation Modal --}}
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">{{ __('translate-admin/category.confirm-delete')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="delete_modal_form">
                    @csrf
                    {{method_field('delete')}}

                    <div class="modal-body">
                        <input type="hidden" id="delete_language">
                        <h5>{{ __('translate-admin/category.alert-delete')}}</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">{{ __('translate-admin/category.cancel')}}</button>
                        <button type="submit" class="btn btn-danger" id="delete">{{ __('translate-admin/category.delete')}}</button>
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
            var mainCategoryTable = $('.mainCategory-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route("index.mainCategories")}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'slug', name: 'slug'},
                    {data: 'is_active', name: 'is_active'},
                    {data: 'photo', name: 'photo'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            //Show Form
            $('#addNewMainCategory').click(function () {
                $('#mainCategoryForm').trigger('reset');
                $('#mainCategory-modal').modal('show');

            });

            $('#addNewSubCategory').click(function () {
                $('#subCategoryForm').trigger('reset');
                $('#subCategory-modal').modal('show');

            });

            //Add Or Update
            $(document).on('click', '#addMainCategory', function (e) {
                e.preventDefault();
                var formData = new FormData($('#mainCategoryForm')[0]);
                $('#photo_error').text('');
                $('#name_error').text('');
                $('#slug_error').text('');
                $.ajax({
                    type: 'post',
                    url: "{{ route('save.category') }}",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: 'json',

                    success: function (data) {
                        if (data.status == true) {
                            $('#success_msg_add').show();
                            $('#mainCategoryForm').trigger('reset');
                            $('#mainCategory-modal').modal('hide');
                            mainCategoryTable.draw();
                        } else {
                            $('#error_msg_add').show();
                            $('#mainCategoryForm').trigger('reset');
                            $('#mainCategory-modal').modal('hide');
                            mainCategoryTable.draw();
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

            $(document).on('click', '#addSubCategory', function (e) {
                e.preventDefault();
                var formData = new FormData($('#subCategoryForm')[0]);
                $('#subphoto_error').text('');
                $('#subname_error').text('');
                $('#subparent_id_error').text('');
                $('#subslug_error').text('');
                $.ajax({
                    type: 'post',
                    url: "{{ route('save.category') }}",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: 'json',

                    success: function (data) {
                        if (data.status == true) {
                            $('#success_msg_add').show();
                            $('#subCategoryForm').trigger('reset');
                            $('#subCategory-modal').modal('hide');
                            mainCategoryTable.draw();
                        } else {
                            $('#error_msg_add').show();
                            $('#subCategoryForm').trigger('reset');
                            $('#subCategory-modal').modal('hide');
                            mainCategoryTable.draw();
                        }

                    },

                    error: function (reject) {
                        console.log('Error: not added', reject);
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#sub" + key + "_error").text(val[0]);


                        });

                    }

                });
            });

            //Delete

            $('body').on('click', '.deleteMain_categories', function () {
                var id = $(this).data('id');
                $('#delete-modal').modal('show');

                $('#delete').click(function (e) {
                    e.preventDefault();
                    $.ajax({

                        url: "delete/" + id,

                        success: function (data) {
                            console.log('success:', data);
                            if (data.status == true) {
                                $('#delete-modal').modal('hide');
                                $('#success_msg_delete').show();
                                mainCategoryTable.draw();
                            } else {
                                $('#delete-modal').modal('hide');
                                $('#error_msg_delete').show();
                                mainCategoryTable.draw();
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
