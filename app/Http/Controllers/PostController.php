<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.list',compact('posts'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->contents;
        $post->user_id = $request->user_id;
        $post->image = $request->image;
        $post->save();
        return redirect()->route('post.list');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.update',compact('post'));
    }
    public function update(Request $request ,$id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->contents;
        $post->user_id = $request->user_id;
        $post->image = $request->image;
        $post->save();
        return redirect()->route('post.list');
    }
    public function destroy($id)
    {
        $post =Post::find($id);
        $post->comment()->delete();
        $post->delete();
        return redirect()->route('post.list');
    }

}
