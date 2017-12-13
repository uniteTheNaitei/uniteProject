<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Permission;


class RegisterController extends Controller
{
    //
    public function getRegister()
    {
       return view('register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'unique:person|min:3|max:30',
                'password'=>'min:3|max:30',
                'confirmpassword'=>'same:password',
                'email'=>'unique:person|email'
            ],
            [
                'name.min'=>'Name must be between 3 and 100',
                'name.unique'=>'Name already exists',
                'name.max'=>'Name must be between 3 and 100',
                'password.min'=>'Password must be between 3 and 100',
                'passowrd.max'=>'Password must be between 3 and 100',
                'confirmpassword.same'=>'Passwords do not match',
                'email'=>'Email is not valid syntax',
                'email.unique'=>'Email already exists',


            ]);
        $person=new Person;
        $person->name=$request->name;
        $person->email=$request->email;
        $person->password=$request->password;
        $person->weight=$request->weight;
        $person->height=$request->height;
        $person->address=$request->address;
        $person->age=$request->age;
        $person->save();
        $permiss=new Permission;
        $permiss->idPerson=$person->idPerson;

        if ($request->person1=="ok" && $request->person2=="ok1") $permiss->type=3;
            else
                {
                    if ($request->person1=="ok" && $request->person2==NULL) $permiss->type=1;
                    else $permiss->type=2;
            }
        $permiss->save();
        return redirect('/login')->with('thongbao','Register Successfully');
    }
}
