<x-app-layout :title="$organization->name">
    <h1>{{ $organization->name }}</h1>
    <p>{{ $organization->description }}</p>
    <div class="flex flex-wrap">
        <a class="btn-primary mr-2" href="{{ route('organizations.edit', ['organization'=>$organization]) }}">Edit</a>
        <form action="{{ route('organizations.destroy', ['organization'=>$organization]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn-primary" type="submit">Delete</button>
        </form>
    </div>
    <h2>Groups</h2>
    @if ($groups)
        
        <ul class="list-disc">
            @foreach ($groups as $group)
                <li><a class="hover:underline" href="{{ route('groups.show', ['group'=>$group->id]) }}">{{ $group->name }}</a></li>
            @endforeach
        </ul>
    @else
        <p>This organization has no groups yet.</p>
    @endif
    <a class="btn-primary" href="{{ route('groups.create', ['organization'=>$organization->id]) }}">New</a>
</x-app-layout>