<?php

namespace App\Http\Controllers;
use WorldCountries;
use Illuminate\Http\Request;
use Auth;
use Plivo\RestAPI;

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
    public function plivo(){
        $auth_id = "MAYJM1NJK1N2VHOGQ5YZ";
        $auth_token = "MTZlMWQyYWFmYzMxMWFjYWNkY2ZlM2YwYTY4ZDUy";

        $p = new RestAPI($auth_id, $auth_token);

        // Set message parameters
        $params = array(
            'src' => '923013669918', // Sender's phone number with country code
            'dst' => '923217641475', // Receiver's phone number with country code
            'text' => 'Hi, Message from Plivo', // Your SMS text message
            //'url' => 'https://generictechinc.com/training', // The URL to which with the status of the message is sent
            //'method' => 'POST' // The method used to call the url
        );
        // Send message
        $response = $p->send_message($params);

        // Print the response
        echo "Response : ";
        print_r ($response['response']);

        // Print the Api ID
        echo "<br> Api ID : {$response['response']['api_id']} <br>";

        // Print the Message UUID
        echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";

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
