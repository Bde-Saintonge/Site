@extends('layouts.base')
@section('content')
    <section class="p-6 dark:bg-gray-700 dark:text-gray-50">
        <form action="{{ route('updatePost') }}" method="POST"
            class="container justify-center flex flex-col mx-auto space-y-12 shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-gray-800 text-black dark:text-white rounded-md shadow-md">

            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <fieldset class="grid grid-cols-3 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-800">
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    <div class="col-span-full sm:col-span-3">

                        <label for="title" class="text-sm">Titre article</label>
                        <input id="title" name="title" type="text" value="{{ $post->title }}"
                            placeholder="Mon super article"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
                    </div>

                    <div class="col-span-full sm:col-span-3">
                        <label for="image" class="text-sm">Lien image article</label>
                        <input id="image" name="image_url" type="url" value="{{ $post->image_url }}"
                            placeholder="https://monimage.fr/estici"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
                    </div>

                    <div class="col-span-full">
                        <label for="content" class="text-sm">Contenu</label>
                        <textarea id="content" name="content" placeholder=""
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
							{{ $post->content }}
						</textarea>
                    </div>
                </div>
                <button type="submit"
                    class="col-span-3 sm:col-span-1 sm:mr-20 self-center px-8 py-3 font-semibold rounded bg-blue-400 text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500">Envoyer</button>
            </fieldset>
        </form>
    </section>
    <x-head.tinymce-config />
@endsection
