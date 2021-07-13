@extends('layouts.app')

@section('title', $organization->name)

@section('content')
<div class="mt-10 grid grid-cols-2 gap-5">
    <div class="col-span-2 lg:col-span-1">
        <h1 class="mb-0 mt-0">{{ $organization->name }}</h1>
        <span>led by </span>
        <p class="mt-3 mb-5">{{ $organization->description }}</p>
        <div class="text-center md:text-left">
            <a class="btn-primary" href="/">Contact Leader</a>
            <a class="btn-secondary" href="/">Change Time</a>
        </div>
    </div>
    <div class="md:h-screen md:overflow-y-scroll col-span-2 lg:col-span-1 text-center border rounded-md">
        
    </div>
</div>
@endsection