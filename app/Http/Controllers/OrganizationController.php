<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organization.list', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        validator([
            'name' => 'required'
        ]);
        $organization = new Organization;
        $organization->name = $request->name;
        $organization->description = $request->name;
        $organization->save();

        return redirect('dashboard')->with('success', 'Organization created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        $groups = $organization->groups;
        
        return view('organization.show', compact('organization', 'groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organization.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $organization->name = $request->name;
        $organization->description = $request->name;
        $organization->save();
        return redirect('dashboard')->with('success', 'Successfully updated ' . $organization->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Organization::find($id)->destroy();
    }
}
