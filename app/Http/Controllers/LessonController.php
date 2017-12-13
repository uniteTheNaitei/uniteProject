<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    //
    public function getList()
    {
        $lesson=Lesson::all();
        return view('admin.lesson.list',['lesson'=>$lesson]);
    }
    public function getAdd(){
        return view('admin.lesson.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'idCourse'=>'integer'
            ],
            [
                'idCourse.min'=>'id phải là số'
            ]);
        $lesson=new Lesson;
        $lesson->idCourse=$request->idCourse;
        $lesson->infoLesson=$request->infoLesson;
        $lesson->save();
        return redirect('admin/lesson/add')->with('thongbao','Thêm thành công ');
    }
    public function getDelete($stt)
    {
        $lesson=Lesson::find($stt);
        $lesson->delete();
        return redirect('admin/lesson/list')->with('thongbao','Bạn đã xóa thành công');

    }
}
