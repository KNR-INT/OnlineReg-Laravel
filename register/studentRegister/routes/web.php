<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// Route::get('header', [CustomAuthController::class, 'header'])->name('header');
// Route::post('header', [CustomAuthController::class, 'header'])->name('header'); 



Route::get('register', [CustomAuthController::class, 'index']);
Route::post('register', [CustomAuthController::class, 'store']);

Route::post('login', [CustomAuthController::class, 'login'])->name('newlogin');
Route::get('otp', [CustomAuthController::class, 'otp'])->name('otp'); 

Route::post('otp', [CustomAuthController::class, 'otp'])->name('otp'); 

Route::post('loginWithOtp', [CustomAuthController::class,'loginWithOtp'])->name('loginWithOtp');
Route::get('loginWithOtp', function () {
    return view('auth/OtpLogin');
})->name('loginWithOtp');

Route::any('sendOtp', [CustomAuthController::class,'sendOtp']);

Route::post('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 
Route::get('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 


Route::post('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 
Route::get('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 

Route::post('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 
Route::get('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 


Route::post('onlinereg', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 
Route::get('onlinereg', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 
