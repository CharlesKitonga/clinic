@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">About Us</h1>
                        <p><font face="Times new roman">
                            <a href="{{url('/')}}" style="font-size: 18px; color:#000; ">State of the art modern dental clinic offering excellent services.</a>
                        </font></p>
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
                            Make an Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/teams/'.$leader->photo) }}" alt="" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-section">
                        <h1>{{$leader->heading}}</h1>
                        <p>{!! html_entity_decode(nl2br(e($leader->description))) !!}</p>
                        <a href="{{url('about-us')}}" class="btn btn-primary btn-sm">know about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
