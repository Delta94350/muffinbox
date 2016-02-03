<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Utilisateur extends Model{
    protected $table = 'User';
    public $timestamps = false;

    public function getUser($login_name){
    	return DB::table($this->table)->where('login', $login_name)->first();
    }

}
