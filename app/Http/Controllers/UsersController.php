<?php 

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Utilisateur;
use Redirect;

class UsersController extends Controller{

    public function login_form(){
    	if(!Session::has('ID_User'))
			return view('login-form');
        else
            return Redirect::to('/muffinbox');
	}

	public function post_login_form(LoginRequest $request){

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $recaptcha_secret = config('recaptcha.key');
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
            $response = json_decode($response, true);
            if($response["success"] === true){
                $valid['recaptcha'] = true;
            }else{
                return redirect()->back()->withErrors(['lol'=>'Etes-vous un robot ? '])->withInput();
            }
        } 

        $login= $request->input('login-username');
		$pass=$request->input('login-password');

        $user = new Utilisateur;
        $result = $user->getUser($login);
        var_dump($result);

		if(password_verify($pass,$result->password)){
			$ID = $result->ID_User;
            $login = $result->login;
    		if(!empty($ID)){
                Session::put('ID_User', $ID);
                Session::put('login', $login);
                return Redirect::to('/muffinbox');
    		}else{
    			return redirect()->back()->withErrors('invalid','Couple login/mot de passe inconnu')->withInput(Input::except('login-password'));
    		}
		}else{
			return redirect()->back()->withErrors(['invalid'=>'Couple login/mot de passe inconnu'])->withInput(Input::except('login-password'));
		}       
	}

    public function logout(){
        if(Session::has('ID_User')){
            Session::flush();          
        }
        return Redirect::to('/');
    }
}