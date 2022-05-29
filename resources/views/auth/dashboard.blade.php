@extends('layouts.base')
@section('content')
    <section class="my-6 dark:bg-gray-700 dark:text-white row wrap full-screen">

        <x-alert :errors="session('errors')" :success="session('success')" />

        <div class="flex items-center justify-center flex-wrap">
            <div class="flex items-center justify-center gap-2 w-full my-8 bg-Gray-800 text-Gray-100 flex-wrap">
                {{-- overflow-x-auto overflow-y-hidden  flex-nowrap --}}
                @foreach ($offices_typo as $office)
                    <a href="/dashboard/{{ $office->code_name }}"
                        class="
                        @if ($active_office == $office->code_name) border-blue-400 @endif
                       flex-shrink-0 px-5 py-2 border-b-4 hover:border-blue-300 darùk:text-Gray-400">{{ $office->name }}</a>
                @endforeach
            </div>


            <div class="inline-flex divide-x rounded bg-blue-400 text-white divide-gray-600">
                <button type="button" class="font-semibold px-4 py-2">Nouvel Article</button>
                <button type="button" title="Toggle dropdown" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div
            class="mt-6 rounded-md shadow-md shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black container p-2 mx-auto sm:p-4 dark:text-Gray-100">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Articles à valider</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col class="w-24">
                        <col class="w-24">
                        <col class="w-24">
                    </colgroup>
                    <thead class="dark:bg-Gray-700">
                        <tr class="text-left">
                            <th class="p-3">Numéro d'article</th>
                            <th class="p-3">Titre</th>
                            <th class="p-3">Date d'écriture</th>
                            <th class="p-3"></th>
                            <th class="p-3"></th>
                            <th class="p-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts->sortBy('created_at') as $post)
                            @if (!$post->is_published)
                                <tr class="border-b border-opacity-20 dark:border-Gray-700 dark:bg-Gray-900">
                                    <td class="p-3">
                                        <p>{{ $post->id }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->title }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->updated_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-green-500 text-white">
                                            <a href="/admin/{{ $post->id }}/validate">
                                                <span>Accepter</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-blue-500 text-white">
                                            <a href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-red-500 text-white">
                                            <a href="/admin/{{ $post->id }}/delete">
                                                <span>Corbeille</span>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="mt-6 rounded-md shadow-md shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black  container p-2 mx-auto sm:p-4 dark:text-Gray-100">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Articles validés</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col class="w-24">
                        <col class="w-24">
                    </colgroup>
                    <thead class="dark:bg-Gray-700">
                        <tr class="text-left">
                            <th class="p-3">Numéro d'article</th>
                            <th class="p-3">Titre</th>
                            <th class="p-3">Date d'écriture</th>
                            <th class="p-3"></th>
                            <th class="p-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            @if ($post->is_published)
                                <tr class="border-b border-opacity-20 dark:border-Gray-700 dark:bg-Gray-900">
                                    <td class="p-3">
                                        <p>{{ $post->id }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->title }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->updated_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-blue-500 text-white">
                                            <a href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-red-500 text-white">
                                            <a href="/admin/{{ $post->id }}/delete">
                                                <span>Corbeille</span>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </section>
@endsection
