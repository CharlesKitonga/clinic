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
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
                                    Make an Appointment
                                </button>
                                <a href="{{url('/leader')}}" class="btn btn-default btn-sm hidden-sm hidden-xs">meet the doctor</a>
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
    <section class="info-area style-two">
    <div class="about-bg-block ">
        <div class="container">
             <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="img-holder">
                        <img src="images/1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12 full-side">
                <div class="left-side-two">
                    <div class="full-content">
                        <div class="section-title">
                        <h2>Why Choose Pearl White Dental Care</h2>
                        <p>Lorem ipsum dolor sit ametas  consectetur adipisicing elita sed do eiusmod tempor incididunt <br> dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation aliqua enim ad minim <br> veniam quis nostrud exercitation ullamco.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Affordable Dental Care</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To listen to your concerns in a relaxed atmosphere at our dental practice and give you easily understandable explanation.</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To Offer a fair and transparent rates. No hidden extras! </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To Maintain a Great reputation. </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="left-side">
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To observe the latest cross infection prevention guidelines; Your safety is  our primary concern.</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To equip and maintain a State-of-the-art facility</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>To keep you informed on the latest technological advancements as regard dental treatment and oral health in general.</li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
    <!-- features-close -->
    <!-- before after gallery-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Before/After Gallery</h1>
                        <p>Pearl White Dental Care is a State of the art modern dental clinic, offering excellent dental services to all.
                            <br> Below are before and after dental pictures at Pearl White Dental Care.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mt40 text-center">
                        <a href="{{url('/gallery')}}" class="btn btn-primary btn-lg">view smile gallery</a>
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
                    @foreach($testimonials as $testimony)
                    <div class="item">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">“{{$testimony->textarea}}”</p>
                                    <div class="">
                                    <div class="testimonial-pic"> <div class="img-circle" style = "color: #128512;">{{$testimony->emoji}}</div></div>
                                        <div class="testimonial-meta">
                                            <span>{{$testimony->name}}</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    <div class="cta-btn"><!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal">
                            Book an Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta close -->
    <!-- testimonials-start -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Meet Our Partners</h1>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="testimonial-carousel">
                <div class="owl-carousel slider">
                    @foreach($partners as $partner)
                    <div class="item">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-8  col-xs-8">
                            <div class="testimonial-content">
                                <div class="">
                                <div class="testimonial-pic">
                                    <div class="img-circle" style = "color: #128512;">
                                        <img src="{{ asset('images/partners/'.$partner->photo) }}" alt="" class="img-responsive">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials-close  -->
@endsection


