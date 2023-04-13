<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function redirects(){

        $usertype = Auth::user()->usertype;
 
        if( $usertype == '0') {
                return view("welcome") ;
        }else{
                return view("welcome");
        }
     }

     public function TbleVente()
    {
        return view('Vente.VenteTable');
    }
}
