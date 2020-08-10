<?php
$sidenav['cause'] = 'active';
$title = "Cause / New";
?>

@section('more_css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/dropzone/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/dropzone/dropzone.css') }}">
@endsection

@extends('admin.layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    @include('admin.layouts.partials.breadcrumb')
    @include('layouts.notify')

    <!-- Content Row -->
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <h5>Create New Slider</h5>
                        <hr>
                        <form method="POST" action="{{ route('cause.store') }}" aria-label="{{ __('new-slider') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group row">

                                <label for="name" class="col-md-2 col-form-label text-md-right">Images * (1 allowed)</label>

                                <div class="col-md-10">
                                    <div id="dropzone" class="dropzone" ></div>
                                    <p class="dz_respo text-danger mt-2 mb-0"></p>
                                </div>

                            </div>
                            @if(!empty(old('uuid')))
                                <div class="form-group row">

                                    <label for="name" class="col-md-2 col-form-label text-md-right">Uploads </label>

                                    <div class="col-md-10">
                                        <div class="row">
                                            @foreach($person->getUpload(old('uuid')) as $image)
                                                <div class="col-sm-6 col-md-3">
                                                    <img src="{{ $image->photo() }}" alt="" style="width: 100%">
                                                    <a href="{{ route("image-delete", $image->uuid) }}" class=" btn btn-block btn-outline-danger ">Remove <i class="fa fa-trash"></i></a>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                            @else
                                <input type="hidden" name="uuid" value="{{ !empty($uuid)?$uuid:old('uuid') }}">

                            @endif


                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Title *</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" required name="title" placeholder="Cause Title (recomemded)" value="{{ old('title') }}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Extra Title</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control " name="small_title" placeholder="Extra Cause Title" value="{{ old('small_title') }}" autocomplete="off" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Goal *</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" required name="goal" placeholder="Cause Goal (recomemded)" value="{{ old('goal') }}" autocomplete="off" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Tags</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="tags" placeholder="Cause Tags, use example: #child #hunger #school..." value="{{ old('tags') }}" autocomplete="off" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Location</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="location" placeholder="Location Name" value="{{ old('location') }}" autocomplete="off" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Featured</label>

                                <div class="col-md-10 ">
                                    <select name="featured" id="" class="form-control">
                                        <option value="no" {{ old('featured')==='no'?'selected':'' }}>No</option>
                                        <option value="yes" {{ old('featured')==='yes'?'selected':'' }}>Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Youtube</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="youtube" placeholder="Youtube Video for Cause" value="{{ old('youtube') }}" autocomplete="off" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Introduction *</label>

                                <div class="col-md-10 ">
                                    <textarea id="" type="text" class="form-control" name="intro" required placeholder="Introduction (keep it short)">{{ old('intro') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Full Details *</label>

                                <div class="col-md-10">
                                    <textarea id="" type="text" rows="20" class="form-control myfield" name="info" placeholder="Extra Slider Information">{{ old('info') }}</textarea>
                                </div>
                            </div>


                            <hr>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-outline-primary btn-block">
                                        Add Cause
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection

@section('more_js')
    <script src="{{ asset('admin/plugins/dropzone/dropzone.js') }}"></script>

    <script type="text/javascript">

        let minImageWidth = 500;
        let minImageHeight = 200;

        let md = new Dropzone("#dropzone", {
            url: '{{ route('uploadImage', !empty($uuid)?$uuid:old('unid')) }}',
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 4,
            renameFile: function(file) {
                let dt = new Date();
                let time = dt.getTime();
                return time+file.name;
            },
            removedfile: function(file) {
                let name = file.upload.filename;
                console.log(file);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route("deleteImage", !empty($uuid)?$uuid:old('unid')) }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                let fileRef;
                return (fileRef = file.previewElement) != null ? fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            addRemoveLinks: true,
            init: function () {
                this.on("thumbnail", function (file) {
                    if (file.width < minImageWidth || file.height < minImageHeight) {
                        file.rejectDimensions()
                    }
                    else {
                        file.acceptDimensions();
                    }
                });
            },
            accept: function (file, done) {
                file.acceptDimensions = done;
                file.rejectDimensions = function() {
                    done("Image width or height too small... min = 500 x 200.");
                    toastr(`The file '${file.name}' either has width or height too small. minimum 500 x 200 required.`);
                    setTimeout(() => {
                        file.previewElement.remove();
                    }, 5500);

                };

            },
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                console.log(response);
                return false;
            }


        });

        function toastr(msg) {
            let dzr = $('.dz_respo');
            dzr.show();
            dzr.text(msg);
            setTimeout(() => {
                dzr.text("")
                dzr.hide()
            }, 5500);

        }

        function keeper() {
            Dropzone.options.dropzone =
                {
                    maxFilesize: 10,
                    renameFile: function(file) {
                        let dt = new Date();
                        let time = dt.getTime();
                        return time+file.name;
                    },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    addRemoveLinks: true,
                    timeout: 50000,
                    maxFiles: 4,
                    removedfile: function(file) {
                        let name = file.upload.unid;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                            type: 'POST',
                            url: '{{ route("deleteImage", !empty($uuid)?$uuid:old('unid')) }}',
                            data: {filename: name},
                            success: function (data){
                                console.log("File has been successfully removed!!");
                            },
                            error: function(e) {
                                console.log(e);
                            }});
                        let fileRef;
                        return (fileRef = file.previewElement) != null ? fileRef.parentNode.removeChild(file.previewElement) : void 0;
                    }
                };
        }

    </script>

    @include('admin.layouts.partials.tinymyce')

@endsection