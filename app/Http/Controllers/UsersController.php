<?php 

namespace App\Http\Controllers;

use Monolog\Handler\Curl\Util;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserCreateRequest;
use App\Utilisateur;
use Redirect;

class UsersController extends Controller{

    public function login_form(){
    	//if(!Session::has('ID_User'))
        $user = new Utilisateur();
        if($user->isConnected()){
            return Redirect::to('/muffinbox');
        }else{
            return view('login-form');
        }
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
            $active = $result->active;
    		if(!empty($ID)){
                Session::put('ID_User', $ID);
                Session::put('login', $login);
                Session::put('active',$active);
                if($user->isActive()){
                    return Redirect::to('/muffinbox');
                }else{
                    //var_dump($user->isActive());
                    Session::flush();
                    return redirect()->back()->withErrors(['invalid'=>'Votre compte n\'est pas actif. Veuillez contacter votre administrateur']);
                }
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

    public function create(){
        if(!Session::has('ID_User'))
            return view('users/create');
        else
            return Redirect::to('/index');
    }

    public function create_check(UserCreateRequest $request){
        if(!Session::has('ID_User')){
            $login = $request->input('login-username');
            $pass = password_hash($request->input('login-password'),PASSWORD_DEFAULT);
            $pass2 = password_hash($request->input('login-password2'),PASSWORD_DEFAULT);
            $email = $request->input('login-mail');

            $user = new Utilisateur();
            $result = $user->createUser($login,$pass,$email);
            if(!empty($result)){
                Session::put('alert-success', 'Inscription efectuée.');
                return redirect()->back();
            }else{
                //$request->session()->flash('alert-error', 'User was successful added!');
                return redirect()->back()->withErrors(['error'=>'Erreur lors de la création du compte']);
            }
        }else{
            return Redirect::to('/');
        }
    }
}