<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendSms;
use App\Http\Requests;
use Auth;
use App\User;
use App\Group;
use Carbon\Carbon;

class RemindersController extends Controller
{
   public function __construct(){
   	//
   }


    public function Sendreminder (Request $request) {


      dd($request->all());
    	//  get a string of users phone_numbers
	   	$list = $this->GetUsers($request->groud_id);
	   	// Get Currently authenticated User
	   	// $sender  = Auth::user();
        $sender = User::find($request->user_id);


	   	// Get delay time in seconds
	   	//$delay = $this->GetDelayTime($request->date, $request->time,$request->tz);

	   	// Send reminders
        //  $job = (new SendSms($sender,$list))->delay($delay);

       // $job = new SendSms($sender,$list);
        $this->dispatch((new SendSms($sender,$list))->delay(30));
       //  $this->dispatch($job);
   		// Saves Reminder informations to database
   		//$this->notif($request->groud_id,$list,$delay);
        return response()->json('GREAT');
   		//return back()->with('success','Reminder set');
   }


   public function GetDelayTime($date, $time,$tz) {


   	$unparsed = $date + $time + $tz;
   	$parsed = Carbon::parse($data);
   	$now = Carbon::now();

   	$difference = $now->diff($parsed);


   	return $delay;
   }

   public function GetUsers($id)
   {
    $users = Group::findOrfail($id)->users->implode('phone_number', '<');

    return $users;
   }


   public function notif ($id,$list,$delay) {
   	$group = Group::findOrfail($id);
   	$users = User::where('phone_number', $list)->get();
   	$date = Carbon::now()->addSeconds($delay);




   	return 'ss';
   }

}
