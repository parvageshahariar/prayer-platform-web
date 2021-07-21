<div class="p-5 mb-3 bg-gray-50 rounded-lg">
    <h3 class="mt-1"><a href="{{ route('organizations.show', ['organization' => $id]) }}">{{ $name }}</a></h3>
    <p>{{ $description }}</p>
</div>