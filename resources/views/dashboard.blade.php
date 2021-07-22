<x-app-layout title="Dashboard">
    <h1 class="inline-block">Welcome back, {{ $user->first_name }}</h1>
    @if (count($organizations) > 1)
        <h2>Organizations</h2>
        @foreach ($organizations as $organization)
            <li>{{ $organization->name }}</li>
        @endforeach
    @else
        <x-organization-card :data="$organizations[0]">
            @foreach ($organizations[0]->groups as $group)
                <li>{{ $group->name }}</li>
            @endforeach
        </x-organization-card>
    @endif
</x-app-layout>