<x-app-layout :title="$group->name">
    <h1>{{ $group->name }}</h1>
    <p>{{ $group->description }}</p>
    <div class="flex flex-wrap">
        <a class="btn-primary mr-2" href="{{ route('groups.edit', ['group'=>$group]) }}">Edit</a>
        <form action="{{ route('groups.destroy', ['group'=>$group]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn-primary" type="submit">Delete</button>
        </form>
    </div>
</x-app-layout>