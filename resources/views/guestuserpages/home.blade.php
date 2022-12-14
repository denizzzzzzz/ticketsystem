@extends('layouts.base')

@section('content')
    <div class="flex justify-center">
    <h1 class="text-7xl text-[#EDF2F4] font-light pb-4 mb-6">Ticket Systeem</h1>
</div>
<div class="flex justify-center">
    <div class="max-w-2xl text-2xl bg-[#13293D] rounded-lg p-6 text-white mt-8" >
<h2 class="text-left text-3xl">Welkom op mijn ticketsysteem website!</h2>
<h2 class="text-left text-3xl">Hier vind u tickets voor verschillende evenementen zoals:</h2>
        <br>
        @foreach ($events as $event)
    <h2 class="text-left">{{$event->name}},</h2>
            @endforeach
    </div>
</div>



@endsection
