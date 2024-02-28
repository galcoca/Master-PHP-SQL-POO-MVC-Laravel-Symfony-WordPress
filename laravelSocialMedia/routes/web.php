<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
//use App\Models\Image;

Route::get('/', function () {

    /* ORM TEST
    $images = Image::all();

    foreach ($images as $image) {
        echo $image->image_path."<br/>";
        echo $image->description."<br/>";
        echo $image->user->name.' '.$image->user->surname."<br/>";

        
        if(count($image->comments) >= 1){
            echo "<h4>Comments</h4>";
            foreach ($image->comments as $comment) {
                echo $comment->user->name.' '.$comment->user->surname.": ";
                echo $comment->content."<br/>";
            }
        }

        echo "Likes: ".count($image->likes);

        echo "<hr/>";
    }
    */
    return view('welcome');
});

Auth::routes();

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/image/{filename}', [HomeController::class, 'getImage'])->name('home.images');
});

Route::prefix('post')->group(function () {
    Route::get('/{id}', [PostController::class, 'detail'])->name('post.detail');
    Route::post('/comment/{id}', [PostController::class, 'comment'])->name('post.comment');
});

Route::prefix('user')->group(function () {
    Route::get('/config', [UserController::class, 'config'])->name('user.config');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/avatar/{filename}', [UserController::class, 'getImage'])->name('user.avatar');
});

Route::prefix('image')->group(function () {
    Route::get('/create', [ImageController::class, 'create'])->name('image.create');
    Route::post('/update', [ImageController::class, 'save'])->name('image.save');
});
