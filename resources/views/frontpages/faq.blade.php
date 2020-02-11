@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">FAQ</h1>
                        <p>State of the art modern dental clinic offering excellent services.</p>
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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title"><!-- section title start-->
                  <h1>Questions about Dental Treatment </h1>
                  <p>Pearl White Dental Care is a State of the art modern dental clinic, offering excellent dental care services.</p>
                  <a href="{{('contact-us')}}" class="btn btn-default btn-sm">contact us</a>
                </div><!-- /.section title start-->
              </div>
            </div>
            <div class="row">
                @foreach($questions as $quiz)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="mb30">
                        <h3>{{$quiz->topic}}</h3>
                        <p>{{$quiz->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- treatment close -->
@endsection
