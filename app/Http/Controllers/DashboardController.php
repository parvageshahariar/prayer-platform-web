<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        $users = User::all();
        $organizations = Organization::all();
        return view('dashboard')->with(compact('users', 'organizations'));
    }
}
