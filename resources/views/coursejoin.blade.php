@extends('layouts.app')

@section('content')

    <div class="text-center" style="padding-top: 50px; font-size: 50px; font-weight: bold">
           {{$course->name}}
           <?php  $c=0;   ?>
           <?php $listlike = Auth::user()->likedCourse; ?>
             @if($listlike!=NULL)
                  @foreach($listlike as $value)
                      @if($value->idPost==$course->idCourse)   <?php $c=1 ?>  
                      @endif
                   @endforeach
              @endif
         
          @if($c==0)
          <div style="margin-left: 800px"> 
               <form method="POST" action="{{route('likecourse')}}">
                 {{csrf_field()}}
               <fieldset> 
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="course"  value="{{ $course->idCourse}}" />
               <input type="hidden" name="user"  value="{{ Auth::user()->idPerson }}" />
               <input type="submit" name="nut" value="Like" class="btn btn-default" aria-label="Left Align">  <span class="glyphicon glyphicon-thumbs-up " ></span> 
          </fieldset>
                 </form>
          </div> 
           @else 
             
               <div style="margin-left: 800px"> 
               <form method="POST" action="{{route('likecourse')}}">
                 {{csrf_field()}}
                <fieldset> 
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="hidden" name="course"  value="{{ $course->idCourse}}" />
                 <input type="hidden" name="user"  value="{{ Auth::user()->idPerson }}" />
                 <input type="submit" name="nut" value="Liked" class="btn btn-success" aria-label="Left Align">  <span class="glyphicon glyphicon-thumbs-up " ></span> 
                </fieldset>
                 </form>
              </div> 
              

          @endif

       </div>


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
    <br>
    <div style="margin-left: 240px">
        <h2>Leave a comment</h2>
      </div>
      @if(Auth::guest())
        <p>Login to Comment</p>
      @else
      <div style="width: 600px; margin-left: 240px">
        <div class="panel-body">
          <form method="post" action="{{route('addcommentcourse')}}"> {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="on_post" value="{{ $course->idCourse }}">
            <input type="hidden" name="slug" value="{{ $course->slug }}">
            <div class="form-group">
              <textarea required="required" placeholder="Enter comment here" name = "body" class="form-control"></textarea>
            </div>
            <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
          </form>
        </div>
      </div>
      @endif
      <div style="margin-left: 240px">
        @if($comments)
        <ul style="list-style: none; padding: 0">
          @for($i=0;$i<count($comments);$i++)
            <li class="panel-body">
              <div class="list-group">
                <div class="list-group-item">
                  <h3>{{ $names[$i]->name}}</h3>
                  
                </div>
                <div class="list-group-item">
                  <p>{{ $comments[$i]->content }}</p>
                </div>
              </div>
            </li>
          @endfor
        </ul>
        @endif
      </div>

@endsection

