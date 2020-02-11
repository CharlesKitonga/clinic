@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Before/After Gallery</h1>
                        <p>State of the art modern dental clinic offering excellent services.</p>
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
                @foreach($galleries as $gallery)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="ba-gallery">
                        <img src="{{ asset('images/gallery/'.$gallery->photo) }}" alt="" class="img-responsive">
                        <div class="ba-left-btn"> <span class="left-btn">before</span></div>
                        <div class="ba-right-btn"><span class="right-btn">after</span></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- treatment close -->
@endsection
