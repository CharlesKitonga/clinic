  @extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- slider-start -->
    <div class="slider">
        <div class="owl-carousel slider">
            @foreach($sliders as $slider)
            <div class="item">
                <div class="slider-img"><img class="img-fluid" src="{{ asset('images/sliders/'.$slider->photo) }}"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">{{$slider->heading}}</h1>
                                <p class="slider-text hidden-xs">{{$slider->description}} </p>
                                <a href="#" class="btn btn-primary btn-sm hidden-sm hidden-xs">make an appointment</a>
                                <a href="#" class="btn btn-default btn-sm hidden-sm hidden-xs">meet the doctor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- slider-close -->
    <!-- about start -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/homes/'.$homes->photo) }}" alt="" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-section">
                        <h1>{{$homes->heading}}</h1>
                        <p>{{$homes->description}}.</p>
                        <div class="about-list">
                            <ul class=" angle angle-right mb30">
                                <li>{{$homes->points}}</li>
                            </ul>
                        </div>
                        <a href="{{url('about-us')}}" class="btn btn-primary btn-sm">know about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about close -->
    <!-- treatment start -->
    @include('layouts.frontLayout.services')
    <!-- treatment close -->
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
    <!-- before after gallery-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Before/After Gallery</h1>
                        <p>Proin rutrum metus felis, quis tincidunt donec orci act risus semper vita simple dummy
                            <br> mols vel nisl nec nunc sagittis laoreet.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="ba-gallery">
                        <img src="{{asset('/images/gallery-img-1.jpg')}}" alt="" class="img-responsive">
                        <div class="ba-left-btn"> <span class="left-btn">before</span></div>
                        <div class="ba-right-btn"><span class="right-btn">after</span></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="ba-gallery">
                        <img src="{{asset('/images/gallery-img-2.jpg')}}" alt="" class="img-responsive">
                        <div class="ba-left-btn"> <span class="left-btn">before</span></div>
                        <div class="ba-right-btn"><span class="right-btn">after</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mt40 text-center">
                        <a href="#" class="btn btn-primary btn-lg">view smile gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- before after gallery-start -->
    <!-- testimonials-start -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>What Our Patient Says</h1>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="testimonial-carousel">
                <div class="owl-carousel slider">
                    <div class="item">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">“Consectetur et interdum vulputate in act etios vestibulum ullamcorper sapien eget sodales feugiat etiam justm molestie viverra id a massa pellentesque non tellus urna.”</p>
                                    <div class="">
                                        <div class="testimonial-pic"> <img src="{{asset('/images/testi-pic-1.jpg')}}" alt="" class="img-circle"></div>
                                        <div class="testimonial-meta">
                                            <span>-Jeniol Marcus</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut nisi nec risus bibendum ullamcorper et eu orci. Vestibulum et pulvinar eu sem luctus fermentum diam.”</p>
                                    <div class="">
                                        <div class="testimonial-pic"><img src="{{asset('/images/testi-pic-2.jpg')}}" alt="" class="img-circle"></div>
                                        <div class="testimonial-meta">
                                            <span>-Ryder Lothian</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">“ Vestibulum dictum ullamcorper leo, ac dictum purus aliquam ac. Cras fringilla tortor ut nulla mollis aliquet urna hendrerit. Sed vitae malesuada nisi at aliquam enim. ”</p>
                                    <div class="">
                                        <div class="testimonial-pic"><img src="{{asset('/images/testi-pic-3.jpg')}}" alt="" class="img-circle"></div>
                                        <div class="testimonial-meta">
                                            <span>-Brock Lambrick</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials-close  -->
    <!-- cta start -->
    <div class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h1 class="cta-title">Achieve Your Desired Perfect Smile!</h1>
                    <p>We offer a wide range of procedures to help you get the perfect smile.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cta-btn"><a href="#" class="btn btn-primary btn-lg"> book an appointment</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta close -->
@endsection


