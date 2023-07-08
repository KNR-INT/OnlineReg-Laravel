<?php
 
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CustomAuthController;
    use App\Http\Controllers\StudentController;
    use App\Http\Controllers\ParentsController;
    use App\Http\Controllers\ImageUploadController;
    use App\Http\Controllers\MailController;
    use App\Http\Controllers\OtpController;
    use App\Http\Controllers\OtpMailController;
    use App\Http\Controllers\OtpMail;
    use App\Http\Controllers\WebsiteController;
    use Illuminate\Support\Facades\Hash;
    use App\Http\Controllers\PaytmController;
    use App\Models\PaytmWallet;
    use App\Mail\MyMailable;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Mail\Message;
    use Illuminate\Mail\Mailer;
    use Illuminate\Http\Request;
    use Symfony\Component\Mime\Address;


    use App\Models\Student;
    use App\Models\Parent1;
    

Route::get('/', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout'); 
Route::get('home', [CustomAuthController::class, 'home']); 
Route::post('home', [CustomAuthController::class, 'home']); 



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




Route::post('guidelinesmont/{id}', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 
Route::get('guidelinesmont/{id}', [CustomAuthController::class, 'guidelinesmont'])->name('guidelinesmont'); 


Route::post('onlinereg/{id}', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 
Route::get('onlinereg/{id}', [CustomAuthController::class, 'onlinereg'])->name('onlinereg'); 

Route::post('parents_details/{id}', [CustomAuthController::class, 'parents_details'])->name('parents_details'); 
Route::get('parents_details/{id}', [CustomAuthController::class, 'parents_details'])->name('parents_details'); 

Route::post('upload_doc/{id}', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 
Route::get('upload_doc/{id}', [CustomAuthController::class, 'upload_doc'])->name('upload_doc'); 


Route::post('application_details/{id}', [CustomAuthController::class, 'application_details'])->name('application_details'); 
Route::get('application_details/{id}', [CustomAuthController::class, 'application_details'])->name(''); 

Route::post('payment/{id}', [CustomAuthController::class, 'payment'])->name('payment'); 
Route::get('payment/{id}', [CustomAuthController::class, 'payment'])->name('payment');
Route::post('admitted/{id}', [CustomAuthController::class, 'admitted'])->name('admitted'); 
Route::get('admitted/{id}', [CustomAuthController::class, 'admitted'])->name('admitted'); 
Route::post('payment/{id}', [CustomAuthController::class, 'payment'])->name('payment'); 
Route::get('payment/{id}', [CustomAuthController::class, 'payment'])->name('payment'); 

Route::post('admitted/{id}', [CustomAuthController::class, 'admitted'])->name('admitted'); 
Route::get('admitted/{id}', [CustomAuthController::class, 'admitted'])->name('admitted'); 

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
Route::get('get-data/{store-parent}', [ParentsController::class, 'edit']);
 
// Route::get('image-upload', [ ImageUploadController::class, 'upload_doc' ])->name('image.upload');
// Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/storeImage',[ImageUploadController::class,'storeImage']);
Route::get('/update-applino',[StudentController::class,'updateapplino']);


//For showing an image
Route::get('/view-image',[ImageUploadController::class,'upload_doc'])->name('images.view');
Route::get('students', [CustomAuthController::class, 'application_details']);
Route::get('create-id', [CustomAuthController::class, 'create_id']);


Route::get('/users/{id}','CustomAuthController@show');

// /For storing an image
Route::post('/storeImage',[ImageUploadController::class,'storeImage']);
Route::get('/update-applino',[StudentController::class,'updateapplino']);
Route::get('/update-updateadmitted',[StudentController::class,'updateadmitted']);


//For showing an image
Route::get('/view-image',[ImageUploadController::class,'upload_doc'])->name('images.view');
Route::get('students', [CustomAuthController::class, 'application_details']);
Route::get('create-id', [CustomAuthController::class, 'create_id']);

//Paytm Payment
Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');
// Route::get('paytm-sucess-page',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');


Route::get('/postlogin-otpgenerator', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email from Laravel with SMTP configuration.',
    ];

    try {
        Mail::to('nikhiln0712@gmail.com')->send(new MyMailable($details));

        return "Test email sent successfully!";
    } catch (\Exception $e) {
        return "Failed to send test email. Error: " . $e->getMessage();
    }
});
Route::get('/sparkpost', function () {
    Mail::send('emails.test', [], function ($message) {
        $message
            ->from('from@yourdomain.com', 'Your Name')
            ->to('to@otherdomain.com', 'Receiver Name')
            ->subject('From SparkPost with ❤');
    });
});


// Route::get('postlogin', function (Request $request) {
//     $email = $request->input('email');
//     $data = [
//         'name' => $email,
//     ];

//     Mail::send('emails.test', $data, function (Message $message) {
//         $message->to('padmajaac07@gmail.com')
//             ->subject('Test Email');
//     });

//     return 'Email sent successfully!';
// })->name('postlogin');





Route::get('/postlogin', function (Request $request) {
    $email = $request->input('email'); // Assuming the email is sent as a query parameter

    $data = [
        'name' => $email,
        'otp_number' => mt_rand(100000, 999999),
    ];

    Mail::send('emails.test', $data, function (Message $message) use ($email) {
        $message->to($email)
            ->subject('Test Email');
    });

    // $otp_number = 123456; // Assigning a value to the variable

    // Using the variable
    echo "The OTP number is: " . $data['otp_number'];

    return view('otp');
})->name('postlogin');





















