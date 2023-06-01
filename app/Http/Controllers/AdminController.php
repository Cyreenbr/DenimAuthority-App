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
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'services' => 'required|array',
        'services.*' => 'exists:services,id',
        'user_type' => 'boolean',
    ]);

    $password = Str::random(10);

    $user = User::firstOrCreate(
        ['email' => $validatedData['email']],
        [
            'name' => $validatedData['name'],
            'password' => Hash::make($password),
            'user_type' => $validatedData['user_type'] ?? 0,
        ]
    );

    $user->services()->sync($validatedData['services']);

    return redirect()->route('Users')->with('success', $user->name . ' créé avec succès. Mot de passe : ' . $password);
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

    public function getUsersByService($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        $users = $service->users;

        return view('Admin.users_partial', compact('users'));
    }



}
