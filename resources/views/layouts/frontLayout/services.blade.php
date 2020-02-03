<div class="space-medium">
    <section class="service-one">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Welcome to Pearl White Dental Care</h1>
                        <p>Proin rutrum metus felis quis tincidunt donec orci act risus semper vita simple dummy
                            <br> mols vel nisl nec nunc sagittis laoreet.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <!-- page-header-close -->
            <div class="space-medium">
                <section class="service-one">
                    <div class="container">
                        <div class="column-5__row">
                            @foreach($services as $service)
                            <div class="column-5__col">
                                <div class="service-one__single">
                                    <div class="service-one__icon" ><img class="img-fluid" src="{{ asset('images/services/'.$service->photo) }}"></div><!-- /.service-one__icon -->
                                    <h3 class="service-one__title"><a href="#">{{$service->service}}</a></h3><!-- /.service-one__title -->
                                    &nbsp&nbsp&nbsp
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviceModalScrollable{{$service->id}}">
                                        Read More
                                    </button>
                                </div><!-- /.service-one__single -->
                            </div><!-- /.column-5__col -->

                            <!-- Modal -->
                            <div class="modal fade" id="serviceModalScrollable{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="serviceModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="serviceModalScrollableTitle text-blue">{{$service->service}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{$service->description}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- /.column-5__row -->
                    </div><!-- /.container -->
                </section>
            </div>
                <div class="text-center">
                    <a class="service-one__link" href="#">Catering to all of your dental needs and desires</a>
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section>
</div>
