@extends('layouts.base')
    section('content')
        <div class="bg-[#000000]">
            <div class="flex justify-center">
                <h1 class="text-8xl text-[#EDF2F4] font-medium pb-4 mb-6">Tickets</h1>
            </div>
        </div>  
        @auth
             @if(Auth::user()->is_admin)
                <a href="Create Events"><button class="bg-sky-500/40 rounded-lg p-2 text-3xl text-white font-light m-4 hover:bg-white hover:text-black">Voeg hier een evenement toe</button></a>
            @endif
        @endauth

        <div class="flex justify-center">
            @foreach ($events as $event)
                    <div class="max-w-lg text-2xl bg-[#13293D] rounded-lg p-6 text-white m-8" >
                        <h1 class="text-white text-5xl pb-2">{{$event->name}}</h1>
                        <h2 class="text-left text-2xl pb-6 p-2">{{$event->description}}</h2>
                                    {{--                <img src="../img/datelogo.png" alt="Evenement logo">--}}
                        <h2 class="text-left text-xl pl-2"></a>{{$event->event_start}} - {{$event->event_end}}</h2>
                        <h2 class="text-left text-xl pl-2">{{$event->location}}</h2>
                        <h2 class="text-left text-xl pl-2 pt-12">&euro;{{$event->price}}</h2>

                    <div class="flex justify-center gap-4">
                        <button class="text-xl font-semibold  text-black rounded-lg bg-sky-500/90 p-2 hover:bg-white mt-6">
                        Bestel uw ticket
                        </button>
                            @auth
                                @if(Auth::user()->is_admin)
                                    <form method="POST" action="{{ url('Events' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                    <button type="submit"  class="text-xl font-semibold  text-black rounded-lg bg-[#FF0000] p-2 hover:bg-white mt-6 hover:text-black" 
                                    title="Verwijder Evenement" onclick="return confirm("Evenement verwijderen?"> Verwijderen</button>
                                            </form>
                                    <button class="text-xl font-semibold  text-black rounded-lg bg-[#FF0000] p-2 hover:bg-white mt-6 hover:text-black">Verwijderen</button>
                                    <button class="text-xl font-semibold  text-white rounded-lg bg-black p-2 hover:bg-white mt-6 hover:text-black">Bewerken</button>
                                @endif
                            @endauth
                    </div>
                </div>
            </div>
    @endforeach
@endsection

