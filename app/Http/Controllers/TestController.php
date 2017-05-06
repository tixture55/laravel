<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoge;

class TestController extends Controller
{
	public function index(Hoge $hoge)
    {
        // 「そういう気分じゃないんだ...」だそう。
        // つまりインスタンスが新しく生成されていまっている。
        $hoge->sayHello();

        // 「こんにちは！」
        //\App::make('hoge')->sayHello();
    }
}
