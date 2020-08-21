@extends('layouts.frontLayout.front_design')
  @section('content')

    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Contact</h1>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h1>Contact Info</h1>
                    <p>Drop us a line and we’ll get back to you as soon as. Pearl White Dental Care Cares for you.</p>
                    <div class="contact-info">
                        <h2>Clinic Address</h2>
                        <ul>
                            <li> <i class="fa fa-map-marker"></i>Temple Rd, Kericho Dental Clinic</li>
                            <li><i class="fa fa-phone"></i>(+254)700-935-220</li>
                            <li><i class="fa fa-envelope-open"></i>info@pwdentalcare.co.ke</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    <div class="mb30">
                        <h1>Get In Touch</h1>
                        <p>Submit your contact details and we’ll be in touch shortly. </p>
                        <div class="row">
                            <form method = "POST" action ="{{url('/contact-us')}}">
                            @csrf
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="name"></label>
                                        <input id="name" type="text" name ="name" placeholder="Name" class="form-control" required = "">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="email"></label>
                                        <input id="email" type="text" name ="email" placeholder="Email" class="form-control" required = "">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="subject"></label>
                                        <input id="subject" type="text" name ="subject" placeholder="Subject" class="form-control" required = "">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder="Messages"required = ""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-primary">send us message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="contact-map">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="mb30">Our Location</h1>
                    <div id="map">
	                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.735382946714!2d35.28108875102786!3d-0.3694341354177296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a575e54b8e2dd%3A0x23de3818349e6211!2sPearl%20White%20Dental%20Care!5e0!3m2!1sen!2ske!4v1579881012854!5m2!1sen!2ske" width="1125" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- treatment close -->
@endsection
