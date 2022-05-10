@extends('layouts.base')
@section('content')
    @if (session('status'))
    <div class="bg-zinc-100 w-min dark:bg-white flex items-center p-6 space-x-4 rounded-md bg-Gray-900 text-Gray-100">
        <div class="flex items-center self-stretch justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <span>{!! session('status') !!}</span>
    </div>
    @endif

    @if (session('error'))
        <div class="bg-zinc-100 w-min dark:bg-white flex items-center p-6 space-x-4 rounded-md bg-Gray-900 text-Gray-100">
            <div class="flex items-center self-stretch justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <span>{!! session('error') !!}</span>
        </div>
    @endif

    <section class="p-6 dark:text-Gray-100">
        <form method="post" action="{{ route('reset_password_without_token') }}"
            class="container shadow-lg shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white w-full max-w-xl p-8 mx-auto space-y-6 rounded-md dark:bg-Gray-900 ng-untouched ng-pristine ng-valid">
            @csrf
            <h2 class="w-full text-3xl font-bold leading-tight">R&eacute;initialiser votre mot de passe</h2>
            <p class="text-sm">Vous avez oubli&eacute; votre mot de passe ? Aucun probl&egrave;me. <br> Indiquez-nous
                simplement votre adresse &eacute;lectronique et nous vous enverrons un nouveau mot de passe.</p>
            <div>
                <label for="email" class="text-sm block mb-1 ml-1">Email</label>
                <input id="email" type="email" placeholder="Votre email" name="email" required
                    class="block w-full p-2 rounded outline outline-1 outline-gray-200 focus:outline-none focus:ring focus:ring-opacity-25 focus:ring-blue-400 dark:bg-Gray-800">
            </div>
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 font-normal rounded shadow focus:outline-none focus:ring hover:ring focus:ring-opacity-50 bg-blue-400 focus:ring-blue-400 hover:ring-blue-400 text-white">Envoyer</button>
            </div>
        </form>
    </section>
@endsection
