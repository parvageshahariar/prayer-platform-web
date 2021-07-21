<x-app-layout title="Create a new group">
    <h1 class="text-center">Create a new group</h1>
    <form class="w-1/2 ml-auto mr-auto grid grid-cols-2 gap-3" action="{{ route('groups.store', ['organization' => $organization]) }}" method="POST">
        @csrf
        <input class="col-span-1" type="text" name="name" placeholder="Name">
        <textarea class="col-span-2" name="description" cols="30" rows="10" placeholder="Description"></textarea>
        <button class="btn-primary" type="submit">Create</button>
    </form>
</x-app-layout>