<nav class="w-3/4 m-auto pl-8 pr-8 mt-3 bg-gray-50 rounded-lg">
    <div class=" m-auto md:flex justify-between">
        <a href="/" class="flex-shrink-0">
            <img class="max-h-24 md:-ml-3" src="assets/logo.png" alt="">
        </a>
        <ul class="pb-3 md:p-0 md:flex text-center items-center">
            <li><a class="m-3" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a class="m-3" href="/profile">Profile</a></li>
            <li>
                <form class="m-3" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
