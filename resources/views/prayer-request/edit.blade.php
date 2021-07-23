<x-app-layout title="Edit {{ $prayerRequest->name }}">
    <h1 class="text-center">Edit Prayer Request</h1>
    <form class="w-1/2 ml-auto mr-auto grid grid-cols-2 gap-3" action="{{ route('prayer-requests.update', $prayerRequest->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <textarea class="col-span-2" name="content" cols="30" rows="10" placeholder="Description">{{ $prayerRequest->content }}</textarea>
        <button class="btn-primary" type="submit">Update</button>
    </form>
</x-app-layout>