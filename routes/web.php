<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommentController;
use App\Models\product;
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
    //echo "yess";die;
    return view('welcome');
});

Route::get('/uploadpage',[Controller::class, 'uploadpage']);
Route::post('/uploadproduct',[Controller::class, 'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $videos = User::with(['posts'])->get()->toArray();
     // $videos1 = json_encode($videos);
    //  echo "<pre>";
    //   print_r($videos);die;
        return view('dashboard', compact('videos'));
    })->name('dashboard');
});

Route::post('/likePost',[Controller::class, 'likePost']);
Route::post('/unlikePost',[Controller::class, 'unlikePost']);

Route::get('/videodetail/{id}',[Controller::class, 'videodetail']);
Route::get('/channel',[Controller::class, 'channel']);
Route::get('/channel/{id}',[Controller::class,'detail']);
Route::post('/comment/store', [CommentController::class,'store'])->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');



