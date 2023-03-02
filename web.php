<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Url Salam
Route::get('/salam',function(){
    return "Assalamu'alaikum Selamat Pagi Dunia";
});

// Route dengan Parameter
Route::get('/pegawai/{nama}/{divisi}',function($nama,$divisi){
    return "Nama Pegawai : ".$nama."<br/>Departemen : ".$divisi;
});

// Route dengan Redirect Page Views
Route::get('/kabar', function () {
    return view('kondisi');
}); 

// Route /mahasantri
Route::get('/mahasantri',[MahasantriController::class, 'dataMahasantri']);

