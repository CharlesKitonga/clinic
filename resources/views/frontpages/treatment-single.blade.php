@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Treatment Single</h1>
                        <p>Etiarem ipsum dolor sit ce eu lacus impsus erat vitae.</p>
                        <a href="#" class="btn btn-primary">make an appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="mb30"><img src="images/root-canal.jpg" alt="" class="img-responsive"></div>
                    <h1>Root Canal</h1>
                    <p class="lead"> Root canal therapy is a sequence of treatment for the infected pulp of a tooth which results in the elimination of infection and the protection of the decontaminated tooth from future microbial invasion</p>
                    <blockquote>
                        <p>"Root canal therapy can preserve your damaged tooth, preventing the need for extraction and costly future restorative procedures to rebuild your smile."</p>
                    </blockquote>
                    <p> Root canal therapy is a sequence of treatment for the infected pulp of a tooth which results in the elimination of infection and the protection of the decontaminated tooth from future microbial invasion Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et tincidunt ante. Ut vitae enim non ligula pharetra eleifend.Phasellus lobortis sem nunc, ut volutpat diam suscipit vel.</p>
                    <h2 class="mb30">What to Expect During a ROOT CANAL</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-block">
                                <h3>X-ray</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. nt ante vitae enim non ligula pharetra eleifend. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-block">
                                <h3>Anesthesia</h3>
                                <p>Donec ut mi tortor. Phasellus lobortis sem nunc, ut volutpat diam suscip ilacerat id lectus nerdiet. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-block">
                                <h3>Pulpectomy</h3>
                                <p>Phasellus consectetur enim id sapien blandit, vel tincidunt odio aliquam ac venenatistempus risus. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-block">
                                <h3>Filling</h3>
                                <p>Nunc sodales risus magna. Nulla quam risus, lobortis eget rund condimentum quam in suscipiinterdum in. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- widget-categories-start -->
                    <div class="sidenav">
                        <ul>
                            <li class="active"> <a href="#">Root Canal</a></li>
                            <li> <a href="#">Sleep Apnea</a></li>
                            <li><a href="#">Cosmetic Dentistry</a></li>
                            <li><a href="#">Teeth Whitening</a></li>
                            <li> <a href="#">Gum Treatment</a></li>
                            <li><a href="#">Restorations</a></li>

                        </ul>
                    </div>
                    <!-- widget-categories-close -->
                    <div class="widget mb30">
                        <h2 class="text-center mb20">Request Consultation</h2>
                        <form>
                            <div class="form-group">
                                <label class="control-label sr-only required" for="name"></label>
                                <input id="name" type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only required" for="email"></label>
                                <input id="email" type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only required" for="phone"></label>
                                <input id="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only required" for="select Date"></label>
                                <input type="text" id="datepicker" name="datepicker" placeholder="select Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only required" for="Person"> </label>
                                <select id="Person" name="Person Quantity" placeholder="Person Quantity" type="text" class="form-control">
                                    <option value="">Treatments</option>
                                    <option value="1">Root Canal</option>
                                    <option value="2">Sleep Apnea</option>
                                    <option value="3">Teeth Whitening</option>
                                    <option value="4">Restorations</option>
                                </select>
                            </div>
                            <button id="" name="singlebutton" class="btn btn-primary btn-block">make an appointment</button>
                        </form>
                    </div>
                    <div class="widget-cta">
                        <div class="widget-cta-icon ">
                            <i class="icon-007-appointment"> </i> </div>
                        <div class="widget-cta-block">
                            <h2 class="text-white mb30">Clinic Sechdule</h2>
                            <div class="widget-cta-content">
                                <h4 class="widget-cta-title">Monday to Friday</h4>
                                <span class="widget-cta-text">8.00 am - 5.00 pm</span>
                            </div>
                            <div class="widget-cta-content">
                                <h4 class="widget-cta-title">Saturday</h4>
                                <span class="widget-cta-text">10.00 am - 5.00 pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
