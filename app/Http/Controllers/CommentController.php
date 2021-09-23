<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {
        $post =Post::findOrFall($id);
        $comments = Comment::orderBy('id','desc')->where(post_id)->get();
        return view('post.list',compact('post','comments'));
    }
    public function comment(Request $request, Comment $comment)
    {
        $comment->content = $request->contents;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return redirect()->route('post.list');

    }
}
