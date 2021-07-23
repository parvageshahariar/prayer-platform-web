<x-app-layout title="Dashboard">
    <h1 class="inline-block">Welcome back, {{ $user->first_name }}</h1>
    @foreach ($organizations as $organization)
        <x-organization-card :data="$organization">
            @foreach ($organization->groups as $group)
                <li>{{ $group->name }}</li>
            @endforeach
        </x-organization-card>
    @endforeach
</x-app-layout>