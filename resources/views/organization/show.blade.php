@extends('layouts.app')

@section('title', $organization->name)

@section('content')
<h1>{{ $organization->name }}</h1>
<p>{{ $organization->description }}</p>
@endsection