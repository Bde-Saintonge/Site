@extends('layouts.base')
@section('content')
{{--    @php--}}
{{--    dd(session('errors'));--}}
{{--    @endphp--}}
    <x-alert :errors="session('errors')" :success="session('success')" />

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
