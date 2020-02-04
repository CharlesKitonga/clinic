@extends('layouts.frontLayout.front_design')
  @section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Testimonials</h1>
                        <p>Etiarem ipsum dolor sit ce eu lacus impsus erat vitae.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Add a Review
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add your Experience</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/testimonials" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" name = "name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Write Your experience</label>
                                    <textarea class="form-control" name="textarea" id="myTextarea" style = "display:none;" rows="3"></textarea>
                                    <script >
                                        $(document).ready(function(){
                                            $("#myTextarea").emojioneArea({
                                                pickerPosition: "bottom"
                                            });
                                        })
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Add an Emoji</label>
                                    <input type="text" name = "emoji" class="form-control" id="emoji" placeholder="Add an Emoji">
                                    <script >
                                        $(document).ready(function(){
                                            $("#emoji").emojioneArea({
                                                pickerPosition: "bottom"
                                            });
                                        })
                                    </script>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
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
                @foreach($review as $rev)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display:inline-block;">
                    <div class="testimonial-content mb-40">
                        <p class="testimonial-text">“{{$rev->textarea}}”</p>
                        <div class="">
                            <div class="testimonial-pic"> <div class="img-circle" style = "color: #128512;">{{$rev->emoji}}</div></div>
                            <div class="testimonial-meta">
                                <span>{{$rev->name}}</span> </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- treatment close -->
  >
@endsection
