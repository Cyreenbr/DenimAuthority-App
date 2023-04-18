<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users()
    {
         $data=user::all();
         return view('Admin.users',compact('data'));
    }

    public function NewUser()
    {
        return view('Admin.createuser');
    }

    public function updateuserview($id)
    {
        $data = user::find($id);
        return view('Admin.updateuserView',compact('data'));
    }

    public function updateuser(Request $request,$id){

        $data = user::find($id);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        $data=user::all();
        return view('Admin.users',compact('data'));;

    }
    
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

}
