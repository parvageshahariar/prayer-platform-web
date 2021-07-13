@extends('layouts.app')

@section('title', 'List of Organizations')

@section('content')
<h1>Organizations</h1>
@if ($organizations)
    <ul>
        @foreach ($organizations as $organization)
            <li><h4>{{ $organization->name }}</h4><p>{{ $organization->description }}</p></li>
        @endforeach
    </ul>
@endif
@endsection