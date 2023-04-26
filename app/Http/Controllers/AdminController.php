<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function users()
    {
         $data=user::all();
         return view('Admin.users',compact('data'));
    }

    public function NewUser()
    {
        $services = Service::all();
        return view('Admin.createuser', ['services' => $services]);
    }

    public function userstore(Request $request)
    {  

        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('user_type')) {
            $user->user_type = '1';
        } else {
            $user->user_type = '0';
        }
        $user->password = Hash::make($request->password);
        $user->save();
    
        $user_id = $user->id; 
        $user->services()->attach($request->services);
    
        return redirect()->route('Users')->with('success', 'User created successfully.');

    }    

    
    public function updateuserview($id)
    {
        $data = user::find($id);
        $services = Service::all();
        return view('Admin.updateuserView',compact('data'),['services' => $services]);
    }

    public function updateuser(Request $request,$id){

        $data = user::find($id);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        $services = $request->input('services', []); 
        $data->services()->sync($services);

        $data=user::all();
        return redirect()->route('Users')->with('data', $data);

    }
    
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

}
