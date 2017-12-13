

@extends('layouts.app')
@section('content')

			   <h2 class="text-center" style="padding-top: 50px">{{$course->name}}</h2>
		<div class="row" style="padding-bottom: 20px">
         
           <br>		
           <div class="col-md-12">
           
           	   <br>
           	   <div style="margin-left: 250px">
           	   	  <img width="500px"  src="{{$course->img_2}}">
           	        <img width="500px"  src="{{$course->img_1}}">
           	         <img width="500px"  src="{{$course->img_2}}">
           	        
           	    
               </div>
               <br>
                @foreach($lesson as $value)
                       
                	    
                         	<p style="margin-left:250px"> 
                         	
                            <b>Lesson {{$value->stt+1}}</b>.   {{$value->infoLesson}} 
                         		</p>
                         
                  @endforeach
                  <button class="btn " style="margin-left: 250px"><a href="/coursejoin/{{$course->idCourse}}">Start</a></button>
             
           </div>
		</div>

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
      
    
    </div>

@endsection

