@extends('layouts.base')

@section('content')
<div class="bg-[#000000]">
    <div class="flex justify-center">
    <h1 class="text-8xl text-[#EDF2F4] font-bold pb-4 mb-6">Ticket Systeem</h1>
    </div>
</div>
<div class="flex justify-center">
    <div class="max-w-2xl text-2xl bg-[#13293D] rounded-lg p-6 text-white mt-8" >
<h2 class="text-left text-3xl">This is a website where you can order tickets for al kinds of events such as:</h2>
        <br>
        @foreach ($events as $event)
    <h2 class="text-left">{{$event->name}}</h2>
            @endforeach
    </div>
</div>



@endsection
