@extends('layouts.superAdmin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> التجار</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('superAdmin.dashboard')}}">الرئيسية</a></li>
                                <li class="breadcrumb-item active"> التجار</li>
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
                                       id="addNewVendor"><i class="la la-cart-plus">اضافة تاجر جديد</i></a>
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

                                <div class="card-content collapse show" id="viewMainCategory">
                                    <div class="card-body card-dashboard">
                                        <table class="table vendors-table table-responsive-lg">
                                            <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>الدومين</th>
                                                <th>قاعدة البيانات</th>
                                                <th>الجوال</th>
                                                <th>الاشتراك</th>
                                                <th> الاجراءات</th>
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

    <!-- Begin Form Add Brand -->

    <div class="modal fade modal-open" id="vendor-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content width-700">
                <div class="modal-header">
                    <h4 class="modal-title form-section" id="modalheader">
                        <i class="ft-home"></i>اضافة تاجر
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" id="vendorForm" enctype="multipart/form-data">
                                @csrf

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> الاسم</label>
                                                <input type="text" id="name" class="form-control" placeholder=""
                                                       name="name">
                                                <span id="name_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> الدومين</label>
                                                <input type="text" id="domain" class="form-control" placeholder=""
                                                       name="domain">
                                                <span id="domain_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">قاعدة البيانات</label>
                                                <input type="text" id="database" class="form-control" placeholder=""
                                                       name="database">
                                                <span id="database_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">الايميل</label>
                                                <input type="email" id="email" class="form-control" placeholder=""
                                                       name="email">
                                                <span id="email_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> الجوال</label>
                                                <input type="text" id="mobile" class="form-control" placeholder=""
                                                       name="mobile">
                                                <span id="mobile_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> كلمة المرور</label>
                                                <input type="password" id="password" class="form-control" placeholder=""
                                                       name="password">
                                                <span id="password_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="form-actions">
                                    <input type="hidden" name="action" id="action" value="Add">
                                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i
                                            class="ft-x"></i> تراجع
                                    </button>
                                    <button class="btn btn-primary" id="addVendor">حفظ</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">تأكيد الحذف</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="delete_modal_form">
                    @csrf
                    {{method_field('delete')}}

                    <div class="modal-body">
                        <input type="hidden" id="delete_language">
                        <h5>هل انت متأكد من حذف هذا التاجر !!</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">الغاء</button>
                        <button type="submit" class="btn btn-danger" id="delete">حذف</button>
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
            var vendorsTable = $('.vendors-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route("index.vendors")}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'domain', name: 'domain'},
                    {data: 'database', name: 'database'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'subscription', name: 'subscription'},

                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            //Show Form
            $('#addNewVendor').click(function () {
                $('#vendorForm').trigger('reset');
                $('#vendor-modal').modal('show');

            });




            //Add Brand
            $(document).on('click', '#addVendor', function (e) {
                e.preventDefault();
                var formData = new FormData($('#vendorForm')[0]);
                $('#name_error').text('');
                $('#domain_error').text('');
                $('#database_error').text('');
                $('#email_error').text('');
                $('#mobile_error').text('');
                $('#password_error').text('');

                $.ajax({
                    type: 'post',
                    url: "{{ route('save.vendor') }}",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: 'json',

                    success: function (data) {
                        if (data.status == true) {
                            toastr.success(data.msg);
                            $('#vendorForm').trigger('reset');
                            $('#vendor-modal').modal('hide');
                            vendorsTable.draw();
                        } else {
                            toastr.error('لم تتم اضافة البانار');
                            $('#vendorForm').trigger('reset');
                            $('#vendor-modal').modal('hide');
                            vendorsTable.draw();
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

            $('body').on('click', '.deleteVendor', function () {
                var id = $(this).data('id');
                $('#delete-modal').modal('show');

                $('#delete').click(function (e) {
                    e.preventDefault();
                    $.ajax({

                        url: "delete-vendor/" + id,

                        success: function (data) {
                            console.log('success:', data);
                            if (data.status == true) {
                                $('#delete-modal').modal('hide');
                                toastr.warning(data.msg);
                                vendorsTable.draw();
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
