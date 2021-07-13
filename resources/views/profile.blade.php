@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1 class="mb-0">Profile</h1>
    <span>Let's keep that info up to date!</span>

    <form class="w-1/2 mt-5 grid grid-cols-2 gap-3">
        @csrf
        <input class="col-span-1" type="text" name="first_name" placeholder="First Name">
        <input class="col-span-1" type="text" name="last_name" placeholder="Last Name">
        <input class="col-span-2" type="email" name="email" placeholder="Email">
        <input type="tel" name="phone" placeholder="Mobile Number">
    </form>
    <div class="">
        <span>Here is what we do with your info.</span>
    </div>
@endsection
