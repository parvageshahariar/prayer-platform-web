<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Organization;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->organization_id) {
            $organization = Organization::findOrFail($request->organization_id);
            $groups = $organization->groups;
        } else {
            $organization = false;
            $groups = Group::all();
        }
        
        return view('group.list', compact('organization', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Organization $organization, Request $request)
    {
        return view('group.create', compact('organization'));
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
        $organization = Organization::findOrFail($request->organization_id);

        $group = new Group;
        $group->name = $request->name;
        $group->description = $request->name;
        $organization->groups()->save($group);

        return redirect('dashboard')->with('success', 'Group created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();
        return redirect('dashboard')->with('success', 'Successfully updated '.$group->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect(route('groups.index'));
    }
}
