<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    } 
 
    public function index()
    {
        // @extends('DIRECTORY.BLADE')
        // $this-> load->view('resource/views/header');
        return view('login');
    }  
       
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         // 'password' => 'required',
    //     ]);
    
    //     $credentials = $request->only('email');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('dashboard')
    //                     ->with('message', 'Signed in!');
    //     }
   
    //     return redirect('/login')->with('message', 'Login details are not Found!');
    // }
    public function login(Request $request) {    
        $email = $request->email;    
        $user = User::where('email', $email)->first();    
        if ($user) {    
          Auth::login($user);    
          return redirect()->intended('otp')
              ->with('message', 'Signed in!');    
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
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6',
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
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
    //     ]);
   
    //     dd('done');
    // }
    public function header() {
        return view('headerpage');
    }
    public $successStatus = 200;
    public function loginWithOtp(Request $request){
        Log::info($request);
        $user  = User::where([['email','=',request('email')],['otp','=',request('otp')]])->first();
        if( $user){
            Auth::login($user, true);
            User::where('email','=',$request->email)->update(['otp' => null]);
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
        // send otp to email using email api
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
        if(Auth::check()){
            return view('newapp');
        }
        return redirect('/dashboard');
    }
    public function myapp()
    {
        if(Auth::check()){
            return view('myapp');
        }
        return redirect('/dashboard');
    }
    public function guidelinesmont()
    {
        if(Auth::check()){
            return view('guidelinesmont');
        }
        
        return redirect('/dashboard');
    }
    public function onlinereg()
    {
        if(Auth::check()){
            return view('onlinereg');
        }
        return redirect('/dashboard');
    }
    public function parents_details()
    {
        if(Auth::check()){
            return view('parents_details');
        }
        return redirect('/dashboard');
    }
    public function application_details()
    {
        if(Auth::check()){
            return view('application_details');
        }
        return redirect('/dashboard');
    }
}