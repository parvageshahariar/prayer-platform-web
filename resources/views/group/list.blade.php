<x-app-layout title="List of groups">
    <h1>Groups</h1>
    @if ($groups)
        <ul class="list-disc">
            @foreach ($groups as $group)
                <li class="hover:underline"><a href="{{ route('group.show', ['group' => $group->id]) }}">{{ $group->name }}</a></li>
            @endforeach
        </ul>
    @endif
</x-app-layout>