<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Timezone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    
    public function index()
    {
        //
        $users = User::all();
        $arr = ['title'=>'User list'];
        return view('backoffice.user_list',compact('arr','users'));
        return $users;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function do_ban($id)
    {
        $user = User::where('id',$id)->update(['has_banned'=>1]);
        return redirect()->back()->withSuccess( 'User banned successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //tested  path will be http://localhost/prayerhouse/users/delete/3
    public function destroy($id)
    {
        $deletedRows = User::where('id', $id)->delete();
        return redirect()->back()->withSuccess( 'User deleted successfully.');
    }
}
