@extends('layouts.app')

@section('content')

    <h1 class="text-center" style="padding-top: 50px">{{$course->name}}</h1>

    <div class="text-center">
    <h3>You have already enrolled this course : </h3>
    <h2 id="demo"></h2>
    </div>

    <div class="row" style="padding-bottom: 20px">

        <br>
        <div class="col-md-12">

            <br>
            <div style="margin-left: 250px">
                <img width="500px" src="{{$course->img_2}}">
                <img width="500px" src="{{$course->img_1}}">
                <img width="500px" src="{{$course->img_2}}">


            </div>
            <br>

            <form action="{{route('checkcourse')}}" method="post">
                {{csrf_field()}}
                <fieldset>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @foreach($lesson as $value)

                        {{$b=0}}
                        @foreach($a as $value1)
                            @if($value1->stt==$value->stt)
                                @if($value1->complete==1)
                                    {{$b=1}}
                                @endif
                            @endif
                        @endforeach
                        @if ($b==1)
                            <p style="margin-left:250px">
                                <input type="checkbox" name="checkbox[]" value="{{$value->stt}}" id="default" checked
                                       class="badgebox" style="width: 30px; height: 30px">
                                <b>Lesson {{$value->stt+1}}</b>.{{$value->infoLesson}}

                            </p>
                        @else
                            <p style="margin-left:250px">
                                <input type="checkbox" name="checkbox[]" value="{{$value->stt}}" id="default"
                                       class="badgebox" style="width: 30px; height: 30px">
                                <b>Lesson {{$value->stt+1}}</b>.{{$value->infoLesson}}

                            </p>
                        @endif
                    @endforeach
                    <input type="text" name="check" value="{{$course->idCourse}}" style="display: none">
                    <input type="submit" value="Update" class="btn btn-success" style="margin-left: 250px">


                </fieldset>
            </form>


            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("{{$time}}").getTime();

                // Update the count down every 1 second
                var x = setInterval(function () {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = now - countDownDate;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                        + minutes + "m " + seconds + "s ";

                    // If the count down is over, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>

        </div>
    </div>

@endsection

