            @extends('layouts.base')
                @section('content')
                        <div class="flex justify-center">
                            <h1 class="text-7xl text-[#EDF2F4] font-ligth pb-4 mb-6">Zie hieronder alle beschikbare tickets</h1>
                        </div>
                    @auth
                        @if(Auth::user()->is_admin)
                            <a href="show-create-events"><button class="bg-sky-500/40 rounded-lg p-2 text-3xl text-white font-light m-4 hover:bg-white hover:text-black">Voeg hier een evenement toe</button></a>
                        @endif
                    @endauth

                    <div class="flex justify-center">
                        @foreach ($events as $event)
                            <div class="max-w-lg text-2xl bg-[#13293D] rounded-lg p-6 text-white m-8" >
                                <h1 class="text-white text-5xl pb-2">{{$event->name}}</h1>
                                <h2 class="text-left text-2xl pb-6 p-2">{{$event->description}}</h2>
                                <h2 class="text-1xl ">{{$event->event_start}} - {{$event->event_end}}</h2>
                                <img src="{{asset('img/datelogo.png')}}" alt="Evenement logo" class="w-12 h-12">
                                <img class="eventPicture" src="{{ asset($event->photo) }}" alt="eventPicture">
                                <h2 class="text-left text-xl pl-2">{{$event->location}}</h2>
                                <h2 class="text-left text-xl pl-2 pt-12">&euro;{{$event->price}}</h2>
                    <div class="flex justify-center gap-2">
                        <button class="text-xl font-semibold  text-black rounded-lg bg-sky-500/90 p-2 hover:bg-white mt-6">
                            Bestel uw ticket
                        </button>
                    @auth
                        @if(Auth::user())
                                <a href="{{ route('show-edit-events', $event->id) }}" ><button class="text-xl font-semibold  text-white rounded-lg bg-black p-2 hover:bg-white mt-6 hover:text-black">Bewerken</button> </a>
                                <a href="{{ route('delete-event', $event->id) }}"><button class="text-xl font-semibold  text-white rounded-lg bg-red-500 p-2 hover:bg-white mt-6 hover:text-black">Verwijderen</button>  </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
 @endsection

