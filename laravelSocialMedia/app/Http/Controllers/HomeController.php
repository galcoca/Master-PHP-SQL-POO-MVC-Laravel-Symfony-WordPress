<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Image::orderBy('id', 'desc')->paginate(5);

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function getImage($filename) {
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
}
