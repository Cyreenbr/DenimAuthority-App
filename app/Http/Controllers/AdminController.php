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
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
    
        // Create the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->services()->attach($request->services);
    
        // Redirect back to the user creation form with a success message
        return redirect()->route('Users')->with('success', 'User created successfully.');
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
