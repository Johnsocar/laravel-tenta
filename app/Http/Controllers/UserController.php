<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
        $users = \App\User::with('post')->get();

        // $user = User::findOrFail($id);

        // // $comments = News::find(123)->with('comments');

        // $post = Post::find();
        // // var_dump($user->post->);
        return view('posts.show');
        //     'user' => $user,
        //     'post' => $user->post,
    
    }
}
