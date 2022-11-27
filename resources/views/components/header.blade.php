

<nav class="navbar navbar-expand-lg ">

        <a class="navbar-brand" href="{{ route('home')}}">TicketSysteem</a>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Over-Ons">Over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Events">Events</a>
            </li>
            @auth
                @if(Auth::user()->is_admin)
                    <a href="{{ url('addevents') }}" class="text-lg text-gray-700 dark:text-white ">Add events</a>
                @endif
                <a href="{{ route('logout') }}" class="text-lg text-gray-700 dark:text-white ">Logout</a>
            @endauth
            @guest
                <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 dark:text-white ">Register</a>
                <a href="{{ route('login') }}" class="text-lg text-gray-700 dark:text-white ">Login</a>
            @endguest

</nav>
