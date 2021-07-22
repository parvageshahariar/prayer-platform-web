<x-app-layout title="List of groups">
    <h1 class="mb-0">Groups</h1>
    @if ($organization)
        <span class="inline-block mb-5">by {{ $organization->name }}</span>
    @endif
    @if ($groups)
        <ul class="list-disc">
            @foreach ($groups as $group)
                <li class="hover:underline"><a href="{{ route('groups.show', ['group' => $group->id]) }}">{{ $group->name }}</a></li>
            @endforeach
        </ul>
    @endif
</x-app-layout>