<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
use Illuminate\Support\Facades\DB;
class MainController extends Controller{
	public function index(){
		// $a = Course::find(1)->lesson;
		$course = course::where('idCourse', '>', 0)->paginate(4);
		$course->setPath('index');
		// $course = DB::table('course')->get();
		return view('index')->with('course', $course)->with('user',Auth::user());
		// return view('index');, ['a' => $a]
	}
	public function about() {
		return view('about');
	}
	
}
