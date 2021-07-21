<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <h1 class="inline-block">Dashboard</h1>
    @foreach ($organizations as $org)
        <x-organization-card :data="$org" />
    @endforeach
</x-app-layout>