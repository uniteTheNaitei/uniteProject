<?php

namespace App\Http\Controllers;
use App\takelike;
use App\BlogPost;
use App\Person;
use App\Course;
use App\Lesson;
use App\JoinCourse;
use App\takeLesson;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LikecourseController extends Controller
{
    //
    public function postLikecourse(Request $request)
    {
      if ($request->nut=="Like")
      {
       $likecourse=new takelike;
       $likecourse->idPost = $request->course;
	     $likecourse->idPerson= $request->user;
	     $likecourse->likeType=1;
	     $likecourse->save(); 
      }
     else
       {
          $like=takelike::where('idPost',$request->course)->delete();
       }
	   $user = Auth::user();
      
       $course=Course::find($request->course);
      	$lesson = $course -> lesson;
      	$coursejoined=Auth::user()->idjoinCourse;
      	$b=0;

      	foreach ($coursejoined as $value)
      	{
      		if ($value->idCourse==$request->course) 
      		{
      		    $joinCourseId = $value;
      			$b=1;
      			// $joincourse= $value;
      		  
      		}
      	};
      	$listlike= $user->likedCourse;
      	$names = [];
        $comments = $course->comment;
        foreach ($comments as $comment){
            //var_dump($comment ->content);
            //die();
            //$p = Person::where('idPerson', $comments[$i]->idUser)->first();
            $p = $comment -> person;
            array_push($names, $p);
        }
      
      	if ($b==0){
      		return view('coursedetail',["course"=>$course,"lesson"=>$lesson, "comments"=>$comments, "names"=>$names]);
      	} 
           else {

      	  	 $a = auth::user() -> idjoinCourse -> where('idCourse', $request->course) -> first() -> takeLesson;
      	  	 $timeStamps = $joinCourseId -> startTime;
      		   return view('coursejoin',["course"=>$course,"lesson"=>$lesson,"a"=>$a,"time"=>$timeStamps,"listlike"=>$listlike, "comments"=>$comments, "names"=>$names]);
      	} 
    }
}
