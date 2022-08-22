<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\models\Product;
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
        $videos = product::all();
        return view('dashboard', compact('videos'));
    })->name('dashboard');
});
<<<<<<< HEAD
 Route::get('/', function () {
    $videos = product::all();
    return view('dashboard', compact('videos'));
}); 
=======
// Route::get('/', function () {
//     $videos = product::all();
//     return view('dashboard', compact('videos'));
// });
>>>>>>> 57d929c7a4ba647753683d1dbd3c37f8a1834fc1
Route::post('/likePost',[Controller::class, 'likePost']);


