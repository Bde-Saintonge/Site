@extends('layouts.base')
@section('content')
    <section class="row wrap full-screen my-6 dark:bg-gray-700 dark:text-white">

        <x-alert :errors="session('errors')" :success="session('success')" />

        <div class="flex flex-wrap items-center justify-center">
            <div class="bg-Gray-800 text-Gray-100 my-8 flex w-full flex-wrap items-center justify-center gap-2">
                @foreach ($offices_typo as $office)
                    <a href="{{ route('admin.dashboard', ['office' => $office->code_name]) }}"
                       class="@if ($active_office == $office->code_name) border-blue-400 @endif dark:text-Gray-400 flex-shrink-0 border-b-4 px-5 py-2 hover:border-blue-300">{{ $office->name }}</a>
                @endforeach
            </div>

            <div id="dropdown-toggle2" class="inline-flex divide-x divide-gray-600 rounded bg-blue-400 text-white">
                <a href='{{ route('admin.posts.create') }}' class="px-4 py-2 font-semibold">Nouvel Article</a>
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
                        <th class="p-3">Date de mise à jour <span class='text-lg'>↓</span></th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts->sortByDesc('updated_at') as $post)
                        @if (!$post->is_published)
                            <tr class="dark:border-Gray-700 dark:bg-Gray-900 group border-b border-opacity-20">
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a
                                        href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->id }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a
                                        href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->title }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a
                                        href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->created_at }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a
                                        href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->updated_at }}</a>
                                </td>
                                <td class='px-3 py-1'>
                                    <form method="POST"
                                          action="{{ route('admin.posts.accept', ['post' => $post->id]) }}"
                                          class="rounded-md bg-green-500 px-3 py-1 font-semibold text-white">
                                        @csrf
                                        <button type='submit'>Accepter</button>
                                    </form>
                                </td>
                                <td class='px-3 py-1'>
                                        <span class="rounded-md bg-blue-500 px-3 py-1 font-semibold text-white">
                                            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                </td>
                                <td class='px-3 py-1'>
                                    <form method="POST"
                                          action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}"
                                          class="rounded-md bg-red-500 px-3 py-1 font-semibold text-white">
                                        @method('DELETE') @csrf
                                        <button type='submit'>Corbeille</button>
                                    </form>
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
                        <th class="p-3">Date de création <span class='text-lg'>↓</span></th>
                        <th class="p-3">Date de mise à jour</th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                        <th class="p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts->sortByDesc('created_at') as $post)
                        @if ($post->is_published)
                            <tr class="dark:border-Gray-700 dark:bg-Gray-900 group border-b border-opacity-20">
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->id }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->title }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->created_at }}</a>
                                </td>
                                <td class="p-3 group-hover:bg-blue-200">
                                    <a href="{{ route('office.show', ['office' => $active_office, 'post' => $post->slug]) }}">{{ $post->updated_at }}</a>
                                </td>
                                <td>
                                </td>
                                <td class='px-3 py-1'>
                                        <span class="rounded-md bg-blue-500 px-3 py-1 font-semibold text-white">
                                            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                </td>
                                <td class='px-3 py-1'>
                                    <form method="POST"
                                          action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}"
                                          class="rounded-md bg-red-500 px-3 py-1 font-semibold text-white">
                                        @method('DELETE') @csrf
                                        <button type='submit'>Corbeille</button>
                                    </form>
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
