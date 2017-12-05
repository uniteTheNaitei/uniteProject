@extends('layouts.app')

@section('content')


        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>My Page</h2>
    <p>Information and Gym Course</p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">My Tutorial</a></li>
        <li><a data-toggle="tab" href="#menu1">Information</a></li>
        <li><a data-toggle="tab" href="#menu2">My Course</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <div class="container">

                <div class="row">
                    <form action="{{route('profile')}}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <fieldset>

                            <!-- Form Name -->
                            <legend>
                                <center>Course recommendations</center>
                            </legend>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ageid">Age</label>
                                <div class="col-md-4">
                                    <input id="ageid" name="ageid" placeholder="Age"
                                           class="form-control input-md" required="" type="number">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="requestid">Weight</label>
                                <div class="col-md-4">
                                    <input id="weightid" name="weightid" placeholder="Weight"
                                           class="form-control input-md" required="" type="number">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="requestid">Height</label>
                                <div class="col-md-4">
                                    <input id="heightid" name="heightid" placeholder="Height"
                                           class="form-control input-md" required="" type="number">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <center>
                                    <div class="col-md-4">
                                        <button id="submit" name="submit" class="btn btn-default">Find</button>
                                    </div>
                                </center>
                            </div>

                        </fieldset>
                    </form>


                </div>
            </div>

            <p>This is a suggested course with age : {{$request->ageid}} years old , weight : {{$request->weightid}} kg
                and height {{$request->weightid}} cm .</p>
            @if (count($course))
                @foreach ($course as $post)
                    <div class="col-md-12 col-md-offset-0">


                        <div class="fh5co-blog animate-box">
                            <div class="inner-post">
                                <a href="#"><img class="img-responsive" src={{$post->img_1}} style="max-height:200px"
                                                 alt=""></a>
                            </div>
                            <div class="desc">
                                <!-- Fit link here -->
                                <h3><a href="" #>{{$post->name}}</a></h3>
                                <span class="posted_by">Posted by: {{$post->trainer->name}}</span>
                                <span class="comment"><a href="">{{count($post->comment)}}<i class="icon-bubble22"></i></a></span>
                                <p>{{$post->info}}</p>
                                <a href="#" class="btn btn-default">Read More</a>


                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
            <div class="a">
                <ul class="a">
                    @if(count($course))
                        {!! $course->render() !!}
                    @endif

                </ul>
            </div>


        </div>
        <div id="menu1" class="tab-pane fade">
            <h3> My Information</h3>
            <div class=" content" style="background: gainsboro">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table table-bordered text-center " style="margin-top: 20px ">
                            <tr>
                                <td colspan="2" class=" danger">Imformation</td>
                            </tr>
                            <tr class="active">
                                <td>My Name</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr class="success">
                                <td> Email</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr class="warning">
                                <td>Weight</td>
                                <td> {{ Auth::user()->weight }}</td>
                            </tr>
                            <tr class="danger">
                                <td>Height</td>
                                <td>{{ Auth::user()->height }}</td>
                            </tr>
                            <tr class="active">
                                <td>Address</td>
                                <td> {{ Auth::user()->address }}</td>
                            </tr>
                            <tr class="success">
                                <td>Age</td>
                                <td>{{ Auth::user()->age }}</td>
                            </tr>
                            <tr class="success">
                                <td>Password</td>
                                <td>*******************</td>
                            </tr>
                        </table>
                        <div>
                            <button class="btn " style="background: pink; float: right; margin-bottom: 15px"><a
                                        href="fix/{{ Auth::user()->idPerson}}" class="fix">Fix Information</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            @if (count($mycourse))
                @foreach ($mycourse as $post)
                    <div class="col-md-12 col-md-offset-0">


                        <div class="fh5co-blog animate-box">
                            <div class="inner-post">
                                <a href="#"><img class="img-responsive" src={{$post->img_1}} style="max-height:200px"
                                                 alt=""></a>
                            </div>
                            <div class="desc">
                                <!-- Fit link here -->
                                <h3><a href="" #>{{$post->name}}</a></h3>
                                <span class="posted_by">Posted by: {{$post->trainer->name}}</span>
                                <span class="comment"><a href="">{{count($post->comment)}}<i class="icon-bubble22"></i></a></span>
                                <p>{{$post->info}}</p>
                                <a href="#" class="btn btn-default">Read More</a>


                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
            <div class="a">
                <ul class="a">
                    @if(count($mycourse))
                        {!! $mycourse->render() !!}
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</html>

@endsection
