<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Post;
class PostController extends Controller
{

    public function index() {
        

        $posts = Post::latest()->get();
        
        return view('posts.index')->with('posts', $posts);
    }
    
    public function create() {
        return view('posts.create');
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request) {
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        // $post->tags = $request->input('tags[]');
        
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
