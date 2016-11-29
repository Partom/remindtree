<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserformRequest extends FormRequest
{
	
	/**
	* Determine if the user is authorized to make this request.
	     *
	     * @return bool
	     */
	    public function authorize()
	    {
		return true;
	}
	
	
	/**
	* Get the validation rules that apply to the request.
	     *
	     * @return array
	     */
	    public function rules()
	    {
		return [
		            'firstname' => 'max:255',
				    'lastname' => 'max:255',
				    'address' => 'max:255',
				    'state' => 'max:255',
				    'country' => 'max:255',
				    'zipcode' => 'max:255',
				    'phone_number' => 'max:13',
				    'email' => 'email|max:255',
				    'password' => 'min:6|confirmed',
		        ];
	}
}
