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
    <ol>
        @foreach ($prayerRequests as $prayer)
            <li class="max-w-md bg-gray-100 p-3">{{ $prayer->content }}<br>{{ $prayer->user->first_name }} {{ $prayer->user->last_name }}</li>
        @endforeach
    </ol>
    <a href="{{ route('prayer-requests.create', ['group'=>$group]) }}">Add a prayer request</a>
</x-app-layout>