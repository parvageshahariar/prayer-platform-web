<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class FrontendController extends Controller
{
    //
    public function __construct(){
       // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user =  Auth::user();
            if($user) {
                return redirect()->intended('dashboard');
            }  
            return $next($request);
        });
    }
    public function index(){
        $arr = ['title'=>'Prayer Backend'];
        return view('frontend.home',compact('arr'));
    }
    public function store(Request $req){
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
       // print_r($request);
       $email = User::where('email',$req['email'])->first();
       if($email){
        return redirect()->back()->withErrors(['errors' => 'Email already exists.']);
       }
       
       
        $user = User::create([
            'first_name' => $req['first_name'],
            'last_name' => $req['last_name'],
            'email' => $req['email'],
            'phone_number' => $req['phone'],
            'timezone_id' => $req['timezone_id']? $req['timezone_id'] : 1,
            'role_id' => 2,
            
            'password' => Hash::make($req['password'])
          ]);
        return redirect()->back()->withSuccess( 'User registered successfully.');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
   
        $credentials = $request->only('email', 'password','has_banned');
        if (Auth::attempt($credentials + ["has_banned" => 0])) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
