<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Session;

class Utilisateur extends Model{
    protected $table = 'user';
    public $timestamps = false;

    public function getUser($login_name){
    	return DB::table($this->table)->where('login', $login_name)->first();
    }

    public function createUser($login,$pass,$email){
    	try{
	    	$id = DB::table($this->table)->insertGetId(
	    			array(
	    					'email' => $email,
	    					'login' => $login,
	    					'password' => $pass
	    				)
				);
	    	return $id;
    	}catch(\Exception $e){
    		return null;
    	}
    }

	public function isActive(){
		if(!Session::has('active')){
			return false;
		}else{
			if(Session::get('active')==1){
				return true;
			}
			return false;
		}
	}

	public function isConnected(){
		if(!Session::has('ID_User'))
			return false;
		return true;
	}

	public function hasRights(){
		if($this->isActive() && $this->isConnected()){
			return true;
		}
		return false;
	}

}
