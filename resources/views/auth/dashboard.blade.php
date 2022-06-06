@extends('layouts.base')
@section('content')
    <section class="row wrap full-screen my-6 dark:bg-gray-700 dark:text-white">

        <x-alert :errors="session('errors')" :success="session('success')" />

        <div class="flex flex-wrap items-center justify-center">
            <div class="bg-Gray-800 text-Gray-100 my-8 flex w-full flex-wrap items-center justify-center gap-2">
                {{-- overflow-x-auto overflow-y-hidden  flex-nowrap --}}
                @foreach ($offices_typo as $office)
                    <a href="/dashboard/{{ $office->code_name }}"
                        class="@if ($active_office == $office->code_name) border-blue-400 @endif dark:text-Gray-400 flex-shrink-0 border-b-4 px-5 py-2 hover:border-blue-300">{{ $office->name }}</a>
                @endforeach
            </div>

            <div id="dropdown-toggle2" class="inline-flex divide-x divide-gray-600 rounded bg-blue-400 text-white">
                <button type="button" class="px-4 py-2 font-semibold">Nouvel Article</button>
                <button type="button" title="Toggle dropdown" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
            <!-- Dropdown menu -->
            <div class="relative my-auto block">
                <div id="dropdown-menu2"
                    class="absolute right-0 z-20 mt-5 hidden w-44 items-center rounded-md bg-white py-2 shadow-xl dark:bg-gray-800">
                    @foreach ($offices_typo as $office)
                        <a href="{{ route('posts.create', ['office_code_name' => $office->code_name]) }}"
                            class="block transform px-4 py-2 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            {{ $office->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div
            class="dark:text-Gray-100 container mx-auto mt-6 rounded-md bg-zinc-100 p-2 text-black shadow-md shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:p-4">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Articles à valider</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
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
                        <th class="p-3">Date de création</th>
                        <th class="p-3">Date de mise à jour</th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts->sortByDesc('updated_at') as $post)
                            @if (!$post->is_published)
                                <tr class="dark:border-Gray-700 dark:bg-Gray-900 border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>{{ $post->id }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->title }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->created_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->updated_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td>
                                        <span class="rounded-md bg-green-500 px-3 py-1 font-semibold text-white">
                                            <a href="/admin/{{ $post->id }}/validate">
                                                <span>Accepter</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="rounded-md bg-blue-500 px-3 py-1 font-semibold text-white">
                                            <a href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="rounded-md bg-red-500 px-3 py-1 font-semibold text-white">
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
            class="dark:text-Gray-100 container mx-auto mt-6 rounded-md bg-zinc-100 p-2 text-black shadow-md shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:p-4">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Articles validés</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
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
                            <th class="p-3">Date de création</th>
                            <th class="p-3">Date de mise à jour</th>
                            <th class="p-3"></th>
                            <th class="p-3"></th>
                            <th class="p-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            @if ($post->is_published)
                                <tr class="dark:border-Gray-700 dark:bg-Gray-900 border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>{{ $post->id }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->title }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->created_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td class="p-3">
                                        <p>{{ $post->updated_at }}</p>
                                        {{-- <p class="dark:text-coolGray-400">Friday</p> --}}
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <span class="rounded-md bg-blue-500 px-3 py-1 font-semibold text-white">
                                            <a href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="rounded-md bg-red-500 px-3 py-1 font-semibold text-white">
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
