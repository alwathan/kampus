<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

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
            Route::resources([
                'menus' => App\Http\Controllers\MenuController::class
            ]);
            Route::resources([
                'users' => App\Http\Controllers\UserController::class
            ]);
            Route::resources([
                'settings' => App\Http\Controllers\SettingController::class
            ]);
            Route::post('upload_image',[PostController::class, 'uploadImage'])->name('upload');
        });
    });

    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::get('/rimg/{w}/{h}/{url}', function (Request $request,$url) {
    //
    $img = Image::make($request->url);

    //manipulate image
    $img->fit($request->w, $request->h, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });

    // create response and add encoded image data
    $response = Response::make($img->encode('jpg'));

    // set content-type
    $response->header('Content-Type', 'image/jpg');

    // output
    return $response;
})->where('url', '.*');

Route::group(['middleware'=>'CustomCKFinderAuth'], function(){
    Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
        ->name('ckfinder_connector');

    Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
        ->name('ckfinder_browser');

    Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
        ->name('ckfinder_examples');
});
Route::get('/indeks/{slug}', [App\Http\Controllers\PostController::class, 'indeks']);

$slugs = DB::table('menus')->where('jenis','kategori')->pluck('slug');
foreach($slugs as $slugs_r){
    $slugs_a[] = $slugs_r;
}
if(!empty($slugs_a)){
    $slugs = implode('|',$slugs_a);
}

Route::get('/{slug?}', [App\Http\Controllers\PostController::class, 'indeks'])->where('slug', $slugs);

Route::get('/{slug}', [App\Http\Controllers\MenuController::class, 'show']);
Route::get('/{kategori}/{slug}', [App\Http\Controllers\PostController::class, 'show']);


/*
GET	/photos	index	photos.index
GET	/photos/create	create	photos.create
POST	/photos	store	photos.store
GET	/photos/{photo}	show	photos.show
GET	/photos/{photo}/edit	edit	photos.edit
PUT/PATCH	/photos/{photo}	update	photos.update
DELETE	/photos/{photo}	destroy	photos.destroy
*/