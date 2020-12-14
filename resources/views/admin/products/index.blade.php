@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">المنتجات</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('translate-admin/category.main')}} </a></li>
                                <li class="breadcrumb-item active"> المنتجات</li>
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
                                        <table class="table table-responsive-lg product-table">
                                            <thead>
                                            <tr>
                                                <th width="10"> اسم المنتج</th>
                                                <th width="10"> الاسم بالرابط</th>
                                                <th width="10">الحالة</th>
                                                <th width="10">السعر</th>
                                                <th width="200">العمليات</th>
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


    <!-- End Form Add Main Category -->



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

            $('input:radio[name="type"]').change(
                function () {
                    if (this.checked && this.value == 2){
                        $('#categories_list').removeClass('hidden');
                    }else{
                        $('#categories_list').addClass('hidden');
                    }
                });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //Show Table
            var productTable = $('.product-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route("index.product")}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'slug', name: 'slug'},
                    {data: 'is_active', name: 'is_active'},
                    {data: 'price', name: 'price'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            //Delete

            $('body').on('click', '.deleteProduct', function () {
                var id = $(this).data('id');
                $('#delete-modal').modal('show');

                $('#delete').click(function (e) {
                    e.preventDefault();
                    $.ajax({

                        url: "delete-product/" + id,

                        success: function (data) {
                            console.log('success:', data);
                            if (data.status == true) {
                                $('#delete-modal').modal('hide');
                                $('#success_msg_delete').show();
                                productTable.draw();
                            } else {
                                $('#delete-modal').modal('hide');
                                $('#error_msg_delete').show();
                                productTable.draw();
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
