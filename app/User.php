<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cache;
class User extends Authenticatable
{
	use Notifiable;


		protected $table = 'users';

	
	/**
	* The attributes that are mass assignable.
	     *
	     * @var array
	     */
	    protected $fillable = [
	        'firstname','lastname', 'email', 'password', 'avatar',
	        'btype', 'bname' , 'address', 'city', 'state', 'country', 'zipcode', 'phone_number', 'type'
	    ];
	
	
	/**
	* The attributes that should be hidden for arrays.
	     *
	     * @var array
	     */
	    protected $hidden = [
	        'password', 'remember_token',
	    ];
	
	
	
	public function getName()
	    {
		$name = ucfirst($this->firstname) . " " . ucfirst($this->lastname);
		return $name;
	}




		public function routeNotificationForPlivo()
	{
		// Country code, area code and number without symbols or spaces
		return preg_replace('/\D+/', '', $this->phone_number);
	}


	    public function groups()
	{
		return $this->belongsToMany('App\Group','group_user', 
       'user_id','group_id');
	}
	

	    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = $password !== '' ? $password : $this->password;
    }


	public function contacts()
	{
		return $this->belongsToMany('App\User', 'contacts_users', 'user_id', 'contact_id');
	}



		public function addContact($id)
	{
		$this->contacts()->attach($id);
	}

	public function removeContact($id)
	{
		$this->contacts()->detach($id);
	}



}
