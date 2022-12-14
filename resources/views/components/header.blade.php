<nav class="bg-[#1B2021]">
    <div class="container flex flex-wrap items-center justify-between mx-auto pb-2 text-[#BCBEC8] ">
        <a class="text-6xl text-white " href="{{ route('home')}}">TicketSysteem.</a>
        <ul class="flex items-center gap-20 text-2xl  font-semibold">
            <li class="hover:text-white">
                <a href="/">Home</a>
            </li>
            <li class="hover:text-white">
                <a href="contact">Contact</a>
            </li>
            <li class="hover:text-white">
                <a href="over-ons">Over</a>
            </li>
            <li class="hover:text-white">
                <a href="events">Alle evenemten</a>
            </li>
            @guest
                <a class="text-2xl" href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 dark:text-white ">Register</a>
                <a class="text-2xl" href="{{ route('login') }}" class="text-lg text-gray-700 dark:text-white ">Login</a>
            @endguest
            <h2 class="text-whitesmoke text-lg">U bent ingelogd als {{ Auth::user()->name }}.</h2>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Log uit</button>
            </form>
    </div>
</nav>
