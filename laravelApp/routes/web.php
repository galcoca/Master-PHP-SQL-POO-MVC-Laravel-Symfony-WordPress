<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FruitController;

Route::get('/', function () {
    return view('welcome');
});
/*

Route::get('/showDate', function () {
    $title = "I'm showing the date";
    return view('testView', array(
        'title' => $title
    ));
});

Route::get('/movies/{title}/{year?}', function($title = 'No movie has been selected', $year = 2019){
    return view('movie', array(
        'title' => $title,
        'year' => $year
    ));
})->where(array(
    'title' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listMovies', function(){

    $title = "Movies List";
    $movieList = array('Batman', 'Spiderman', 'Gran Torino');

    return view('movies.listMovies')
            ->with('title',$title)
            ->with('movieList',$movieList);
});

Route::get('/generic', function(){
    return view('page');
});
*/

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/movies/{page?}', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/detail/{year?}', 
    [MoviesController::class, 'movieDetail'])
    ->name('movies.detail')
    ->middleware('testyear');

Route::get('/form', [MoviesController::class, 'movieForm'])->name('movies.form');
Route::post('/receive', [MoviesController::class, 'submitForm'])->name('movies.submit');
Route::get('/redirect', [MoviesController::class, 'redirect'])->name('movies.redirect');

Route::prefix('fruits')->group(function () {
    Route::get('/', [FruitController::class, 'index'])->name('fruits.index');
    Route::get('/detail/{id}', [FruitController::class, 'fruitDetail'])->name('fruits.detail');
    Route::get('/create', [FruitController::class, 'fruitCreate'])->name('fruits.create');
    Route::post('/save', [FruitController::class, 'saveFruitForm'])->name('fruits.save');
    Route::get('/delete/{id}', [FruitController::class, 'deleteFruit'])->name('fruits.delete');
    Route::get('/edit/{id}', [FruitController::class, 'editFruit'])->name('fruits.edit');
    Route::post('/update/{id}', [FruitController::class, 'updateFruit'])->name('fruits.update');
});

Route::resource('user', UserController::class);