<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/', function (){
//    $email = 'beyenedabi5@gmail.com';
//    $password = 'BEyu!@34';
////    return "the user is Logged in";
//    if(Auth::attempt(['email'=>$email, 'password'=>$password])){
//            return redirect()->intended('/admin');
//    }
//});

require __DIR__.'/auth.php';
