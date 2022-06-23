@extends('layouts.base')
@section('content')
    <x-alert :errors="session('errors')" :success="session('success')" />
    <section class="dark:text-Gray-100 p-6">
        <form method="post" action="{{ route('auth.reset') }}"
            class="dark:bg-Gray-900 ng-untouched ng-pristine ng-valid container mx-auto w-full max-w-xl space-y-6 rounded-md bg-zinc-100 p-8 shadow-lg shadow-gray-300 dark:bg-white dark:shadow-gray-600">
            @csrf
            <h2 class="w-full text-3xl font-bold leading-tight">R&eacute;initialiser votre mot de passe</h2>
            <p class="text-sm">Vous avez oubli&eacute; votre mot de passe ? Aucun probl&egrave;me. <br> Indiquez-nous
                simplement votre adresse &eacute;lectronique et nous vous enverrons un nouveau mot de passe.</p>
            <div>
                <label for="email" class="mb-1 ml-1 block text-sm">Email</label>
                <input id="email" type="email" placeholder="Votre email" name="email" required
                    class="dark:bg-Gray-800 block w-full rounded p-2 outline outline-1 outline-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-25">
            </div>
            <div>
                <button type="submit"
                    class="w-full rounded bg-blue-400 px-4 py-2 font-normal text-white shadow hover:ring hover:ring-blue-400 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                    Envoyer
                </button>
            </div>
        </form>
    </section>
@endsection
