<x-app-layout title="Create a new Prayer Request">
    <h1 class="text-center">Create a new Prayer Request</h1>
    <form class="w-1/2 ml-auto mr-auto grid grid-cols-2 gap-3" action="{{ route('prayer-requests.store', ['group' => $group]) }}" method="POST">
        @csrf
        <input type="text" name="group_id" value="{{ $group->id }}" hidden>
        <textarea class="col-span-2" name="content" cols="30" rows="10" placeholder="Description"></textarea>
        <button class="btn-primary" type="submit">Create</button>
    </form>
</x-app-layout>