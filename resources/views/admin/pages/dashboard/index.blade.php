<?php $sidenav['dashboard'] = 'active'; ?>
@extends('admin.layouts.app')


@section('content')
    <div class="pl-4 pr-4">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $causes }}</h5>
                                <h4>Cause</h4>
                            </div>
                            <div class="col-4">
                                <p class="" style="font-size: 40px"><i class="fa fa-cross"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $sliders }}</h5>
                                <h4>Sliders</h4>
                            </div>
                            <div class="col-4">
                                <p class="" style="font-size: 40px"><i class="fa fa-layer-group"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $volunteers }}</h5>
                                <h4>Volunteers</h4>
                            </div>
                            <div class="col-4">
                                <p class="" style="font-size: 40px"><i class="fa fa-users"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $events }}</h5>
                                <h4>Events</h4>
                            </div>
                            <div class="col-4">
                                <p class="" style="font-size: 40px"><i class="fa fa-calendar"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $sponsors }}</h5>
                                <h4>Sponsors</h4>
                            </div>
                            <div class="col-4">
                                <p class="" style="font-size: 40px"><i class="fa fa-money-check-alt"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
