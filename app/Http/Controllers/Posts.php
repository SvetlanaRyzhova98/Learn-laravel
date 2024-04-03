<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posts extends Controller
{
    public function index(){
        $posts = [['id'=>1], ['id'=>2]];
        return view('posts.index', [
            'posts' => $posts,
            'some' => 100
    ]);
    }
}
