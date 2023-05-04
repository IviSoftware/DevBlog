<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        $posts = Post::latest('id')->first()->paginate();
        return view('blog',["posts"=>$posts]);
    }

    public function show(Post $post){
        return view('post',["post"=>$post]);
    }
}
