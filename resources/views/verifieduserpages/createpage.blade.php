@extends('layouts.base')
    @section('content')
        @auth
            @if(Auth::user()->is_admin)
                <div class="flex justify-center">
                    <div class="w-xl max-w-xs  pt-20">
                        <form action="{{ route('process-create-events') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
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
                                <div>
                                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">
                                        Foto Toevoegen:
                                    </label>
                                    <input type="file" class="form-control" id="photo" name="photo" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <div class="flex items-center justify-between p-10">
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
