<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommentController;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {

        $videos = User::with(['posts','Report_video'])->get()->toArray();
        // $user = auth()->user();
        // echo "<pre>";
        // print_r($videos);die;
         return view('product.index', compact('videos'));
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/uploadpage', function () {
    })->name('product');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/channel', function () {
    })->name('channel');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/save_video', function () {
    })->name('save_video');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/uploadpage', function () {
    })->name('product');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/channel', function () {
    })->name('channel');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/watchlater', function () {
    })->name('watchlater');
});

Route::get('/notification', [Controller::class, 'sendNotification']);
//Route::group(['middleware' => ['auth']], function () {
Route::get('/uploadpage', [Controller::class, 'uploadpage']);
Route::post('/uploadproduct', [Controller::class, 'store']);
Route::post('/likePost', [Controller::class, 'likePost']);
Route::post('/unlikePost', [Controller::class, 'unlikePost']);
Route::get('/watch/{id}', [Controller::class, 'videodetail']);
Route::get('/watchlater', [Controller::class, 'watchlater']);
Route::get('/channel/{id}', [Controller::class, 'channel']);
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/subscribe', [Controller::class, 'subscribe']);
Route::get('/setting', [Controller::class, 'setting']);
Route::post('/reply/store', [CommentController::class, 'replyStore'])->name('reply.add');
//Route::post('/save_video', [Controller::class, 'print_r($request->all());die;']);
Route::post('/save_video', [Controller::class, 'save_video']);
Route::post('/rate', [Controller::class, 'rate']);
Route::get('/time', [Controller::class, 'time']);
Route::post('/report', [Controller::class, 'report']);
Route::get('/search', [Controller::class, 'search']);
Route::get('/share', [Controller::class, 'share']);

//});
