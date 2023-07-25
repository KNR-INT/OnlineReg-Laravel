<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeEmail;
use App\Mail\OtpMail;
use App\Mail\OtpController;
use App\Models\Mail;
use App\Models\Secondary;

// use Illuminate\Support\Facades\Mail;
use App\Mail\MyMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Otp;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use PDF;




 
class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    } 
 
    public function index()
    {
        return view('login');
    }  

    public function otp(Request $request)
    {
        $otp = $request->otp;
        $session = request()->session()->get('login.email');
    
        if (!empty($session)) {
            $ses_email = $session[0];
            $users = DB::select("SELECT * FROM `otp` WHERE `email` = '$ses_email' ORDER BY `id` DESC LIMIT 1");
    
            if (!empty($users)) {
                $db_otp = $users[0]->otp;
    
                if ($otp == $db_otp) {
                    return redirect('/dashboard');
                } else {
                    return view('dashboard')->with('message', 'Invalid OTP');
                }
            }
        }
    
        return view('dashboard')->with('message', 'Invalid session');
    }
    
 
    public function signup()
    {
        return view('registration');
    }
       
    public function signupsave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'unique:users,email_address,'.$user->id
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("dashboard");
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
      ]);
    }    
     
    public function dashboard()
    {
        $session = request()->session()->get('users.user_id');     
        // echo ($session[0]);
        return view('dashboard');
    }
     
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }

    public function header() {
        return view('headerpage');
    }
    public $successStatus = 200;
    public function loginWithOtp(Request $request){
        Log::info($request);
        $user  = User::where([['email','=',request('email')],['otp','=',request('otp')]])->first();
        if( $user){
            Auth::login($user, true);
            User::where('email','=',$request->email)->update(['otp' => 7878]);
            return view('home');
        }
        else{
            return Redirect::back ();
        }
    }
    
    public function sendOtp(Request $request)
    {    
        $otp = rand(1000,9999);
        Log::info("otp = ".$otp);
        $user = User::where('email','=',$request->email)->update(['otp' => $otp]);
        return response()->json([$user],200);
    }
    
    public function newapp()
    {
        return view('newapp');
    }
    
    public function guidelinesmont()
{
    // $applicationFees = DB::connection('secondary')->table('application_fee')->select('year', 'amount')->get();
    $registrationFee = DB::connection('secondary')->table('application_fee')->value('amount');
    return view('guidelinesmont', ['registrationFee' => $registrationFee]);
}
    

    public function parents_details(){
        return view('parents_details');
       }


       public function upload_doc(){
        return view('upload_image');
    }


public function application_details(Request $request)
{
    $appli_id = $request->input('appli_id');
    $class = $request->input('page_type');
    $students = Student::all();
    return view('application_details', compact('students'));
   return redirect('payment/a?class='.$class."&appli_id=".$appli_id);
   
}

public function payment()
{
    $registrationFee = DB::connection('secondary')->table('application_fee')->value('amount');
    return view('payment', ['registrationFee' => $registrationFee]);
    // return view('payment');
}
public function admitted(Request $request)
{
   
  
    return view('admitted');
}
 public function onlinereg()
    {
        return view('onlinereg');
    }

    public function create_id()
    {
        $session = session()->get('login.email');
        $ses_email = $session[0];
        $sessions = session()->get('users.user_id');
        $ses_userid = $sessions[0];
        $created = date("Y-m-d h:i:s");
        $data = array("email_id" => $ses_email, "user_id" => $ses_userid, "created_at" => $created, "status" => "Draft");
        DB::table('students')->insert($data);
        $users = DB::select("SELECT * FROM `students` WHERE `email_id` = '$ses_email' ORDER BY `id` DESC LIMIT 1");
        $user_id = $users[0]->id;
    
        echo json_encode($user_id);
        exit();
    }
        public function myapp()

        {
            return view('myapp');
        }
        public function draft()
        {
$sessions = request()->session()->get('users.user_id');   
            // print_r($sessions);
            $ses_userid = $sessions[0];

            $student = DB::select("SELECT * FROM `students` WHERE `status` = 'Draft' AND `user_id` = '$ses_userid'");

                return view('draft', compact('student'));        }
        public function submited()
        {
 $sessions = request()->session()->get('users.user_id');   
            // print_r($sessions);
            $ses_userid = $sessions[0];

            $student = DB::select("SELECT * FROM `students` WHERE `status` = 'Submitted ' AND `user_id` = '$ses_userid'");
           

                return view('submited ', compact('student'));    
                }


                public function displayImage($imageName)
                {
                    $path = public_path('public\Image' . $imageName);
            // $request->image->move(public_path('public\Image'), $imageName);
                    if (!File::exists($path)) {
                        abort(404);
                    }
                    $file = File::get($path);
                    $type = File::mimeType($path);
                    $response = Response::make($file, 200);
                    $response->header("Content-Type", $type);
                 return $response;
                }
                
                public function login(Request $request)
                {
                    $email = $request->email;
                    session()->push('login.email', $email);
                
                    $users = DB::select("SELECT * FROM `users` WHERE `email` = '$email'");
                
                    if (empty($users)) {
                        $created = date("Y-m-d h:i:s");
                        $data = array("email" => $email, "created_at" => $created);
                        DB::table('users')->insert($data);
                
                        $users = DB::select("SELECT * FROM `users` WHERE `email` = '$email'");
                        $user_id = $users[0]->id;
                        session()->push('users.user_id', $user_id);
                
                        $otp_number = mt_rand(100000, 999999);
                        $data = ['name' => "Dear Parent,", 'otp' => $otp_number];
                        $user['to'] = $email;

                        return view('otp');
                    } else {
                        $users = DB::select("SELECT * FROM `users` WHERE `email` = '$email'");
                        $user_id = $users[0]->id;
                        session()->push('users.user_id', $user_id);
                
                        $otp_number = mt_rand(100000, 999999);
                        $data = ['name' => "Dear Parent,", 'otp' => $otp_number];
                        $user['to'] = $email;
                        return view('otp');
                    }
                }
                // 
       public function paytm_appli()
       {
            return view('otpgeneration');
        }
            
        public function fee_receipt()
       {
            return view('print_fee_receipt');
        }
        public function application_form()
        {
             return view('application_form');
         }
        

         public function applicationpdf()
         {
             $online_applications = Student::all(); // Replace YourModel with the actual model representing your online applications
         
             return view('applicationpdf', ['online_applications' => $online_applications]);
         }
         

  }