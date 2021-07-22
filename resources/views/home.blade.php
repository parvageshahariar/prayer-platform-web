<x-guest-layout>
    <div class="flex justify-center items-center text-center">
        <div>
            <img class="w-1/4 m-auto" src="{{ asset('assets/logo.png') }}" alt="">
            <h1>Temporary Development Site</h1>
            <p>This app is highly unfinished and is only here as a demo. Please use the app at your own risk.</p>
            <p>You can <a class="underline hover:no-underline text-blue-500" href="{{ route('register') }}">sign up</a> for an account or if you already have one, you can <a class="underline hover:no-underline text-blue-500" href="{{ route('login') }}">login</a>.</p>
        </div>
    </div>
</x-guest-layout>
