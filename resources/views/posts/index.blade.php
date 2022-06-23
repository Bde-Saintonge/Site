@extends('layouts.base')
@section('content')
    {{-- /\_/\  (
        ( ^.^ ) _)
        \"/  (
        ( | | )
        (__d b__) --}}

    <section class="bg-white dark:bg-gray-700 dark:text-white">
        <div
            class="container mx-auto flex flex-col items-center px-4 pt-16 text-center md:px-10 md:pt-32 lg:px-32 xl:max-w-3xl">
            <h1 class="text-4xl font-bold leading-none sm:text-5xl">Articles du <span
                    class="dark:text-blue-400">{{ $office->complete_name }}</span>.</h1>
            <p class="mt-8 mb-12 px-8 text-lg">Vous êtes sur la page d'articles du
                {{ $office->complete_name }}, triés du plus récent au plus ancien.
            </p>
        </div>
    </section>

    {{-- @php
    dd($posts);
    @endphp --}}

    <section class="bg-white dark:bg-gray-700 dark:text-white">
        <div class="container mx-auto max-w-6xl space-y-6 p-6 sm:space-y-12">
            @if (count($posts) < 1)
                <div class="container mx-auto p-4 text-center">
                    <h2 class="text-4xl font-bold">Aucun article de disponible pour le moment.</h2>
                </div>
            @endif
            @foreach ($posts as $key => $post)
                @if ($key === 0)
                    <a rel="noopener noreferrer"
                       href="{{ route('office.post', ['office' => $office->code_name, 'post' => $post->slug]) }}"
                       class="group dark:bg-coolGray-900 mx-auto block max-w-sm gap-3 hover:no-underline focus:no-underline sm:max-w-full lg:grid lg:grid-cols-12">
                        <img src="{{ $post->image_url }}" alt=""
                             class="dark:bg-coolGray-500 h-64 w-full rounded object-cover sm:h-96 lg:col-span-7">
                        <div class="space-y-2 p-6 lg:col-span-5">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline sm:text-4xl">
                                {{ $post->title }}
                            </h3>
                            <span class="dark:text-coolGray-400 text-xs">{{ $post->created_at->format('d/m/Y') }}</span>
                            <p>{{ $post->summary }}</p>
                        </div>
                    </a>
                @endif
            @endforeach

            <div class="grid grid-cols-1 justify-center gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($posts as $key => $post)
                    @if ($key != 0)
                        <a rel="noopener noreferrer"
                           href="{{ route('office.post', ['office' => $office->code_name, 'post' => $post->slug]) }}"
                           class="group dark:bg-coolGray-900 mx-auto max-w-sm hover:no-underline focus:no-underline">
                            <img class="dark:bg-coolGray-500 h-44 w-full rounded object-cover"
                                 src="{{ $post->image_url }}" alt="">
                            <div class="space-y-2 p-6">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $post->title }}
                                </h3>
                                <span
                                    class="dark:text-coolGray-400 text-xs">{{ $post->created_at->format('d/m/Y') }}</span>
                                <p>
                                    {{ $post->summary }}
                                </p>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- {{ dd($posts) }} --}}
        </div>
        @if (count($posts) > 0)
            <div class="flex items-center justify-center space-x-3 text-xs">
                <span class="block">Page {{ $posts->currentPage() }} sur {{ $posts->lastPage() }}</span>
                <div class="space-x-1">
                    <a href="{{ $posts->previousPageUrl() }}" title="précédent"
                       class="inline-flex h-8 w-8 items-center justify-center rounded-md border py-0 shadow">
                        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round" class="w-4">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </a>
                    <a href="{{ $posts->nextPageUrl() }}" title="suivant"
                       class="inline-flex h-8 w-8 items-center justify-center rounded-md border py-0 shadow">
                        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round" class="w-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </section>
@endsection
