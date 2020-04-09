<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller

    {


        public function shows($id) {
            $user = User::findOrFail($id);
    
            // $comments = News::find(123)->with('comments');
    
            
            var_dump($user->post->title);
            return view('show', [
                'user' => $user,
                'post' => $user->post,
            ]);
        }
        public function animals() {
            $posts = Post::where('tags', 'animals')->get();
            return view('pages.animals')->with('posts', $posts,);
            
        }

        public function index() {
            
            
            $posts = Post::latest()->get();

            // $users = User::all()->get();
            
            return view('posts.index')->with('posts', $posts,);
        }
        
        public function create() {
            return view('posts.create');
        }
    
        public function show($id) {
            $post = Post::findOrFail($id);
            
            
            return view('posts.show', ['post' => $post]);
        }
    
        public function store(Request $request) {
            
           
        }
        public function destroy($id) {
    
            $post = Post::findOrFail($id);
            $post->delete();
        
            return redirect('/');
        
          }
    
          public function edit($id) {
            $post = Post::findOrFail($id);
    
            return view('posts.edit', ['post' => $post]);
            
          }
    
          public function comment(Request $request, $post_id) {
              $this->validate($request [
    
              ]);
          }
    }
    
