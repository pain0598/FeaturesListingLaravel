<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\PropertyInfo;
use App\Models\NotifyDetail;
use App\Models\Login;

class RenterController extends Controller
{
    //

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }

    public function index(){

        $states = State::all();

        return view('pages.home',[
            'states' => $states
        ]);
    }

    public function getCitieslist($id){
        // $getcities = City::where()
    }


    public function propertyListing(){
        return view('pages.propertyListing');
    }


    public function renterDashboard(){
        return view('dashboard.renterdashboard');
    }

    public function addProperty(){
        return view('property.addProperty');
    }

    public function addPropertyDetails(){
        return view('property.addPropertyDetails');
    }

    public function myFavorites(){
        return view('pages.favorites');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function noteMessages(){
        return view('pages.noteMessages');
    }
}
