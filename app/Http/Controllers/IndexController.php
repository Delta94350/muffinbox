<?php 

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Utilisateur;
use Redirect;
use File;

class IndexController extends Controller{

	public function index(){
		if(!Session::has('ID_User')){
			return view('login-form');
		}else{
			return view('Index/index');
		}
	}

	

	public function muffinbox(){
		if(!Session::has('ID_User')){
			return view('login-form');
		}else{
			$path = public_path().DIRECTORY_SEPARATOR.'videos';
			//$dirs = scandir(public_path().DIRECTORY_SEPARATOR.'videos');
			$d = dir($path);
			$d_root = true;
			return view('Index/muffinbox')->with('dirs',$d)->with('path',$path)->with('d_root',$d_root)->with('cd','');
		}
	}


	public function muffinbox_dir($dir){
		if(!Session::has('ID_User')){
			return view('login-form');
		}else{
			$path = public_path().DIRECTORY_SEPARATOR.'videos'.DIRECTORY_SEPARATOR.$dir;
			//$dirs = scandir(public_path().DIRECTORY_SEPARATOR.'videos');
			$d = dir($path);
			$d_root = false;
			return view('Index/muffinbox')->with('dirs',$d)->with('path',$path)->with('d_root',$d_root)->with('cd',$dir);
		}
	}

	public function muffinbox_file($file){
		if(!Session::has('ID_User')){
			return view('login-form');
		}else{
			$path = public_path().DIRECTORY_SEPARATOR.'videos'.DIRECTORY_SEPARATOR.$file;
			//$dirs = scandir(public_path().DIRECTORY_SEPARATOR.'videos');
			/*$d = dir($path);
			$d_root = false;*/
			return view('Index/muffinbox_file')->with('path',$path)->with('file',$file);
		}
	}
}