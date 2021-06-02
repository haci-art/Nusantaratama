<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\ScreenshotController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\JudulaboutController;



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

Route::get('/', [AuthController::class, 'home']);

Route::view('/login', 'akun/login');
Route::post('/login', [AuthController::class, 'login']);
Route::view('/regis', 'akun/regis');
Route::post('/regis', [AuthController::class, 'regis']);
Route::view('/respas', 'akun/respass');
Route::put('/respas', [AuthController::class, 'chgrespas']);
Route::view('/laterespas/{name}', 'laterespas');
Route::put('/laterespas/{name}', [AuthController::class, 'laterespas']);

Route::get('/skru', [AdminController::class, 'index']);
Route::get('/adminhome',[HomeController::class,'adminhome']);

//TESTIMONI
Route::get('/testimoni',[TestimoniController::class,'index']);
Route::get('/datatestimoni',[TestimoniController::class,'data']);
Route::get('/simpantestimoni',[TestimoniController::class,'simpan']);
Route::get('/hapus/{kode}',[TestimoniController::class,'hapus']);
Route::get('/edittestimoni/{kode}',[TestimoniController::class,'edit']);
Route::get('/update',[TestimoniController::class,'update']);


Route::get('/kontak',[KontakController::class,'index']);
Route::get('/kiriman',[KontakController::class,'datapesan']);
Route::get('/simpanpesan',[KontakController::class,'simpanpesan']);
Route::get('/hapuspesan/{email}',[KontakController::class,'hapuspesan']);

Route::get('/about',[AboutController::class,'about']);
Route::get('/updateabout',[AboutController::class,'updateabout']);
Route::get('/editabout/{id}',[AboutController::class,'editabout']);

Route::get('/portofolio',[PortfolioController::class,'tambahptf']);
Route::get('/dataportfolio',[PortfolioController::class,'dataportfolio']);
Route::get('/simpanptf',[PortfolioController::class,'simpanptf']);
Route::get('/hapusptf/{kode}',[PortfolioController::class,'hapusptf']);
Route::get('/Editptf/{kode}',[PortfolioController::class,'Editptf']);
Route::get('/updateptf',[PortfolioController::class,'updateptf']);

Route::get('/client',[ClientController::class,'index']);
Route::get('/dataclient',[ClientController::class,'dataclient']);
Route::get('/simpanclient',[ClientController::class,'simpanclient']);
Route::get('/hapusclient/{nama_client}',[ClientController::class,'hapusclient']);
Route::get('/editclient/{nama_client}',[ClientController::class,'editclient']);
Route::get('/updateclient',[ClientController::class,'updateclient']);


Route::get('/ss',[ScreenshotController::class,'tampil']);
Route::get('/datascreenshot',[ScreenshotController::class,'data']);
Route::get('/simpanss',[ScreenshotController::class,'store']);
Route::get('/hapusss/{kode}',[ScreenshotController::class,'hapusss']);
Route::get('/editss/{kode}',[ScreenshotController::class,'editss']);
Route::get('/updatess',[ScreenshotController::class,'updatess']);

Route::get('/legalitas',[LegalitasController::class,'index']);

Route::get('/banner',[BannerController::class,'index']);
Route::get('/databanner',[BannerController::class,'databanner']);
Route::get('/simpanbanner',[BannerController::class,'simpanbanner']);
Route::get('/hapusbanner/{judul_banner}',[BannerController::class,'hapusbanner']);
Route::get('/editbanner/{judul_banner}',[BannerController::class,'editbanner']);
Route::get('/updatebanner',[BannerController::class,'updatebanner']);

Route::any('logout', [AuthController::class, 'logout']);
// Route::get('/', function () {
//     return 'home/index';
// });

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/AHome', [AuthController::class, 'AHome']);
//     Route::put('/Ahome', [AuthController::class, 'chgAHome']);
// });

// Auth::routes();
// Route::get('/x', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

