<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use WorldCountries;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;
use App\Notifications\Smsverification;


class ApiController extends Controller
{
	public function verifyphone(Request $request) {


		// if($request->session()->has('attemp'))
		// {
		// 	$i = $request->session()->get('attemp') + 1;
		// }
		// else
		// {
		// 	$request->session()->put('attemp', 1);
		// }
		
	
		 
		$code = \App\Phonev::where('phone_number',$request->phone_number)->first();

		
		if($code != null)
		{
		$number= $code->verification_code;
	//	$code->notify(new Smsverification($number));
		return response()->json([
			'phone_number' => $code->phone_number,
			'verification_code' => $code->verification_code,
			'status'	=> 'old',
		]);
		}
	//	$number = mt_rand(1000, 9999);
	$number = 5000;
		try {
			
		 $flight = \App\Phonev::create(['phone_number' => $request->phone_number,'verification_code' => $number,]);
		}
		catch(Exception $exception){
			$errorCode = $exception->errorInfo[1];
			
			return response()->json([
						'status' => 'error',
						'error_code' => $errorCode,
					]);
		}
	//	$code->notify(new Smsverification($number));
		return response()->json([
			'phone_number' => $flight->phone_number,
			'verification_code' => $flight->verification_code,
			'status'	=> 'new',
		]);
	}
	
	
	
	
	
	
	
	
	
	
	
	public function getcountries(){
		$countryModel = WorldCountries::getCountryModel();
		$countries = $countryModel->get();
		return response()->json($countries);
	}
	public function getstate(Request $request){
		
		$stateModel = WorldCountries::getStateModel();
		$states = $stateModel
				->where('country_id',$request->country_id)->pluck('name', 'id')->toarray();
		
		return response()->json($states);
	}
	
	public function getcity(Request $request){
		
		$cityModel = WorldCountries::getCityModel();
		$cities = $cityModel
				->where('state_id',$request->state_id)->pluck('name', 'id')->toarray();
		
		return response()->json($cities);
	}
	
	
	
}
