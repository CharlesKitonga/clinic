@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">About Us</h1>
                        <p>Etiarem ipsum dolor sit ce eu lacus impsus erat vitae.</p>
                        <a href="#" class="btn btn-primary">make an appointment</a>
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
                            <p>{{$abouts->description}}</p>
                            <div class="about-list">
                                <ul class=" angle angle-right mb30">
                                    <li>{{$abouts->body}}</li>
                                </ul>
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
                        <h1 class="feature-title mb60">Why Choose Pearl White Dental Care</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">24/7 Customer Support</h3>
                                    <p class="feature-text">Proin rutrum metus felis sam act tincidunt risus sempers.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">Affordable Dental Care</h3>
                                    <p class="feature-text">Curabitur hendrerit fringilla enim aliqua fringilla suscipit.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">Talented Doctors Team</h3>
                                    <p class="feature-text">Proin rutrum metus felis sam act tincidunt risus sempers.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-content">
                                    <h3 class="feature-title">High Quality Equipment</h3>
                                    <p class="feature-text">Hendrerit fringilla enim accumsan turpis aliquam orci.</p>
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
