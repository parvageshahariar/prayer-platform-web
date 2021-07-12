<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Timezone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
//use App\User;


class DashboardController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user =  Auth::user();
            if(!$user) {
                return redirect('/');
            }  
            return $next($request);
        });
    }
    

    
    public function index(){
       // echo Auth::user();
        echo 'Hi I am logged in';
    }
    public function user_profile(){
        $user_id= Auth::id();
        $user_info =  User::where('id',$user_id)->first();
        $timezones = Timezone::all();
        $arr = ['title'=>'User Profile'];
        return view('backoffice.user_profile',compact('arr','user_info','timezones'));
    }

    public function post_user_profile(Request $req){
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);
       // print_r($request);
       $user_id= Auth::id();
       $email_count=User::where('email',$req['email'])->where('id', '!=', $user_id)->count();
       if($email_count>0){
        return redirect()->back()->withErrors(['errors' => 'Email already exists.']);
       }
       
       $arr = [
           'first_name' => $req['first_name'],
            'last_name' => $req['last_name'],
            'email' => $req['email'],
            'phone_number' => $req['phone'],
            'timezone_id' => $req['timezone_id']? $req['timezone_id'] : 1,
            'role_id' => 2
        ];
        if($req['password']){
            $arr['password'] = Hash::make($req['password']);
        }
       
        $user = User::where('id',$req->id)->update($arr);
          
        return redirect('/user_profile')->withSuccess( 'User profile updated successfully.');
    }
   
    public function dologout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
