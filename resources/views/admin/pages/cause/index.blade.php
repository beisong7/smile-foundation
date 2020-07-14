<?php
 $sidenav['cause'] = 'active';
 $title = "Cause";
 $newInstance = route('cause.new');
?>
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
                        <a href="{{ route('cause.index',['type'=>'active']) }}" class="btn btn-sm btn-outline-dark">Active</a>
                        <a href="{{ route('cause.index',['type'=>'inactive']) }}" class="btn btn-sm btn-outline-dark">Review</a>
                        <br>
                        <div class="table-responsive-sm mt-3">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($causes as $cause)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $cause->title }}</td>
                                        <td>
                                            <div class="" style="max-width: 100px">
                                                <img src="{{ $cause->image }}" alt="slider-image" style="width: 100%">
                                            </div>
                                        </td>
                                        <td>{{ $cause->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('cause.show', $cause->uuid) }}" class="btn btn-dark btn-sm">Manage</a>
                                            <a href="{{ route('cause.toggle', $cause->uuid) }}" class="btn btn-outline-danger btn-sm">{{ $cause->active?'Remove':'Activate' }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        {{ $causes->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

