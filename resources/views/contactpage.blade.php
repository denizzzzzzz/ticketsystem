@extends('layouts.base')

@section('content')
    <section class="bg-gray-900">
        <div class="bg-[#000000]">
            <div class="flex justify-center">
            <h1 class="text-8xl text-[#EDF2F4] font-medium pb-4">Contact us</h1>
            </div>
        </div>
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

            <p class="mb-4  font-light text-center text-gray-400 sm:text-xl">Do you have any complaints about an event or does your ticket not work? Don't hesitate to contact us!</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2  font-medium text-4xl text-gray-300">Uw Email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="uwmail@email.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-4xl text-gray-900 dark:text-gray-300">Onderwerp</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                    shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="laat ons weten hou we u kunnen helpen." required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-4xl text-gray-900 dark:text-gray-400">Uw bericht</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300
                    focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500
                    dark:focus:border-primary-500" placeholder="Laat uw bericht achter..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-2xl text-center text-white bg-black rounded-lg hover:bg-white hover:text-black">Verzenden</button>
            </form>
        </div>
    </section>
@endsection
