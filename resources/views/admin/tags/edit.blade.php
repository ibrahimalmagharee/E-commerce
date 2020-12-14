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
                                        href="{{route('admin.dashboard')}}">{{__('translate-admin/tag.main')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('index.tag')}}">{{__('translate-admin/tag.tags')}}</a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('translate-admin/tag.edit')}} -
                                    {{$tag->name}}</li>
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
                                        <strong>{{__('translate-admin/tag.editTag')}}-
                                            {{$tag->name}} </strong></h4>
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


                                <!-- Begin Form Edit Brand -->
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form class="form" id="editTagForm" method="post" action="{{route('update.tag', $tag->id)}}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$tag->id}}">

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{__('translate-admin/tag.name')}}</label>
                                                            <input type="text" id="name" class="form-control"
                                                                   placeholder=""
                                                                   name="name" value="{{$tag->name}}">
                                                            @error('name')
                                                            <span id="name_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{__('translate-admin/tag.slug')}} </label>
                                                            <input type="text" id="slug" class="form-control" placeholder=""
                                                                   name="slug" value="{{$tag->slug}}">
                                                            @error('slug')
                                                            <span id="slug_error" class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">{{__('translate-admin/tag.status')}}</label>
                                                            <input type="checkbox" name="is_active" value="1"
                                                                   id="switcheryColor4"
                                                                   class="switchery active" data-color="success"
                                                                   @if($tag->is_active == 1) checked @endif/>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <input type="hidden" name="action" id="action" value="Update">
                                                <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                    <i
                                                        class="ft-x"></i> {{__('translate-admin/tag.retreat')}}
                                                </button>
                                                <button class="btn btn-primary" id="updateTag"> {{__('translate-admin/tag.update')}}</button>
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


