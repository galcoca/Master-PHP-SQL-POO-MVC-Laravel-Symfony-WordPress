<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    
    public function index($page = 1){

        $title = "List of the Movies";

        return view('movies.index', [
            'title' => $title,
            'page' => $page
        ]);
    }

    public function movieDetail(){
        return view('movies.detail');
    }

    public function redirect(){
        return redirect()->route('movies.detail');
    }

    public function movieForm() {
        return view('movies.form');
    }

    public function submitForm(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');

        return "The name is: $firstname $lastname and the e-mail is $email";
    }

}
