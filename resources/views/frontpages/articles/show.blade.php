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
                                    <div class="meta"> <span class="meta-date"> {{$article->created_at->diffForHumans()}}</span> <span class="meta-comments">(22) Comments</span> </div>
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
                                    </div>
                                </div>
                                <!-- /. post navigation -->
                                <div class="author-block">
                                    <!-- Post author -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="author-img">
                                                <a href="#"><img src="{{asset('images/author.jpg')}}" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="author-post-content ">
                                                <div class="author-header">
                                                    <h3><a href="#" class="title">George Krupp</a></h3>
                                                    <div class="meta-author mb10">(Author)</div>
                                                </div>
                                                <div class="author-content">
                                                    <p>Etiam laoreet sitamet purus sed vestibulu ullam cursus lacus eget pharetra accumsan ante metus tinante in ones leousce in consectetur lacus non efficiturex.</p>
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
                            <h2 class="widget-title">Recent Post</h2>
                            <ul>
                                @foreach($newArticles as $articles)
                                <li>
                                    <div class="recent-post">
                                        <div class="recent-img">
                                            <a href="#" class="imghover"><img src="{{asset('images/articles/'.$articles->photo) }}" alt="" class="img-responsive"></a>
                                        </div>
                                        <h4 class="recent-title "><a href="#" class="title">{{$articles->heading}}</a></h4>
                                        <div class="meta"><span class="meta-date">{{$articles->created_at->diffForHumans()}}</span> </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- widget-recent-post-close-->
                        <!-- widget-Tag start -->
                        <div class=" widget widget-tags ">
                            <h2 class=" widget-title">Tags</h2>
                              <ul class="tags">
                                @foreach($article->tags as $tag)
                                  <li><a href="#">{{$tag->tag_name}}</a></li>
                                @endforeach
                              </ul>
                        </div>
                        <!-- widget-Tag close -->
                    </div>
                </div>
            </div>
        </div>
@endsection
