<!-- Initialisation du document HTML   -->
@extends('layouts.base')
@section('content')
    <x-alert :errors="session('errors')" :success="session('success')" />
    <section class="row wrap full-screen flex justify-center dark:bg-gray-700" id="register-image">
        <div
            class="dark:bg-coolGray-900 dark:text-coolGray-100 my-12 flex max-w-md flex-col rounded-md bg-zinc-100 p-6 dark:bg-white sm:p-10">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Se connecter</h1>
                <p class="dark:text-coolGray-400 text-sm">Connectez-vous pour accéder à votre compte.</p>
            </div>
            <form method="post" action="/login" class="ng-untouched ng-pristine ng-valid space-y-6">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="email" class="mb-2 block text-sm">Adresse e-mail</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               placeholder="monsuper@email.com"
                               class="dark:border-coolGray-700 dark:bg-coolGray-900 dark:text-coolGray-100 w-full rounded-md border px-3 py-2">
                    </div>
                    <div>
                        <div class="mb-2 flex justify-between">
                            <label for="password" class="text-sm">Mot de passe</label>
                            <a rel="noopener noreferrer" href="/forgot-password"
                               class="dark:text-coolGray-400 text-xs hover:underline">Mot de passe oublié ?</a>
                        </div>
                        <input type="password" name="password" value="{{ old('password') }}" id="password"
                               placeholder="*****"
                               class="dark:border-coolGray-700 dark:bg-coolGray-900 dark:text-coolGray-100 w-full rounded-md border px-3 py-2">
                    </div>
                </div>
                <div class="space-y-2">
                    <div>
                        <button type="submit" class="w-full rounded-md bg-blue-400 px-8 py-3 text-white">Connexion
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
<!-- Fin de l'Initialisation du document HTML -->
