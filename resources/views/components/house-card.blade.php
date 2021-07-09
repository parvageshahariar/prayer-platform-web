<div class="mt-10 grid grid-cols-2 gap-5">
    <div class="col-span-2 lg:col-span-1">
        <h3 class="mb-0 mt-0">RiverStone Church</h3>
        <span>led by Nicole McCready</span>
        <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis erat neque, a eleifend mauris mattis ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi at augue nibh. Vestibulum fringilla, ex in lobortis rhoncus, augue est facilisis mauris, tristique varius nibh nulla eget nunc. Mauris ut ligula massa. Vestibulum sit amet massa porttitor, ornare quam sit amet, ultrices eros. In erat justo, dictum eget maximus ac, placerat in nisl. Morbi aliquam tristique ultricies.</p>
        <div class="text-center md:text-left">
            <a class="p-4 mb-2 inline-block bg-blue-500 text-white rounded" href="/">Contact Leader</a>
            <a class="p-4 inline-block bg-gray-200 text-blue-500 rounded" href="/">Change Time</a>
        </div>
    </div>
    <div class="md:h-screen md:overflow-y-scroll col-span-2 lg:col-span-1 text-center border rounded-md">
        @php
            $faker = Faker\Factory::create()
        @endphp
        @for ($i = 1; $i <= 24; $i++)
            @if ($i <= 12)
                @php
                    $time = $i . 'pm'
                @endphp
            @else
                @php
                    $time = ($i - 12) . 'pm'
                @endphp
            @endif
            <div class="border-b">
                <div class="pt-2 font-bold">{{ $time }}</div>
                <div class="mb-2">{{ $faker->name() }}</div>
            </div>
        @endfor
    </div>
</div>