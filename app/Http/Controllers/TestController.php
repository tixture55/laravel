<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoge;
use DB;

class TestController extends Controller
{
	public function index(Hoge $hoge)
    {
        // 「そういう気分じゃないんだ...」だそう。
        // つまりインスタンスが新しく生成されていまっている。
        $hoge->sayHello();
	$users = DB::select('select * from posts');
	
	$result = DB::table('tickets')
            ->where('title', '=', 'John')
            ->orWhere(function ($query) {
                $query->where('posts_id', '>', 1)
                      ->where('status', '<>', 'open');
            })
            ->get();

	//DB::table('posts')->remember(120)->get();
       
	//$column_diff = $users = DB::table('tickets')
        //        ->whereColumn('posts_id', 'task_id');
 
	//return view('about', ['users' => $users , 'column' => $column_diff]); 
	//return view('about', ['users' => $users]); 
	return view('about', ['users' => $result]); 
        //$user = $this->users->find($id);

        //return view('user.profile', ['user' => $user]);
        // 「こんにちは！」
       //\App::make('hoge')->sayHello();
    }
}
