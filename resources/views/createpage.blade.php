@extends('layouts.base')
    @section('content')
        @auth
            @if(Auth::user()->is_admin)                      
                <div class="flex justify-center">
                    <div class="w-full max-w-xs">  
                        <form action="{{ url('Create Events') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                                <div class="mb-4"> 
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Event naam">
                                    Event naam:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" name="name" id="name" class="form-control" placeholder="Evenement naam">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Evenement locatie">
                                    Evenement locatie:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    type="text" name="location" id="location"  placeholder="Vul een locatie in.">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Evenement beschrijving">
                                    Evenement beschrijving:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    type="text" name="description" id="description" placeholder="Vul een evenement bescrhrijving in.">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Evenement prijs">
                                    Evenement prijs:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    type="number" name="price" id="price" placeholder="&euro;">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Evenement begin">
                                    Evenement begin:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    type="date" name="event_start" id="event_start">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Evenement einde">
                                    Evenement Einde:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 
                                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                    type="date" name="event_end" id="event_end">
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold 
                                    py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit "
                                    value="submit">
                                    Event Toevoegen
                                    </button> 
                                </div>
                        </form>
                    </div>
                 </div>
            @endif
        @endauth
@endsection