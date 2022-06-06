@extends('layouts.base')
@section('content')
    <section class="p-2 dark:bg-gray-700 dark:text-gray-50 sm:p-6">
        @if (!isset($post))
            <form action="/admin/create/post" method="POST"
                class="container mx-auto flex flex-col justify-center rounded-md bg-zinc-100 text-black shadow-md shadow-gray-300 dark:bg-gray-800 dark:text-white dark:shadow-gray-600">

                @csrf
                {{-- <input type="hidden" name="id" value="{{ $post->id }}"> --}}
                <fieldset class="grid grid-cols-3 gap-6 rounded-md p-4 shadow-sm dark:bg-gray-800 sm:p-6">
                    <div class="col-span-full grid grid-cols-6 gap-4 lg:col-span-3">
                        <div class="col-span-full sm:col-span-3">

                            <label for="title" class="text-sm">Titre article</label>
                            <input id="title" name="title" type="text" placeholder="Mon super article"
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                        </div>

                        <div class="col-span-full sm:col-span-3">
                            <label for="image" class="text-sm">Lien image article</label>
                            <input id="image" name="image_url" type="url" placeholder="https://monimage.fr/est_ici"
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                        </div>

                        <div class="col-span-full">
                            <label for="content" class="text-sm">Contenu</label>
                            <textarea id="content" name="content" placeholder=""
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                    </textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="col-span-3 self-center rounded bg-blue-400 px-8 py-3 font-semibold text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500 sm:col-span-1 sm:mr-20">Envoyer</button>
                </fieldset>
            </form>
        @else
            <form action="/admin/{{ $post->id }}/update" method="POST"
                class="container mx-auto flex flex-col justify-center space-y-12 rounded-md bg-zinc-100 text-black shadow-md shadow-gray-300 dark:bg-gray-800 dark:text-white dark:shadow-gray-600">

                @csrf
                {{-- <input type="hidden" name="id" value="{{ $post->id }}"> --}}
                <fieldset class="grid grid-cols-3 gap-6 rounded-md p-6 shadow-sm dark:bg-gray-800">
                    <div class="col-span-full grid grid-cols-6 gap-4 lg:col-span-3">
                        <div class="col-span-full sm:col-span-3">

                            <label for="title" class="text-sm">Titre article</label>
                            <input id="title" name="title" type="text" value="{{ $post->title }}"
                                placeholder="Mon super article"
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                        </div>

                        <div class="col-span-full sm:col-span-3">
                            <label for="image" class="text-sm">Lien image article</label>
                            <input id="image" name="image_url" type="url" value="{{ $post->image_url }}"
                                placeholder="https://monimage.fr/estici"
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                        </div>

                        <div class="col-span-full">
                            <label for="content" class="text-sm">Contenu</label>
                            <textarea id="content" name="content" placeholder=""
                                class="w-full rounded-md focus:ring focus:ring-blue-400 focus:ring-opacity-75 dark:border-gray-700 dark:text-gray-900">
                        {{ $post->content }}
                    </textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="col-span-3 self-center rounded bg-blue-400 px-8 py-3 font-semibold text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500 sm:col-span-1 sm:mr-20">Envoyer</button>
                </fieldset>
            </form>
        @endif
    </section>
    <x-head.tinymce-config />
@endsection
