<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
   
    Route::middleware('auth')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [PostController::class, 'index']);
            Route::resources([
                'posts' => PostController::class
            ]);
        });
    });

    Route::resources([
        'login' => LoginController::class
    ]);

    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout', [LoginController::class, 'logout']);
});


/*
GET	/photos	index	photos.index
GET	/photos/create	create	photos.create
POST	/photos	store	photos.store
GET	/photos/{photo}	show	photos.show
GET	/photos/{photo}/edit	edit	photos.edit
PUT/PATCH	/photos/{photo}	update	photos.update
DELETE	/photos/{photo}	destroy	photos.destroy
*/