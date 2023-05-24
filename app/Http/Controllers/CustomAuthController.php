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
        $user = User::where('email', $email)->first();    
        if ($user) {    
          Auth::login($user);    
  return redirect()->intended('otp');
         }
        else {    
            return redirect('/dashboard')->with('message', );   
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
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
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
    
    public function sendOtp(Request $request){
    
        $otp = rand(1000,9999);
        Log::info("otp = ".$otp);
        $user = User::where('email','=',$request->email)->update(['otp' => $otp]);
        return response()->json([$user],200);
    }
    public function otp()
    {
        if(Auth::check()){
            return view('otp');
        }
        return redirect('/dashboard');
    }
    public function newapp()
    {
        $session_id = Session::getId();
        if(Auth::check()){
            return view('newapp');
        }
        return redirect('/dashboard');
    }
    
    public function guidelinesmont(Request $request) {    
        $email = $request->email;    
        session()->push('login.email', $email);

        $users = User::find(1)->email;
        if(Auth::check()){
                return view('guidelinesmont');
    }
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
            $sess_email = new Student;
            
            $sess_email->email_id = $ses_email;
            $sess_email->save();
            $id = DB::table('students')->where('email_id',$ses_email) ->orderBy('updated_at', 'desc')->value('id');
            echo $id;
            session()->forget('login.id');
            session()->push('login.id', $id);
            $students = Student::all();
            return view('onlinereg', compact('students'));

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