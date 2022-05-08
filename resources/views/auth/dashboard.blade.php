@extends('layouts.base')
@section('content')
    <section class="my-6 dark:bg-gray-700 dark:text-white row wrap full-screen" id="register-image">

        <div class="justify-center xLarge-12 large-12 medium-12 small-12 xSmall-12">

            {!! $errors->first('error', '<div class="alert alert-warning center" role="alert">:message</div>') !!}

            @if (isset($success))
                <div
                    class="flex items-center justify-between p-6 border-l-8 sm:py-8 border-blue-400 bg-Gray-900 text-Gray-100">
                    <span>{{ $success }}</span>
                </div>
            @endif
        </div>

        <div
            class="my-12 flex items-center space-x-2 overflow-x-auto overflow-y-hidden sm:justify-center flex-nowrap bg-Gray-800 text-Gray-100">
            @foreach ($offices_typo as $office)
                <a href="/dashboard/{{ $office[0] }}"
                    class="
                    @if ($active_office == $office[0]) border-blue-400 @endif
                    flex items-center flex-shrink-0 px-5 py-2 border-b-4 hover:border-blue-300 dark:text-Gray-400">{{ $office[1] }}</a>
            @endforeach
        </div>
        <div
            class="mt-6 rounded-md shadow-md shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black  container p-2 mx-auto sm:p-4 dark:text-Gray-100">
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
                        @foreach ($posts as $post)
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
                                            <a target="_blank" href="/admin/{{ $post->id }}/validate">
                                                <span>Accepter</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-blue-500 text-white">
                                            <a target="_blank" href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-red-500 text-white">
                                            <a target="_blank" href="/admin/{{ $post->id }}/delete">
                                                <span>Supprimer</span>
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
                                            <a target="_blank" href="/admin/{{ $post->id }}/edit">
                                                <span>Modifier</span>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="px-3 py-1 font-semibold rounded-md bg-red-500 text-white">
                                            <a target="_blank" href="/admin/{{ $post->id }}/delete">
                                                <span>Supprimer</span>
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
