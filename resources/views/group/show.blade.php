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
        @foreach ($prayerRequests as $prayerRequest)
            <li class="max-w-md bg-gray-100 p-3">{{ $prayerRequest->content }} <a class="ml-10" href="{{ route('prayer-requests.edit', ['prayer_request'=>$prayerRequest]) }}">Edit</a><br>{{ $prayerRequest->user->first_name }} {{ $prayerRequest->user->last_name }}</li>
        @endforeach
    </ol>
    <a href="{{ route('prayer-requests.create', ['group'=>$group]) }}">Add a prayer request</a>
</x-app-layout>