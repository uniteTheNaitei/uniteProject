<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    //
    public function getList()
    {
        $course=Course::all();
        return view('admin.course.list',['course'=>$course]);
    }

    public function getDelete($idCourse)
    {
        $course=Course::find($idCourse);
        $course->delete();
        return redirect('admin/course/list')->with('thongbao','Bạn đã xóa thành công');

    }
    public function getAdd(){
        return view('admin.course.add');
    }
    public function postAdd(Request $request){
        $this -> validate($request,[
            'name'=>'required|min:3|unique:course,name',
        ],
            [
                'name.required'=>'Bạn chưa nhập ten',
                'name.min'=>'Ten phải ít nhất 3 kí tự',
                'name.unique'=>'Ten đã tồn tại',
            ]);
        $course=new Course;
        $course->name=$request->name;
        $course->idCoach=$request->idCoach;
        $course->Money=$request->money;
        $course->info=$request->info;
        $course->minWeight=$request->weight;
        $course->minHeight=$request->height;
        $course->img_1=$request->img_1;
        $course->img_2=$request->img_2;
        $course->save();
        return redirect('admin/course/add')->with ('thongbao','Bạn đã thêm  thành công');
    }
    public function getFix($idCourse){
        $course=Course::find($idCourse);
        return view('admin.course.fix',['course'=>$course]);
    }
    public function postFix(Request $request,$idCourse)
    {
        $this->validate($request,[
            'name'=>'min:3|max:30',
        ],
            [
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên khẩu nhiều nhất 30 kí tự',
            ]);
        $course=Course::find($idCourse);
        $course->name = $request->name;
        $course->idCoach = $request->idCoach;
        $course->Money = $request->money;
        $course->info = $request->height;
        $course->minWeight = $request->weight;
        $course->save();
        return redirect('admin/course/fix/'.$idCourse)->with('thongbao','Sửa thành công');
    }
    public function viewDetail(){
        return view('coursedetail');
    }
}
