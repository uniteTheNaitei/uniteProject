<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    //
    public function getList()
    {
        $permission=Permission::all();
        return view('admin.permission.list',['permission'=>$permission]);
    }
    public function getFix($idperson){
            $permission =Permission::find($idperson);
            return view('admin.permission.fix',compact('permission'));
    }
    public function postFix(Request $request,$idperson){
        $permisson=Permission::find($idperson);
        $this->validate($request,
            [
                'type'=>'integer|min:1|max:2',
            ],
            [
                'type.integer'=>'Type phải là số',
                'type.min'=>'Quyền chỉ có thể là 1 hoặc 2',
                'type.max'=>'Quyền chỉ có thể là 1 hoặc 2',
            ]);
        $permisson->type=$request->type;
        $permisson->save();
        return redirect('admin/permission/fix/'.$idperson)-> with('thongbao','Bạn đã sửa thành công');
    }
}
