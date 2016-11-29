<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use WorldCountries;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;




class RegisterController extends Controller
{
	
	/*
	|--------------------------------------------------------------------------
	    | Register Controller
	    |--------------------------------------------------------------------------
	    |
	    | This controller handles the registration of new users as well as their
	    | validation and creation. By default this controller uses a trait to
	    | provide this functionality without requiring any additional code.
	    |
	    */
	
	use RegistersUsers;
	

    use VerifiesUsers;
	
	
	/**
	* Where to redirect users after login / registration.
	     *
	     * @var string
	     */
	    protected $redirectTo = '/dashboard';

	
	
	
	/**
	* Create a new controller instance.
	     *
	     * @return void
	     */
	    public function __construct()
	    {
		$this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
		$this->redirectIfVerified = '/dashboard';
	}
	
	
	/**
	* Get a validator for an incoming registration request.
	     *
	     * @param  array  $data
	     * @return \Illuminate\Contracts\Validation\Validator
	     */
	    protected function validator(array $data)
	    {
		return Validator::make($data, [
		            'firstname' => 'required|max:255',
		            'lastname' => 'required|max:255',
		            'address' => 'required|max:255',
		            'state' => 'required|max:255',
		            'country' => 'required|max:255',
		            'zipcode' => 'required|max:255',
		            'phone' => 'required|max:13',
		            'email' => 'required|email|max:255|unique:users',
		            'password' => 'required|min:6|confirmed',
		        ]);
	}
	
	
	/**
	* Create a new user instance after a valid registration.
	     *
	     * @param  array  $data
	     * @return User
	     */
	    protected function create(array $data)
	    {
		
		$type = 'personal';
		
		if( isset($data['btype']) && isset($data['bname']) )
        {
			$type = 'business';
		}
		else{
			$data['btype'] = null;
			$data['bname'] = null;	
		}
		$countryModel = WorldCountries::getCountryModel();
		$stateModel = WorldCountries::getStateModel();
		$cityModel = WorldCountries::getCityModel();

		$country = $countryModel->where('id',$data['country'])->first();
		$state = $stateModel->where('id',$data['state'])->first();
		$city = $cityModel->where('id',$data['city'])->first();

		
		$user = User::create([
		            'firstname' => $data['firstname'],
		            'lastname' => $data['lastname'],
		            'btype' => $data['btype'],
		            'bname' => $data['bname'],
		            'address' => $data['address'],
		            'city' => $city->name,
		            'state' => $state->name,
		            'type' => $type,
		            'country' => $country->name,
		            'zipcode' => $data['zipcode'],
		            'phone_number' => preg_replace('/\D+/', '', $data['phone']),
		            'email' => $data['email'],
		            'password' => bcrypt($data['password']),
		        ]);

			UserVerification::generate($user);
            UserVerification::send($user, 'My Custom E-mail Subject');

				return $user;
	}
	
	
	
	
}
