<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Phonev extends Model
{

	use Notifiable;


	 protected $table = 'phone_verification';


   	    protected $fillable = [
	        'phone_number','verification_code', 'created_at'
	    ];



		public function routeNotificationForPlivo()
	{
		// Country code, area code and number without symbols or spaces
		return preg_replace('/\D+/', '', $this->phone_number);
	}
}
