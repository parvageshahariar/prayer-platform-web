<x-app-layout title="List of groups">
    <h1 class="mb-0">Groups</h1>
    <span class="inline-block mb-5">by {{ $organization->name }}</span>
    @if ($groups)
        <ul class="list-disc">
            @foreach ($groups as $group)
                <li class="hover:underline"><a href="{{ route('groups.show', ['organization'=>$organization->id, 'group' => $group->id]) }}">{{ $group->name }}</a></li>
            @endforeach
        </ul>
    @endif
</x-app-layout>