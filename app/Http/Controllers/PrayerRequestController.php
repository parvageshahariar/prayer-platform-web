<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;

class PrayerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prayerRequests = PrayerRequest::all();
        return view('prayer-request.list', compact('prayerRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $group = Group::findOrFail($request->group);
        return view('prayer-request.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth()->user();
        $group = Group::findOrFail($request->group_id);
        $prayerRequest = new PrayerRequest;
        $prayerRequest->content = $request->content;
        $prayerRequest->group_id = $group->id;
        $prayerRequest->user_id = $user->id;
        $prayerRequest->save();

        return redirect(route('groups.show', $group));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PrayerRequest $prayerRequest)
    {
        return view('prayer-request.show', compact('prayerRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PrayerRequest $prayerRequest)
    {
        return view('prayer-request.edit', compact('prayerRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrayerRequest $prayerRequest)
    {
        $prayerRequest->content = $request->content;
        $prayerRequest->save();
        return redirect(route('prayer-requests.show', $prayerRequest));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrayerRequest  $prayerRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrayerRequest $prayerRequest)
    {
        $prayerRequest->delete();
        return redirect(route('dashboard'));
    }
}
