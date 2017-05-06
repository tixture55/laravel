<?php

namespace App\Http\Controllers;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * ユーザリポジトリの実装
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 新しいコントローラインスタンスの生成
     *
     * @param  UserRepository  $users
     * @return void
     */
    //public function __construct(UserRepository $users)
    public function __construct(FrontTopController $users)
    {
        $this->users = $users;
    }

    /**
     * 指定ユーザのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    //public function show($id)
    public function show()
    {
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
    }
}
