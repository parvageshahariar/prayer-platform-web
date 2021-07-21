<x-app-layout :title="Edit $group->name">
    <h1>Edit {{ $group->name }}</h1>
    <form class="w-1/2 ml-auto mr-auto grid grid-cols-2 gap-3" action="{{ route('group.update', $group->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <input class="col-span-1" type="text" name="name" placeholder="Name" value="{{ $group->name }}">
        <textarea class="col-span-2" name="description" cols="30" rows="10" placeholder="Description">{{ $group->description }}</textarea>
        <button class="btn-primary" type="submit">Update</button>
    </form>
</x-app-layout>