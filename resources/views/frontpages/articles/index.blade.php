@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Blog Default</h1>
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
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        @foreach($articles as $getArticle)
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="post-holder">
                                <!-- post holder -->
                                <div class="post-img">
                                    <!-- post img -->
                                    <a href="{{$getArticle->path()}}" class="imghover"><img src="images/post-img-1.jpg" alt="" class="img-responsive"></a>
                                    <div class="post-sticky"></div>
                                </div>
                                <!-- /.post img -->
                                <div class="post-content">
                                    <!-- post content -->
                                    <div class="post-header">
                                        <!-- post header -->
                                        <h1 class="post-title"><a href="{{$getArticle->path()}}" class="title">{{$getArticle->heading}}</a></h1>
                                        <div class="meta"> <span class="meta-date"> {{$getArticle->created_at->diffForHumans()}}</span> <span class="meta-comments">(22) Comments</span> </div>
                                    </div>
                                    <!-- /.post header -->
                                    <p>{!! Illuminate\Support\Str::limit(html_entity_decode(nl2br(e($getArticle->description))),$limit = 250, $end = '...' ) !!}</p>
                                    <a href="{{$getArticle->path()}}" class="btn btn-primary">Read More</a> 
                                </div>
                                <!-- /.post content -->
                            </div>
                            <!-- /.post holder -->
                        </div>
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="blockquote ">
                                <div class="blockquote-content">
                                    <p>“Treat your password like your toothbrush. Don't let anybody else use it, and get a new one every six months.”</p>
                                </div>
                                <div class="blocquote-author">- Maroon benessisy </div>
                            </div>
                        </div>

                        <!-- pagination start -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="st-pagination">
                                <ul class="pagination">
                                    <li><a href="#" aria-label="previous"><span aria-hidden="true">Previous</span></a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li> <a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination close -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- widget-search-start -->
                    <div class=" widget widget-search">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control " placeholder="Search Here">
                                <button type="Submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- widget-search-close -->
                    <!-- widget-categories-start -->
                    <div class=" widget widget-categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul class="angle angle-right">
                            @foreach($categories as $category)
                                <li><a href="{{url('/posts-list')}}">{{$category->category_name }}<span>&nbsp;-&nbsp;({{$category->articles->count() }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- widget-categories-close -->
                    <!-- widget-recent-post-start -->
                    <div class=" widget widget-recent-post">
                        <h2 class="widget-title">Archives</h2>
                        <ul>
                            @foreach($oldArticles as $articles)
                            <li>
                                <div class="recent-post">
                                    <div class="recent-img">
                                        <a href="#" class="imghover"><img src="./images/recent-post-1.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <h4 class="recent-title "><a href="#" class="title">{{$articles->heading}}</a></h4>
                                    <div class="meta"><span class="meta-date">{{$articles->created_at->diffForHumans()}}</span> </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- widget-recent-post-close-->
                </div>
            </div>
        </div>
    </div>
@endsection
