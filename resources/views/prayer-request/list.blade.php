<x-app-layout title="List of Prayer Requests">
    <h1 class="mb-0">Prayer Requests</h1>
    <ul class="max-w-md">
        @foreach ($prayerRequests as $prayerRequest)
            <li class="bg-gray-100 p-2 m-3">{{ $prayerRequest->content }}
                @if ($prayerRequest->comments)
                    <ul class="ml-3 bg-gray-200">
                        @foreach ($prayerRequest->comments as $comment)
                            <li class="m-1">{{ $comment->content }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</x-app-layout>