<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Like;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like(Request $request) {
        $imageId = $request->get('id');
        
        $user = \Auth::User();

        $like = new Like();

        $issetLike = Like::where('user_id', $user->id)
                        ->where('image_id', $imageId)
                        ->count();
        
        if($issetLike == 0){
            $like->user_id = $user->id;
            $like->image_id = (int)$imageId;
            $like->save();
            
            return response()->json([
                'like' => $like,
                'success' => true
            ]);
        } else {
            return response()->json([
                "error" => "The like already exists"
            ]);
        }
    }

    public function dislike(Request $request) {
        $imageId = $request->get('id');

        $user = \Auth::User();

        $like = Like::where('user_id', $user->id)
                        ->where('image_id', $imageId)
                        ->first();

        if($like) {
            $like->delete();
            return response()->json([
                'like' => $like,
                'message' => 'Unlliked',
                'success' => true
            ]);
        } else {
            return response()->json([
                "error" => "The like already exists"
            ]);
        }
    }

}
