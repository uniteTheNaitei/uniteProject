@extends('layouts.app')

@section('content')


        <div id="fh5co-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="heading-section animate-box">
                                <h2>{{$name}}'s Courses : </h2>
                            </div>
                        </div>
                        <?php $i = 1; ?>
                        @if (count($course))
                            @foreach ($course as $post)
                                <div class="col-md-12 col-md-offset-0">


                                    <div class="fh5co-blog animate-box">
                                        <div class="inner-post">
                                            <a href="#"><img class="img-responsive" src={{$post->img_1}} alt=""></a>
                                        </div>
                                        <div class="desc">
                                            <!-- Fit link here -->
                                            <h3><a href="" #>{{$post->name}}</a></h3>
                                            <span class="posted_by">Posted by: {{$post->trainer->name}}</span>
                                            <span class="comment"><a href="">{{count($post->comment)}}<i
                                                            class="icon-bubble22"></i></a></span>
                                            <p>{{$post->info}}</p>
                                            <a href="/course/{{$post->idCourse}}" class="btn btn-default">Read More</a>


                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>

                </div>

            </div>

        </div>
        <div class="a">
            <ul class="a">
                {!! $course->render() !!}
            </ul>
        </div>
        <!-- fh5co-blog-section -->
@endsection


