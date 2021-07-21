<x-app-layout title="Dashboard">
    <h1 class="inline-block">Welcome back, {{ $user->first_name }}</h1>
    @foreach ($organizations as $org)
        <x-organization-card :data="$org" />
    @endforeach
</x-app-layout>