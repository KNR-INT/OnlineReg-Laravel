<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ImageUploadController;

use App\Models\Student;
use App\Models\Parent1;

Route::get('/', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
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

Route::post('loginWithOtp', [CustomAuthController::class,'loginWithOtp'])->name('loginWithOtp');
Route::get('loginWithOtp', function () {
    return view('auth/OtpLogin');
})->name('loginWithOtp');

Route::any('sendOtp', [CustomAuthController::class,'sendOtp']);

Route::post('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 
Route::get('newapp', [CustomAuthController::class, 'newapp'])->name('newapp'); 




Route::post('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 
Route::get('guidelinesmont', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 


Route::post('onlinereg', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 
Route::get('onlinereg', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 

Route::post('parents_details', [CustomAuthController::class, 'parents_details'])->name('parents_details'); 
Route::get('parents_details', [CustomAuthController::class, 'parents_details'])->name('parents_details'); 

Route::post('upload_doc', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 
Route::get('upload_doc', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 


Route::post('application_details', [CustomAuthController::class, 'application_details'])->name('application_details'); 
Route::get('application_details', [CustomAuthController::class, 'application_details'])->name(''); 

Route::post('payment', [CustomAuthController::class, 'payment'])->name('payment'); 
Route::get('payment', [CustomAuthController::class, 'payment'])->name('payment'); 

Route::post('admitted', [CustomAuthController::class, 'admitted'])->name('admitted'); 
Route::get('admitted', [CustomAuthController::class, 'admitted'])->name('admitted'); 

Route::post('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 
Route::get('myapp', [CustomAuthController::class, 'myapp'])->name('myapp'); 

Route::post('draft', [CustomAuthController::class, 'draft'])->name('draft'); 
Route::get('draft', [CustomAuthController::class, 'draft'])->name('draft'); 

Route::post('submited', [CustomAuthController::class, 'submited'])->name('submited'); 
Route::get('submited', [CustomAuthController::class, 'submited'])->name('submited');

Route::get('insert','CustomAuthController@insertform');
Route::post('create','CustomAuthController@insert');


//  backend_integration

Route::get('students', [CustomAuthController::class, 'onlinereg']);
Route::get('store-student', [StudentController::class, 'store']);
Route::get('store-parent', [ParentsController::class, 'store']);
Route::get('parents_details', [ParentsController::class, 'parents_details']);
Route::get('get-data/{store-parent}', [ParentsController::class, 'edit']);


  
  
// Route::get('image-upload', [ ImageUploadController::class, 'upload_doc' ])->name('image.upload');
// Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'upload_doc'])->name('images.view');

Route::get('students', [CustomAuthController::class, 'application_details']);


Route::get('/users/{id}','CustomAuthController@show');