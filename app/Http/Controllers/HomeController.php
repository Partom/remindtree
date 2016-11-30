<?php

namespace App\Http\Controllers;
use WorldCountries;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        //
    }
    

    public function index()
    {
        $countryModel = WorldCountries::getCountryModel();
        $countries = $countryModel->pluck('name' ,'id')->toarray();
        return view('admin.home')->with('countries', $countries);
    }
    
    public function homeindex()
    {
        if (Auth::user())
        {
            return redirect('/dashboard');
        }
        return view('landing.home');
    }
	
    public function ttt()
    {
        
        $tt = Auth::user()->groups;
        dd($tt);
    }
    
}