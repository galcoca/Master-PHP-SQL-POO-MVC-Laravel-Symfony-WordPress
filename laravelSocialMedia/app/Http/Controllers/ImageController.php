<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('image.create');
    }

    public function save(Request $request) {
        $imageModel = new Image();

        $validate = $this->validate($request,[
            'description' => ['required', 'string', 'max:200'],
            'image_path' => ['required', 'mimes:jpg,jpeg,png,gif']
        ]);

        $description = $request->input('description');

        $imagePath = $request->file('image_path');
        if($imagePath){
            $user = \Auth::user();
            $imagePathName = time().$imagePath->getClientOriginalName();
            Storage::disk('images')->put($imagePathName, File::get($imagePath));
            $imageModel->image_path = $imagePathName;
            $imageModel->description = $description;
            $imageModel->user_id = $user->id; 
        }

        if($imageModel->save())
            return redirect()->route('home')->with(['success' => 'Post created']);
        else
            return redirect()->route('user.config')->with(['error' => 'Unable to create the post']);
    }
    
}
