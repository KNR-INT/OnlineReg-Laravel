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
            return view('login');
    }  
    // login 
    public function login(Request $request) {    
        $email = $request->email;    
        $user = User::where('email', $email)->first();    
        if ($user) {    
          Auth::login($user);    
          return redirect()->intended('otp');          
         } 
        else {     
            return redirect('/dashboard')->with('message',);   
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
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("dashboard");
    }
    // public function onlinereg(Request $request)
    // {
        // $request->validate([
        //         'name' => 'name',
        //         'gender' =>'gender',
        //         'dob' => 'dob',
        //         'class' =>'class',
        //         'birth_place' => 'birth_place',
        //         'nationality' =>'nationality',
        //         'religion' =>'religion',
        //         'mother_tongue' =>'mother_tongue',
        //         'phy_clg' =>'phy_clg',
        //         'slp_need' =>'slp_need',
        //         'aadhar' =>'aadhar',
        //         'transport' =>'transport',
            
        // ]);
        
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        
      ]);
     
    //   return onlinereg::create([
    //     'name' => $data['name'],
    //     'gender' => $data['gender'],
    //     'dob' => $data['dob'],
    //     'class' => $data['class'],
    //     'birth_place' => $data['birth_place'],
    //     'nationality' => $data['nationality'],
    //     'religion' => $data['religion'],
    //     'mother_tongue' => $data['mother_tongue'],
    //     'phy_clg' => $data['phy_clg'],
    //     'slp_need' => $data['slp_need'],
    //     'aadhar' => $data['aadhar'],
    //     'transport' => $data['transport'],
        
    //   ]);
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
   
        return redirect('home');
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

    public function upload_doc()
    {
        if(Auth::check()){
            return view('upload_doc');
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
}