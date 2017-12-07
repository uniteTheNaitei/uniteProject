<?php
/**
 * Created by PhpStorm.
 * User: huynh
 * Date: 06-Dec-17
 * Time: 3:10 PM
 */

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Support\Facades\Auth;
use App\Course;
class TrainerControllers extends Controller
{

    static function cmp($a, $b)
    {
        if (count($a->takeLike) == count($b->takeLike)) {
            return 0;
        }
        return (count($a->takeLike) < count($b->takeLike)) ? -1 : 1;
    }

    public function getAllTrainer()
    {
        $coachs = Person::join('permission', 'person.idPerson', '=', 'permission.idperson')
            ->where('permission.type', 2)->paginate(4);
        $coachs->setPath('trainer');
        return view('trainer')->with('coachs', $coachs);
    }
    public function getCourseTrainer($idCoach){
        $person = Person::where('idPerson',$idCoach)->first();
        $name = $person->name;
        $course = course::where('idCoach', $idCoach)->paginate(4);
        return view('coursetrainer')->with('course', $course)->with('user',Auth::user())->with('name',$name);
    }
    public function getMostPopular(){
        $course = course::leftJoin('takelike','course.idCourse','=','takelike.idPost')
            -> where('likeType',1)
            ->selectRaw("course.*, count(takelike.idPerson) as `count`")->groupby('course.idCourse')->orderby('count','DESC')->paginate(4);

        $course->setPath('most_popular');
        return view('mostpopular')->with('course', $course)->with('user',Auth::user());
    }
}