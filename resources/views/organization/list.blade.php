<x-app-layout title="List of Organizations">
    <h1>Organizations</h1>
    @if ($organizations)
        <ul>
            @foreach ($organizations as $organization)
                <li><x-organization-card :data="$organization" /></li>
            @endforeach
        </ul>
    @endif
</x-app-layout>