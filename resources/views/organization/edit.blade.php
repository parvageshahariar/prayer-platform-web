<x-app-layout title="Edit {{ $organization->name }}">
    <h1>Edit {{ $organization->name }}</h1>
    <form class="w-1/2 ml-auto mr-auto grid grid-cols-2 gap-3" action="{{ route('organizations.update', $organization->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <input class="col-span-1" type="text" name="name" placeholder="Name" value="{{ $organization->name }}">
        <textarea class="col-span-2" name="description" cols="30" rows="10" placeholder="Description">{{ $organization->description }}</textarea>
        <button class="btn-primary" type="submit">Update</button>
    </form>
</x-app-layout>