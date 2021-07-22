<x-app-layout title="List of Organizations">
    <div class="flex flex-wrap items-center justify-between">
        <h1>Organizations</h1>
        <a class="btn btn-primary" href="{{ route('organizations.create') }}">Create an Organization</a>
    </div>
    @if ($organizations)
        <ul>
            @foreach ($organizations as $organization)
                <li><x-organization-card :data="$organization" /></li>
            @endforeach
        </ul>
    @endif
</x-app-layout>