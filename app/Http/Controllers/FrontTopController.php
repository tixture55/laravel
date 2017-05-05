<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illiminate\Foundation\Application;


class FrontTopController extends Controller
{
	
	public function __construct()
    {
        //$this->middleware('auth.basic.once', ['except' => ['index', 'show']]);
    }


	public function about() {
      
 
//$users = DB::select('select * from posts where name = ?', [1]);
$users = DB::select('select * from posts');

        return view('about', ['users' => $users]); 
    	}
}
