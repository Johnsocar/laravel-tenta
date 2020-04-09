<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{

    public function welcome() {
        $posts = Post::latest()->get();

        return view('posts.front', [
            'posts' => $posts, 
        ]);
    }
    
    public function index() {
        
        $user = Auth::user();

        $posts = Post::latest()->get();
        
        return view('posts.index', [
            'posts' => $posts, 
            'user' => $user,
        ]);
    }
    
    public function create() {
        return view('posts.create');
        
    }

    public function show($id) {

        $user = Auth::user();

        $post = Post::findOrFail($id);

        
        return view('posts.show', [
            'post' => $post,
            'user' => $user,
            ]);
    }

    public function store(Request $request) {
        $post = new Post;

        $post->title = request('title');
        $post->content = request('content');
        $post->user_id = Auth::id();
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
        

        return redirect('/index');

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
