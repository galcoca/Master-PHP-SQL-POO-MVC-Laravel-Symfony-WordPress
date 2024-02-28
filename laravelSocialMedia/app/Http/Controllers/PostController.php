<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Comment;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detail($id){
        $post = Image::where('id', $id)->first();

        return view('posts.detail', [
            'post' => $post
        ]);
    }

    public function comment($id, Request $request){
        $commentModel = new Comment();
        $validate = $this->validate($request,[
            'comment' => ['required', 'string', 'max:500']
        ]);

        $comment = $request->input('comment');

        if($comment){
            $user = \Auth::user();
            $commentModel->content = $comment;
            $commentModel->user_id = $user->id; 
            $commentModel->image_id = $id; 
        }

        if($commentModel->save())
            return redirect()->route('post.detail',$id)->with(['success' => 'Comment created']);
        else
            return redirect()->route('post.detail',$id)->with(['error' => 'Unable to create the comment']);
    }
}
