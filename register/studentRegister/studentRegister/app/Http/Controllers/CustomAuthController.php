<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Student;
// use App\Models\student;
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
        $user = User::where('email', $email)->first();    
        if ($user) {    
          Auth::login($user);    
  return redirect()->intended('otp');
            //   ->with('message', 'Signed in!');           
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
 public function onlinereg()
        {
            $students = Student::all();
            return view('onlinereg', compact('students'));
        }
    
        // public function onlinereg($students)
        // {
        //     $student = Student::find($id);
        //     $student->name = $students->input('name');
        //     $student->gender = $students->input('gender');
        //     $student->dob = $students->input('dob');
        //     $student->class = $students->input('class');
        //     $student->birth_place = $students->input('birth_place');
        //     $student->nationality = $students->input('nationality');
        //     $student->religion = $students->input('religion');
        //     $student->mother_tongue = $students->input('mother_tongue');
        //     $student->phy_clg = $students->input('phy_clg');
        //     $student->aadhar = $students->input('aadhar');
        //     $student->transport = $students->input('transport');
        //     $student->onlinereg();
        //     return view('parents_details', compact('students'));
        // }     
        
        
        
        }
     
    



