@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-wrap justify-between">
        <h1 class="inline-block">Dashboard</h1>
        <div>
            <a class="btn-primary" href="/house/join">Join a House</a>
        </div>
    </div>
    <x-house-card />
@endsection