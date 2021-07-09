<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;
use Session;

class OrganizationController extends Controller
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
        $org_list = Organization::all();
        $arr = ['title'=>'Organization list'];
        return view('backoffice.org_list',compact('arr','org_list'));
        return $org_list;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $arr = ['title'=>'Create Organization'];
        return view('backoffice.create_org',compact('arr'));
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
            'org_name' => 'required',
            'description' => 'required'
        ]);
        Organization::create([
            'name' => $request->org_name,
            'description' => $request->description
        ]);
        return redirect("/org_list")->withSuccess('Organization created successfully.');
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
        $deletedRows = Organization::where('id', $id)->delete();
        return redirect()->back()->withSuccess( 'Organization deleted successfully.');
    }
}
