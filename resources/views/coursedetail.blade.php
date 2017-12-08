

@extends('layouts.app')
@section('content')

			   <h2 class="text-center" style="padding-top: 50px">{{$course->name}}</h2>
		<div class="row" style="padding-bottom: 20px">
         
           <br>		
           <div class="col-md-12">
           
           	   <br>
           	   <div style="margin-left: 250px">
           	   	  <img width="300px"  src="{{$course->img_2}}">
           	        <img width="300px"  src="{{$course->img_1}}">
           	         <img width="300px"  src="{{$course->img_2}}">
           	        
           	    
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

@endsection

