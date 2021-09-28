<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        return view('master',compact('posts','users'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request, Post $post)
    {
        $path = $request->file('image')->store('images','public');
        $post->image=$path;
        $post->title = $request->title;
        $post->content = $request->contents;
        $post->user_id = $request->user_id;
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
        if(!$request->hasFile('image')){
            $path= $post->image  ;
        }else{
        $path = $request->file('image')->store('images','public');
        }
        $post->image=$path;
        $post->title = $request->title;
        $post->content = $request->contents;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect()->route('post.list');
    }
    public function detailPost($id)
    {
        $allPost = Post::all()->where('user_id',$id);
        $post = Post::find($id);
        return view('detailPost',compact('post','allPost'));
    }
    public function search(Request $request)
    {
        $users = User::all();
        $text = $request->title;
        $posts =Post::where('title', 'LIKE' , '%' . $text . '%')->get();
        return view('master', compact('posts','users'));
    }
    public function destroy($id)
    {
        $post =Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }

}
