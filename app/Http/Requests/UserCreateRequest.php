<?php 

namespace App\Http\Requests;

class UserCreateRequest extends Request {

    /**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize(){
		return true;
	}
	
    /**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules(){
		return [
			'login-username' => 'required|max:64',
			'login-password' => 'required|max:64|min:8',
			'login-password2' => 'required|max:64|same:login-password|min:8',
			'login-mail' => 'required|max:64|email'
		];
	}


	public function messages(){
		return [
			'login-username.required' => 'Please provide a login.',
		    'login-password.required' => 'Please provide a password.'
	 	];
  	}
}