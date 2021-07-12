<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\User;
use App\Models\Organization;
use App\Models\Userhouse;
use Illuminate\Support\Facades\Auth;
use Session;

class PrayerController extends Controller
{
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $house_list = House::all();
        $arr = ['title'=>'Payer House list'];
        return view('backoffice.payer_house_list',compact('arr','house_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $org_list = Organization::all();
        $arr = ['title'=>'Create Prayer House'];
        return view('backoffice.create_prayer_house',compact('arr','org_list'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'org' => 'required'
        ]);
        House::create([
            'name' => $request->name,
            'description' => $request->description,
            'organization_id' => $request->org
        ]);
        return redirect("/prayer_house_list")->withSuccess('Organization created successfully.');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletedRows = House::where('id', $id)->delete();
        return redirect()->back()->withSuccess( 'Prayer house deleted successfully.');
    }
    public function create_add_user_to_prayer_house(){
        $house_list = House::all();
        $user_list = User::all();
        $arr = ['title'=>'Add user to prayer house'];
        return view('backoffice.add_user_to_prayer_house',compact('arr','house_list','user_list'));
    }

    public function post_add_user_prayer_house(Request $request){
        $request->validate([
            'user' => 'required',
            'house' => 'required'
        ]);
        Userhouse::create([
            'user_id' => $request->user,
            'house_id' => $request->house,
            'status' => $request->status
        ]);
        return redirect("/add_user_prayer_house")->withSuccess('User added to prayer house successfully.');
    }
  
}
