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

     public function AchatsDashboard()
    {
        return view('AchatDashboard');
    } 

     public function UserProfile()
    {
        return view('Profile');
    }

    //Vente
    public function VentesDashboard()
    {
        return view('Vente.VentesDashboard');
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

    public function achat()
    {
        return view('Achat.AchatDashoard');
    }

    //Stock

    public function StockDashboard()
    {
          return view('Stock.StockDashboard');
    }

    //Prod 
    public function ProductionDashboard()
    {
           return view('Production.ProductionDashboard');
    }

    public function  DeuxiemeChoixDashboard()
    {
           return view('Production.DeuxiemeChoixDashboard');
    }


}
