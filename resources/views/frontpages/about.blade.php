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
    <!-- treatment start -->
    <div class="space-medium">
        <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img src="{{ asset('images/homes/'.$abouts->photo) }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-section">
                            <h1>{{$abouts->heading}}</h1>
                            <p>{!! html_entity_decode(nl2br(e($abouts->description))) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- features-start -->
    <div class="about-bg-block ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="feature-block">
                        <h1 class="feature-title mb60">Why Choose Dental Care</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">24/7 Customer Support</h3>
                                    <p class="feature-text">Pearl White Dental Care is a State of the art modern dental clinic, offering excellent services </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">Affordable Dental Care</h3>
                                    <p class="feature-text">Pearl White Dental Care is a State of the art modern dental clinic, offering excellent services.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">Talented Doctors Team</h3>
                                    <p class="feature-text">Pearl White Dental Care is a State of the art modern dental clinic, offering excellent services</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">High Quality Equipment</h3>
                                    <p class="feature-text">Pearl White Dental Care is a State of the art modern dental clinic, offering excellent services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-close -->
    <!-- team-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Dental Team</h1>
                        <p> <strong> Meet Our Dedicated Team in Pearl White Dental Care</strong></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- member--start -->
                @foreach($teams as $team )
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="team-block">
                      <img src="{{ asset('images/teams/'.$team->photo) }}" alt="" class="img-circle">

                        <div class="team-content mt20">
                            <h3 class="team-title">{{$team->name}}</h3>
                            <span class="team-meta">{{$team->title}}</span>
                        </div>
                    </div>
                </div>
                <!-- member--close -->
                @endforeach
            </div>
        </div>
    </div>
@endsection
