<div class="mt-10 grid grid-cols-3">
    <div class="col-span-3 lg:col-span-1">
        <h3 class="mb-0 mt-0">RiverStone Church</h3>
        <span>led by Nicole McCready</span>
        <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis erat neque, a eleifend mauris mattis ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi at augue nibh. Vestibulum fringilla, ex in lobortis rhoncus, augue est facilisis mauris, tristique varius nibh nulla eget nunc. Mauris ut ligula massa. Vestibulum sit amet massa porttitor, ornare quam sit amet, ultrices eros. In erat justo, dictum eget maximus ac, placerat in nisl. Morbi aliquam tristique ultricies.</p>
        <a class="p-4 mr-3 bg-blue-800 text-white" href="/">Contact Leader</a>
        <a class="p-4 bg-gray-200 text-blue-800" href="/">Change Time</a>
    </div>
    <div class="md:h-screen md:overflow-y-scroll col-span-3 lg:col-span-2 text-center">
        @php
            $faker = Faker\Factory::create()
        @endphp
        @for ($time = 1; $time <= 24; $time++)
            @if ($time <= 12)
                <div class="border-t mt-3">{{ $time }}pm</div>
                <div class="mt-3">{{ $faker->name() }}</div>
            @else
                <div class="border-t mb-3">{{ $time-12 }}am</div>
                <div class="mt-3">{{ $faker->name() }}</div>
            @endif
        @endfor
    </div>
</div>