<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    //
	
    public function getList()
    {
        $person=Person::all();
        return view('admin.person.list',['person'=>$person]);
    }
    public function getAdd(){
        return view('admin.person.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name'=>'required|unique:person,name|min:3|max:30'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên ',
                'name.unique'=>'Tên này đã tồn tại',
                'name.min'=>'Tên phải độ dài từ 3 đến 100',
                'name.max'=>'Tên phải độ dài từ 3 đến 100',
            ]);
        $person=new Person;
        $person->name=$request->name;
        $person->email=$request->email;
        $person->password=$request->password;
        $person->weight=$request->weight;
        $person->height=$request->height;
        $person->save();
        return redirect('admin/person/add')->with('thongbao','Thêm thành công ');
    }
    public function getDelete($idPerson)
    {
        $person=Person::find($idPerson);
        $person->delete();
        return redirect('admin/person/list')->with('thongbao','Bạn đã xóa thành công');

    }
    public function getFix($idPerson){
        $person=Person::find($idPerson);
        return view('admin.person.fix',['person'=>$person]);
    }
   public function postFix(Request $request,$idPerson)
    {
        $this->validate($request,[
            'name'=>'min:3|max:30',
        ],
            [
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên khẩu nhiều nhất 30 kí tự',
            ]);
        $person=Person::find($idPerson);
        $person->name = $request->name;
        if ($request->changepassword=="on" )
        {
            $this->validate($request,[
                'password'=>'min:3|max:16',
                'passwordagain'=>'same:password'
            ],
                [
                    'password.min'=>'Mật khẩu ít nhất 3 kí tự',
                    'password.max'=>'Mật khẩu nhiều nhất 30 kí tự',
                    'passwordagain.same'=>'Mật khẩu không khớp'
                ]);
            $person->password = bcrypt($request->password);
        }
        $person->save();
        return redirect('admin/person/fix/'.$idPerson)->with('thongbao','Sửa thành công');
    }
}
