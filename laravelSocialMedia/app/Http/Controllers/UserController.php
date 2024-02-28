<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function config() {
        return view('user.config');
    }

    public function update(Request $request) {
        $user = \Auth::user();
        $id = $user->id;
        
        $validate = $this->validate($request,[
            'name' => ['required', 'string', 'max:100'],
            'surname' => ['required', 'string', 'max:200'],
            'nick' => ['required', 'string', 'max:100','unique:users,nick,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ]);
        
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
        
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;

        $imagePath = $request->file('image_path');
        if($imagePath){
            $imagePathName = time().$imagePath->getClientOriginalName();
            Storage::disk('users')->put($imagePathName, File::get($imagePath));
            $user->image = $imagePathName;
        }

        if($user->update())
            return redirect()->route('user.config')->with(['success' => 'User has been updated']);
        else
           return redirect()->route('user.config')->with(['error' => 'Unable to update the user']);
    }

    public function getImage($filename) {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
