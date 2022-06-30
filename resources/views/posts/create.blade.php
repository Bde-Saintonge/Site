@extends('layouts.base')
@section('content')
    <section class="p-2 dark:bg-gray-700 dark:text-gray-50 sm:p-6">
        {{-- TODO: Post query, path or hidden --}}
        <form action="{{ route('admin.posts.store') }}" method="POST"
              class="container mx-auto flex flex-col justify-center rounded-md bg-zinc-100 text-black shadow-md shadow-gray-300 dark:bg-gray-800 dark:text-white dark:shadow-gray-600">
            @csrf
            <fieldset class="grid grid-cols-3 gap-6 rounded-md p-4 shadow-sm dark:bg-gray-800 sm:p-6">
                <div class="col-span-full grid grid-cols-6 gap-4 lg:col-span-3">
                    <div class="col-span-full mb-6 sm:col-span-3">
                        <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Titre
                            de l'article *</label>
                        <input type="text" id="title" name="title"
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-white dark:text-black dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                               placeholder="Mon super article" required>
                    </div>
                    <div class="col-span-full mb-6 sm:col-span-3">
                        <label for="image_url" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Lien
                            vers l'image de l'article *</label>
                        <input type="url" id="image_url" name="image_url"
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-white dark:text-black dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                               placeholder="https://monimage.fr/est_ici" required>
                    </div>
                    <div class="col-span-full mb-6">
                        <label for="office"
                               class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Sélectionner
                            le bureau *</label>
                        <select required id="office" name="office"
                                class="block min-w-min rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            @foreach ($offices as $office)
                                <option value="{{ $office->code_name }}">{{ $office->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-full">
                        <label for="content" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Contenu
                            de l'article *</label>
                        <textarea id="content" name="text"
                                  class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900"></textarea>
                    </div>
                </div>
                <button type="submit"
                        class="col-span-full w-full rounded-lg bg-blue-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-300 focus:outline-none focus:ring-4 focus:ring-blue-500 sm:w-auto">
                    Envoyer
                </button>
            </fieldset>
        </form>
    </section>
    <x-head.tinymce-config />
@endsection
