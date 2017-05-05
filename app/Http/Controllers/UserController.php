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

        return view('about', ['users' => $users]); 
        //$user = $this->users->find($id);

        //return view('user.profile', ['user' => $user]);
    }
}
