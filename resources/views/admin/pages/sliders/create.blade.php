<?php
$sidenav['slider'] = 'active';
$title = "Slider / New";
?>

@section('other_css')
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
                        <form method="POST" action="{{ route('slider.store') }}" aria-label="{{ __('new-slider') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">

                                <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>

                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="photo">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Title Text</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="title" placeholder="Slider Title Text (keep it short)" value="{{ old('title') }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Main Text</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="main_title" required placeholder="Main Slider Text (keep it short)" value="{{ old('main_title') }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Subtitle Text</label>

                                <div class="col-md-10 ">
                                    <input id="" type="text" class="form-control" name="sub_title" placeholder="Subtitle Slider Text (keep it short)" value="{{ old('sub_title') }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col">
                                            <div class="col-md-12">
                                                <label for="name" class="col-form-label text-md-right">Show Donate Button?</label>
                                                <select name="donate" id="" class="form-control">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="col-md-12">
                                                <label for="name" class="col-form-label text-md-right">Show Options?</label>
                                                <select name="menu" id="" class="form-control">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-outline-dark btn-block">
                                        Add Slider
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

@section('other_js')

@endsection