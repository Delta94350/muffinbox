<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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

}
