<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Comment;
class CommentController extends Controller
{
    //

    public function store(Request $request)
    {

        //print_r($request->all());die;
        $comment = new Comment;

        $comment->body = $request->get('body');
        $id = auth()->user()->id;
        $comment->parent_id =0;
        $comment->product_id =$request->get('post_id');
        $comment->commentable_id =0;
        $comment->commentable_type ='You Tube';
        $comment->user()->associate($id);
        // echo "<pre>";
        // print_r($comment);die;
        $comment->save();

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $post = product::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }
}
