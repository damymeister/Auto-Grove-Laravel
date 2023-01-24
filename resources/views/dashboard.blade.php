<link href="/css/main.css" rel = "stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel użytkownika') }}
            @if(\Auth::user()->role_id == 2)
            {{ __('Moderator') }}
            @endif
            @if(\Auth::user()->role_id == 3)
            {{ __('Admin') }}
            @endif
        </h2>
        <div class="przyciski-navbar">
                    <a class="btn btn-outline-light bg-black" href="{{ url('/') }}">Strona Główna</a>
                    <a class="btn btn-outline-light bg-black" href="{{ url('/onas') }}">O nas</a>
                    <a class="btn btn-outline-light  bg-black" href="{{ url('/comments') }}">Blog Auto-Grove</a>
                    @if(\Auth::user()->role_id == 3)
                    <a class="btn btn-outline-light  bg-black" href="{{ url('/users') }}">Użytkownicy</a>
                    @endif
                    </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="ramka">
            @if(\Auth::user()->role_id == 2)
            <h1>Jako moderator możesz usuwać i edytować posty dowolnego użytkownika!</h1>
            @endif
            @if(\Auth::user()->role_id == 3)
            <h1>Jako Administrator możesz usuwać i edytować posty dowolnego użytkownika, a także usuwać użytkowików oraz edytować ich dane!</h1>
            @endif
                    Bardzo miło nas powitać cię w serwisie Auto-Grove!
                    Jako zalogowany użytkownik naszego forum możesz aktualizować i dodawać posty na naszym blogu.
                    </br>
                    Prosimy o stosowanie się do regulaminu, ponieważ każdy post łamiący zasady będzie usuwany!
            </div>
                
            </div> 
        </div>
    </div>
</x-app-layout>
