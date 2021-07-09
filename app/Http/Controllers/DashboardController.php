<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class DashboardController extends Controller
{
    //
    public function __construct(){
        if( Auth::check()){
            return redirect("/")->withError('Opps! You do not have access');
        }
    }
    

    
    public function index(){
        echo Auth::user();
        echo 'Hi I am logged in';
    }
}
