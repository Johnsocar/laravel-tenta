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
            
            // $request->user()->id;  
            
            $post = new Post();
            
            // $user = App\User::
            // auth()->user();
            // Session::get('user_id');
            // $post->user_id=$request->get('user_id');
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            // $post->user_id = $request->input('user_id');
            $post->tags = request('tags');
            
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/post/', $filename);
                $post->image = $filename;
            } else {
                return $request;
                $post->image = '';
            }
    
            $post->save();
    
            return view('posts.create')->with('post',$post);
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
    
