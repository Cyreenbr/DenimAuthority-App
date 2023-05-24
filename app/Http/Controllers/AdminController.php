<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('user_type')) {
            $user->user_type = '1';
        } else {
            $user->user_type = '0';
        }
    
        $password = Str::random(10);
    
        $user->password = Hash::make($password);
        $user->save();
    
        $user->services()->attach($request->services);
        
        return redirect()->route('Users')->with('success', $user->name . ' Créé avec succès . Mot de passe : ' . $password);
    }

    
    public function updateuserview($id)
    {
        $data = user::find($id);
        $services = Service::all();
        return view('Admin.updateuserView',compact('data'),['services' => $services]);
    }

    public function updateuser(Request $request, $id)
    {
        $data = User::find($id);
    
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
    
        $services = $request->input('services', []);
        $data->services()->sync($services);
    
        return redirect()->route('Users')->with('success', $data->name . ' Modifié avec succès.');
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back()->with('success', $data->name.' Supprimé avec succès.');
    }

    public function search(Request $request)
    {    
        $search=$request->search;

        $data = user::where('name', 'like', '%' . $search . '%')->get();

         return view('Admin.users',compact('data'));
    }


}
