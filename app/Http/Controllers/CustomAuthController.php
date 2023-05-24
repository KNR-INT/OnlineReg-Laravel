<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
 
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

    public function login(Request $request) {    
        $email = $request->email;    
        session()->push('login.email', $email); 
        $users = DB::select("SELECT * FROM `users` WHERE `email` = '$email'");
        if(empty($users))
        {
            $created = date("Y-m-d h:i:s");
            $data=array("email"=>$email,"created_at"=>$created);
            DB::table('users')->insert($data);

            $users = DB::select("SELECT * FROM `users` WHERE `email` = '$email'");
            $user_id = $users[0]->id;
            session()->push('users.user_id', $user_id);
            return view('otp');          
        }
        else
        {
            $user_id = $users[0]->id;
            session()->push('users.user_id', $user_id);
            return view('otp');          
        }  
    }

    public function otp(Request $request)
    {
        $otp = $request->otp;    
        if($otp == '7878'){
            return redirect('/dashboard');
        }
        else
        {
            return view('otp')
            ->with('message','Invalid OTP');
        }
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
    
    public function guidelinesmont() {   
        return view('guidelinesmont');
    }
    public function parents_details()
    {
        
        if(Auth::check()){
            return view('parents_details');
        }
        
        return redirect('/dashboard');
        
    }

    public function upload_doc()
    {
        if(Auth::check()){
            return view('upload_doc');
        }
        return redirect('/dashboard');
    }
    public function application_details()
    {
        $students = Student::all();
        return view('application_details', compact('students'));
    }


    public function payment()
    {
        if(Auth::check()){
            return view('payment');
        }
        return redirect('/dashboard');
    }

    public function admitted()
    {
        if(Auth::check()){
            return view('admitted');
        }
        return redirect('/dashboard');
    }

 public function onlinereg()
    {
        $session = request()->session()->get('login.email');            
        $ses_email = $session[0];
        $sessions = request()->session()->get('users.user_id');     
        $ses_userid = $sessions[0];
        $created = date("Y-m-d h:i:s");
        $data=array("email_id"=>$ses_email,"user_id"=>$ses_userid,"created_at"=>$created,"status"=>"Draft");
        DB::table('students')->insert($data);
        $users = DB::select("SELECT * FROM `students` WHERE `email_id` = '$ses_email' ORDER BY `id` DESC LIMIT 1");
        $user_id = $users[0]->id;
        Session::forget('users.id');
        session()->push('users.id', $user_id);
        return view('onlinereg');
    }
    
        public function myapp()

        {
            if(Auth::check()){  
                return view('myapp');
            }
            return redirect('/dashboard');
        }
        public function draft()
        {
            if(Auth::check()){  
                return view('draft');
            }
            return redirect('/myapp');
        }
        public function submited()
        {
            if(Auth::check()){  
                return view('submited');
            }
            return redirect('/myapp');
        }
  }