

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
               
              {{--   <form action="" method="post">

                  @for($i=1;$i<count($lessons);$i++)

                   @if($checkJoin==1)
                   {{var_dump($takeLessons)}}
             {{die()}}
                    @if($takeLessons[$i]->complete)
                     <p style="margin-left:250px"> 
                               <input type="checkbox" id="default" checked class="badgebox" style="width: 30px; height: 30px">
                                <b>Lesson {{$i+1}}</b>.{{$lessons[$i]->infoLesson}} 
                            
                            </p>
                    @endif
                    @endif
                  @endfor --}}
                  {{-- {{var_dump($course->idCourse)}}
                  {{die()}} --}}
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
                               <input type="checkbox" name="checkbox[]" value="{{$value->stt}}" id="default" checked class="badgebox" style="width: 30px; height: 30px">
                              	<b>Lesson {{$value->stt+1}}</b>.{{$value->infoLesson}} 
                         		
                               </p>
                            @else
                                 <p style="margin-left:250px"> 
                                     <input type="checkbox" name="checkbox[]" value="{{$value->stt}}" id="default" class="badgebox" style="width: 30px; height: 30px">
                                     <b>Lesson {{$value->stt+1}}</b>.{{$value->infoLesson}} 
                            
                                 </p>
                           @endif
                  @endforeach
                  <input type="text" name="check" value="{{$course->idCourse}}" style="display: none">
                   <input type="submit" value="Update" class="btn btn-success" style="margin-left: 250px">
                 </fieldset>
                  </form>
                   
        
           </div>
		</div>

@endsection

