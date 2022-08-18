<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::get('/uploadpage',[Controller::class, 'uploadpage']);
Route::post('/uploadproduct',[Controller::class, 'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $videos = DB::table('product')->get();
        return view('dashboard', compact('videos'));
    })->name('dashboard');
});
Route::get('/', function () {
    $videos = DB::table('product')->get();
    return view('dashboard', compact('videos'));
});

