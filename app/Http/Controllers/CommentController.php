<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Comment;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        
        $comment = new Comment;
        $comment->body = $request->get('body');
        $id = auth()->user()->id;
        $comment->parent_id = 0;
        $comment->product_id = $request->get('post_id');
        $comment->commentable_id = 0;
        $comment->commentable_type = 'You Tube';
        $comment->user()->associate($id);
        $comment->save();

        return response()->json([
            'comment' => $comment,
            'message' => 'comment store successfully !!'
        ]);
    }

    public function replyStore(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $id = auth()->user()->id;

        $reply = new Comment();

        $reply->body = $request->get('body');

        $reply->user()->associate($id);

        $reply->parent_id = $request->get('comment_id');

        $reply->commentable_id = 0;

        $reply->commentable_type = 'You Tube';

        $post = product::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();
    }
}
