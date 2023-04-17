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

     public function UserProfile()
    {
        return view('Profile');
    }

    //Vente
    public function vente()
    {
        return view('Vente.vente');
    }

    public function tableVente()
    {
        return view('Vente.tableVente');
    }
 
    //Achat

    public function tableAchat()
    {
        return view('Achat.tableAchat');
    }

    //Stock

    public function stock()
    {
          return view('Stock.stock');
    }

    //Stock

    public function DeuxiemeChoix()
    {
           return view('2emeChoix.2emechoix');
    }

}
