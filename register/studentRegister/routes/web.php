<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('/', [CustomAuthController::class, 'home']); 

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::post('dashboard', [CustomAuthController::class, 'dashboard']);
 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 

Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('home', [CustomAuthController::class, 'home']); 
Route::post('home', [CustomAuthController::class, 'home']);

Route::get('register', [CustomAuthController::class, 'index']);
Route::post('register', [CustomAuthController::class, 'store']);

Route::post('login', [CustomAuthController::class, 'login'])->name('newlogin');

Route::get('otp', [CustomAuthController::class, 'otp'])->name('otp'); 
Route::post('otp', [CustomAuthController::class, 'otp'])->name('otp'); 

Route::any('sendOtp', [CustomAuthController::class,'sendOtp']);

Route::post('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 
Route::get('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 

Route::post('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 
Route::get('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 

Route::post('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 
Route::get('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 





Route::get('onlinereg', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 
Route::post('onlinereg', [CustomAuthController::class, 'onlineregpost'])->name('onlinereg.post'); 

Route::get('parents_details',[CustomAuthController::class, 'parents_details'])->name('parents_details'); 
Route::post('parents_details',[CustomAuthController::class, 'parents_detailspost'])->name('parents_details.post'); 

Route::post('upload_doc', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 
Route::get('upload_doc', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 

Route::post('application_details', [CustomAuthController::class, 'application_details'])->name('application_details'); 
Route::get('application_details', [CustomAuthController::class, 'application_details'])->name('application_details'); 

Route::post('payment', [CustomAuthController::class, 'payment'])->name('payment'); 
Route::get('payment', [CustomAuthController::class, 'payment'])->name('payment'); 

Route::post('admitted', [CustomAuthController::class, 'admitted'])->name('admitted'); 
Route::get('admitted', [CustomAuthController::class, 'admitted'])->name('admitted'); 
