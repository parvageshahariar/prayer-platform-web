<x-app-layout :title="$prayerRequest->name">
    <h1 class="mb-0">Prayer Request</h1>
    <span class="inline-block mb-3">by {{ $prayerRequest->user->first_name }} {{ $prayerRequest->user->last_name }}</span>
    <p>{{ $prayerRequest->content }}</p>
    <div class="flex flex-wrap">
        <a class="btn-primary mr-2" href="{{ route('prayer-requests.edit', ['prayer_request'=>$prayerRequest]) }}">Edit</a>
        <form action="{{ route('prayer-requests.destroy', ['prayer_request'=>$prayerRequest]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn-primary" type="submit">Delete</button>
        </form>
    </div>
</x-app-layout>