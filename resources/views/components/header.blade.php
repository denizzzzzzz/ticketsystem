

<nav class="bg-[#1B2021]">
    <div class="container flex flex-wrap items-center justify-between mx-auto pb-1 text-[#BCBEC8] ">
        <a class="text-4xl text-white" href="{{ route('home')}}">TicketSysteem.</a>
        <ul class="flex items-center gap-20 text-2xl  font-semibold">
            <li class="hover:text-white">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="hover:text-white">
                <a class="" href="Contact">Contact</a>
            </li>
            <li class="hover:text-white">
                <a class="nav-link" href="Over ons">About</a>
            </li>
            <li class="hover:text-white">
                <a class="nav-link" href="Events">Events</a>
            </li>

            @auth
                @if(Auth::user()->is_admin)
                    <a class="text-2xl" href="{{ url('admin') }}" class="text-lg text-gray-700 dark:text-white ">ADMIN</a>
                @endif

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-lg text-gray-700 dark:text-white text-2xl ">Logout</button>
            </form>
            @endauth

            @guest
                <a class="text-2xl" href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 dark:text-white ">Register</a>
                <a class="text-2xl" href="{{ route('login') }}" class="text-lg text-gray-700 dark:text-white ">Login</a>
            @endguest
</nav>
