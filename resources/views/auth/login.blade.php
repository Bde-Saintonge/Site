<!-- Initialisation du document HTML   -->
@extends('layouts.base')
@section('content')
    <section class="flex justify-center dark:bg-gray-700 row wrap full-screen" id="register-image">
        <div
            class="my-12 bg-zinc-100 dark:bg-white flex flex-col max-w-md p-6 rounded-md sm:p-10 dark:bg-coolGray-900 dark:text-coolGray-100">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Se connecter</h1>
                <p class="text-sm dark:text-coolGray-400">Connectez-vous pour accéder à votre compte.</p>
            </div>
            <form method="post" action="/login" class="space-y-6 ng-untouched ng-pristine ng-valid">
                @csrf
                <div class="space-y-4">
                    <div>
                        {!! $errors->first('error', '<div class="alert alert-warning" role="alert">:message</div>') !!}
                        <label for="email" class="block mb-2 text-sm">Adresse e-mail</label>
                        {{-- <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"> --}}
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            placeholder="monsuper@email.com"
                            class="w-full px-3 py-2 border rounded-md dark:border-coolGray-700 dark:bg-coolGray-900 dark:text-coolGray-100">
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm">Mot de passe</label>
                            <a rel="noopener noreferrer" href="/forgot-password" target="_blank"
                                class="text-xs hover:underline dark:text-coolGray-400">Mot de passe oublié ?</a>
                        </div>
                        {{-- <input type="password" class="form-control" name="password"  value="{{ old('password') }}"id="password"> --}}

                        <input type="password" name="password" value="{{ old('password') }}" id="password"
                            placeholder="*****"
                            class="w-full px-3 py-2 border rounded-md dark:border-coolGray-700 dark:bg-coolGray-900 dark:text-coolGray-100">
                    </div>
                </div>
                <div class="space-y-2">
                    <div>
                        <button type="submit"
                            class="w-full px-8 py-3 rounded-md text-white bg-blue-400">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
<!-- Fin de l'Initialisation du document HTML -->
