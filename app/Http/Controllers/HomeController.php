<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Person;
use Illuminate\Pagination\Factoryr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request != null) {
            if (($request->ageid < 40) && ($request->weightid > (($request->heightid - 100) + 10))) {
                $course = course::where('level', 3)->paginate(4);
                $course->setPath('profile');
            } elseif ($request->ageid > 50) {
                $course = course::where('level', 1)->paginate(4);
                $course->setPath('profile');
            } else {
                $course = course::where('level', 2)->paginate(4);
                $course->setPath('profile');
            }
        } else {
            $course = null;
        }
        $current_user = Auth::user()->idPerson;
        //$mycourse = $current_user->joinCourse->paginate(10);
        $mycourse = course::join('joincourse', 'course.idCourse', '=', 'joincourse.idCourse') -> where('idUser', '=',$current_user)->paginate(10);
        $mycourse->setPath('profile');

        return view('profile')->with('course', $course)->with('request', $request)->with('mycourse', $mycourse);
//        return view('profile');
    }

    public function tutorial()
    {
        return view('mytutorial');
    }

    public function fix()
    {
        return view('fix');
    }

    public function postFix(Request $request, $idPerson)
    {
        $this->validate($request, [
            'name' => 'min:3|max:30',
            'password' => 'min:3|max:16',
            'passwordagain' => 'same:password'
        ],
            [
                'name.min' => 'Tên ít nhất 3 kí tự',
                'name.max' => 'Tên khẩu nhiều nhất 30 kí tự',
                'password.min' => 'Mật khẩu ít nhất 3 kí tự',
                'password.max' => 'Mật khẩu nhiều nhất 30 kí tự',
                'passwordagain.same' => 'Mật khẩu không khớp',
            ]);
        Auth::user()->password = bcrypt($request->password);
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->weight = $request->weight;
        Auth::user()->height = $request->height;
        Auth::user()->address = $request->address;
        Auth::user()->age = $request->age;
        Auth::user()->save();
        return redirect('fix/' . $idPerson)->with('thongbao', 'Sửa thành công');
    }

    public function getInfor()
    {
        return view('profile');
    }

}
