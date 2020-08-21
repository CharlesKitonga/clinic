@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="page-section">
                            <h1 class="page-title ">Blogs</h1>
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
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <!-- post holder -->
                            <div class="post-img">
                                <!-- post img -->
                                <a href="#" class="imghover"><img src="{{asset('images/post-img-1.jpg')}}" alt="" class="img-responsive"></a>
                                <div class="post-sticky"></div>
                            </div>
                            <!-- /.post img -->
                            <div class="post-content" style="width: 100%;">
                                <!-- post content -->
                                <div class="post-header">
                                    <!-- post header -->
                                    <h1 class="post-title"><a href="#" class="title">{{$article->heading}}</a></h1>
                                    <div class="meta"> <span class="meta-date"> {{$article->created_at->diffForHumans()}}</span> <span class="meta-comments"></span> </div>
                                </div>
                                <!-- /.post header -->
                                <p>{!! Illuminate\Support\Str::limit(html_entity_decode(nl2br(e($article->description))),$limit = 250, $end = '...' ) !!}</p>
                                <img src="{{asset('images/articles/'.$article->photo) }}" alt="" class="alignleft">
                                <p class="mb60"> {!! Illuminate\Support\Str::substr(html_entity_decode(nl2br(e($article->description))),250, 350 ) !!} </p>
                                <img src="{{asset('images/articles/'.$article->photo) }}" alt="" class="alignright">
                                <p> {!! Illuminate\Support\Str::substr(html_entity_decode(nl2br(e($article->description))),350, 500 ) !!} </p>
                                <blockquote>
                                    <p>“Treat your password like your toothbrush. Don't let anybody else use it, and get a new one every six months.”</p>
                                </blockquote>
                                <p>{!! Illuminate\Support\Str::substr(html_entity_decode(nl2br(e($article->description))),500, 2000 ) !!}</p>
                                <div class="related-post-block">
                                    <!-- related post block -->
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-sm-12">
                                            <h2 class="related-post-title">Related Post</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if($relatedPosts->count() > 0)
                                        @foreach($relatedPosts as $relPosts)
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="related-post">
                                                    <!-- related post -->
                                                    <div class="related-img">
                                                        <a href="#" class="imghover"><img src="{{ asset('images/articles/'.$relPosts->photo)}}" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="related-post-content">
                                                        <h3 class="related-title"><a href="#" class="title">{{$relPosts->heading}}</a></h3>
                                                        <div class="meta"><span class="meta-categories">in <a href="#" class="">"{{$relPosts->category->category_name}}"</a> </span></div>
                                                    </div>
                                                </div>
                                                <!-- /.related post -->
                                            </div>
                                        @endforeach
                                        
                                        @else
                                        <div>
                                            <p>No related posts uploaded yet</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <br><br>
                                <!-- /. post navigation -->
                                <div class="author-block">
                                    <!-- Post author -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="author-img">
                                                <a href="#"><img src="{{asset('images/manager.svg')}}" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="author-post-content ">
                                                <div class="author-header">
                                                    <h3><a href="#" class="title">Victor Bett</a></h3>
                                                    <div class="meta-author mb10">(Author)</div>
                                                </div>
                                                <div class="author-content">
                                                    <p></p>
                                                    <a href="{{url('/blogs')}}" class="btn btn-primary">View All Post</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post author -->
                                <!--comments start-->
                                    <!-- comments are here!! -->
                                <!--comments close-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
