<!-- Initialisation du document HTML   -->
@extends('layouts.base')
@section('content')
    <x-alert :errors="session('errors')" :success="session('success')" />
    <section class="row wrap full-screen flex justify-center dark:bg-gray-700" id="register-image">
        <div
            class="dark:bg-coolGray-900 dark:text-coolGray-100 my-12 flex flex-col rounded-md bg-zinc-100 p-6 dark:bg-white sm:w-3/5 sm:p-10">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Créer un utilisateur</h1>
                <p class="dark:text-coolGray-400 text-sm">Remplissez le formulaire de création d'utilisateur.</p>
            </div>
            <form method="post" action="/admin/user/create" class="ng-untouched ng-pristine ng-valid space-y-6">
                @csrf
                <div class="space-y-4">
                    <div class="grid space-y-4 xl:grid-cols-2 xl:gap-6 xl:space-y-0">
                        <div class="group relative z-0 w-full">
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder=' ' required
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:focus:border-blue-500" />
                            <label for="first_name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Prénom</label>
                        </div>
                        <div class="group relative z-0 w-full">
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder=' ' required
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:focus:border-blue-500" />
                            <label for="last_name"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Nom</label>
                        </div>
                    </div>
                    <div class="group relative z-0 mb-6 w-full">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder=' ' required
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:focus:border-blue-500" />
                        <label for="email"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Adresse
                            E-mail</label>
                    </div>
                    <div class="group relative z-0 mb-6 w-full">
                        <input type="password" name="password" id="password" placeholder=' ' required
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:focus:border-blue-500" />
                        <label for="password"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Password</label>
                    </div>
                    <hr>
                    <label for="offices"
                        class="mb-2 block text-sm font-normal text-gray-500 dark:text-gray-400">Sélectionner
                        le bureau</label>
                    <select required id="offices" name="office_code_name"
                        class="block min-w-min rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                        @foreach ($offices as $office)
                            <option value="{{ $office->code_name }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                    <hr>
                    <fieldset>
                        <legend class="not-sr-only mb-2 block text-sm font-normal text-gray-500 dark:text-gray-400">
                            Choisir le/les rôles
                        </legend>
                        @foreach ($roles as $role)
                            <div class="mb-4 flex items-center">
                                <input id="checkbox-1" type="checkbox" name="roles[]" value="{{ $role->name }}"
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                                <label for="checkbox-1"
                                    class="ml-2 text-sm text-gray-500 dark:text-gray-400">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </fieldset>
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-400 px-5 py-2.5 text-center text-sm font-semibold text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">
                    Créer
                </button>
            </form>
        </div>
    </section>
@endsection
<!-- Fin de l'Initialisation du document HTML -->
