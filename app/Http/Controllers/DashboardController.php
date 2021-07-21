<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $users = User::all();
        $organizations = Organization::all();
        $user = Auth::user();
        return view('dashboard')->with(compact('user','users', 'organizations'));
    }
}
