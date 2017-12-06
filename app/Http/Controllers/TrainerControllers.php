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
        $course->setPath('coursetrainer');
        return view('coursetrainer')->with('course', $course)->with('user',Auth::user())->with('name',$name);
    }
}