<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {
        $post =Post::find($id);
        $comments = Comment::orderBy('id','desc')->where('post_id',$id)->get();
        return view('detailPost',compact('post','comments'));
    }
    public function comment(Request $request, Comment $comment)
    {
        $comment->contents = $request->contents;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back();
    }
}
