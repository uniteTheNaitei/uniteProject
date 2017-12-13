<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Lesson;
use App\JoinCourse;
use App\takeLesson;
use App\Person;
class ReadmoreController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

     public function viewDetail($id){
      	$course=Course::find($id);
      	$lesson = $course -> lesson;
        $names = [];
        $comments = $course->comment;
      	foreach ($comments as $comment){
            //var_dump($comment ->content);
            //die();
            //$p = Person::where('idPerson', $comments[$i]->idUser)->first();
            $p = $comment -> person;
            array_push($names, $p);
        }
        $coursejoined=Auth::user()->idjoinCourse;
      	$b=0;

      	foreach ($coursejoined as $value)
      	{
      		if ($value->idCourse==$id) 
      		{
      		    $joinCourseId = $value;
      			$b=1;
      			// $joincourse= $value;
      		  
      		}
      	};
      	if ($b==0){
      		return view('coursedetail',["course"=>$course,"lesson"=>$lesson, "comments"=>$comments, "names"=>$names]);
      	} 
           else {
      	  	 $a = auth::user() -> idjoinCourse -> where('idCourse', $id) -> first() -> takeLesson;
      	  	 $timeStamps = $joinCourseId -> startTime;
      		   return view('coursejoin',["course"=>$course,"lesson"=>$lesson,"a"=>$a,"time"=>$timeStamps,
                          "comments"=>$comments, "names"=>$names]);
      	} 
     	// $checkJoin=0;
     	// $joincourse = JoinCourse::where('idUser',Auth::user()->idPerson)->where('idCourse',$id)->first();
     	// $course = Course::where("idCourse",$id)->first();
     	// if ($joincourse){
     	// 	$checkJoin=1;
     	// 	$takelessons = takeLesson::where("idJoinCourse",$joincourse->idCourse)->get();
     	// }
     	// 	$lessons = Lesson::where('idCourse', $id)->get();
     	// return view('coursejoin',["checkJoin"=> $checkJoin,"takeLessons"=>$takelessons,"lessons"=>$lessons,"course"=>$course]);
  }
   public function join($id)
   {
      $course=Course::find($id);
      $names = [];
      $comments = $course->comment;
      foreach ($comments as $comment){
            //var_dump($comment ->content);
            //die();
            //$p = Person::where('idPerson', $comments[$i]->idUser)->first();
            $p = $comment -> person;
            array_push($names, $p);
      }
     
      $lesson = $course -> lesson;
      $joincourse=new JoinCourse;
      $joincourse->idCourse=$id;
      $joincourse->idUser=Auth::user()->idPerson;
      $joincourse->save();
      foreach ($lesson as $value) {
         $takeLesson=new takeLesson;
         $takeLesson->idJoinCourse=$joincourse->idjoinCourse;
         $takeLesson->stt=$value->stt;
         $takeLesson->save();
      };
      $joincourse = Auth::user() -> idjoinCourse -> where('idCourse', $id) -> first();
       $a = $joincourse -> takeLesson;
       $time = $joincourse-> startTime;
       
     return view('coursejoin',["course"=>$course,"lesson"=>$lesson,"joincourse"=>$joincourse,"a"=>$a,"time"=>$time, "comments"=>$comments, "names"=>$names]);
   }
   public function postJoin(Request $request)
   {
        $course=Course::find($request->check);
        $lesson = $course -> lesson;
       $a = auth::user() -> idjoinCourse -> where('idCourse', $request->check)->first()->takeLesson;
       $names = [];
       $comments = $course->comment;
        foreach ($comments as $comment){
            //var_dump($comment ->content);
            //die();
            //$p = Person::where('idPerson', $comments[$i]->idUser)->first();
            $p = $comment -> person;
            array_push($names, $p);
        }
       // die(); 
       
       //$a = JoinCourse::find(1) -> takelesson;

       foreach ($a as $value)
          {   
              $c=0;

              if ($request->checkbox!=NULL) {
              
              foreach ($request->checkbox as $b){
                
                  if (intval($b)==$value->stt) $c=1;
                }
         
              if ($c==1) {$value->complete=1;
              //$value->save();
              }
              else{
                $value->complete=0;
              };
              // $value->save();
              takeLesson::where('idJoinCourse' , $value->idJoinCourse)->where('stt',$value->stt)->update(['complete'=> $c]);                
            }
        }
       $joincourse = Auth::user() -> idjoinCourse -> where('idCourse',  $request->check) -> first();
       $a = $joincourse -> takeLesson;
       $time = $joincourse-> startTime;
       return view('coursejoin',["course"=>$course,"lesson"=>$lesson,"joincourse"=>$joincourse,"a"=>$a,"time"=>$time, "comments"=>$comments, "names"=>$names]);
   }
}
