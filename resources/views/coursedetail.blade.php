

@extends('layouts.app')
@section('content')

			 <div class="text-center" style="padding-top: 50px; font-size: 50px; font-weight: bold">
           {{$course->name}}
            {{$course->name}}
           <?php  $c=0;   ?>
           <?PHP $listlike = Auth::user()->likedCourse; ?>
             @if($listlike!=NULL)
                  @foreach($listlike as $value)
                      @if($value->idPost==$course->idCourse)   <?php $c=1 ?>  
                      @endif
                   @endforeach
              @endif
          {{-- {{var_dump($c)}}
          {{die()}} --}}
          @if($c==0)
          <div style="margin-left: 1000px"> 
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
              <div style="margin-left: 1000px"> 
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

         



		<div class="row" style="padding-bottom: 20px">
         
           <br>		
           <div class="col-md-12">
           
           	   <br>
           	   <div style="margin-left: 450px">
           	   	  <img width="300px"  src="{{$course->img_2}}">
           	        <img width="300px"  src="{{$course->img_1}}">
           	         <img width="300px"  src="{{$course->img_2}}">
           	        
           	       
               </div>
               <br>
                @foreach($lesson as $value)
                       
                	    
                         	<p style="margin-left:450px"> 
                         	
                            <b>Lesson {{$value->stt+1}}</b>.   {{$value->infoLesson}} 
                         		</p>
                         
                  @endforeach
                  <button class="btn " style="margin-left: 450px"><a href="/coursejoin/{{$course->idCourse}}">Start</a></button>
             
           </div>
		</div>

    <div style="margin-left: 450px">
        <h2>Leave a comment</h2>
      </div>
      @if(Auth::guest())
        <p>Login to Comment</p>
      @else
      <div style="width: 600px; margin-left: 450px">
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
      <div style="margin-left: 450px">
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

