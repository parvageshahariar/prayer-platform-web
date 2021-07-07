<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $arr = ['title'=>'Prayer Backend'];
        return view('frontend.home',compact('arr'));
    }
    public function store(){
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['first_name','last_name' ,'email', 'password']));
        print_r($user);
    }
}
