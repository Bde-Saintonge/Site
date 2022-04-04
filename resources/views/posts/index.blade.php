@extends('layouts.base')
@section('content')
    {{-- /\_/\  (
 ( ^.^ ) _)
   \"/  (
 ( | | )
(__d b__) --}}


    {{-- dark:bg-coolGray-800 dark:text-coolGray-100 --}}
    <section class="dark:bg-gray-700 bg-white dark:text-white">
        <div
            class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl">
            <h1 class="text-4xl font-bold leading-none sm:text-5xl">News du <span
                    class="dark:text-blue-400">{{ $office->complete_name }}</span>.</h1>
            <p class="px-8 mt-8 mb-12 text-lg">Vous êtes sur la page d'articles du
                {{ $office->complete_name }}.
            </p>
        </div>
    </section>



    <section class="dark:bg-gray-700 bg-white dark:text-white">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            @if (count($posts) < 1)
                <div class="container p-4 mx-auto text-center">
                    <h2 class="text-4xl font-bold">Aucun article de disponible pour le moment.</h2>
                </div>
            @endif
            @foreach ($posts as $key => $post)
                @if ($key === 0)
                    <a rel="noopener noreferrer" href="#"
                        class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-coolGray-900">
                        <img src="https://source.unsplash.com/random/480x360" alt=""
                            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-coolGray-500">
                        <div class="p-6 space-y-2 lg:col-span-5">
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                                {{ $post->title }}
                            </h3>
                            <span class="text-xs dark:text-coolGray-400">{{ $post->created_at->format('d/m/Y') }}</span>
                            <p>{{ $post->summary }}</p>
                        </div>
                    </a>
                @endif
            @endforeach

            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($posts as $key => $post)
                    @if ($key != 0)
                        <a rel="noopener noreferrer" href="#"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
                            <img class="object-cover w-full rounded h-44 dark:bg-coolGray-500"
                                src="https://source.unsplash.com/random/480x360?1" alt="">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $post->title }}
                                </h3>
                                <span class="text-xs dark:text-coolGray-400">{{ $post->created_at->format('d/m/Y') }}</span>
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
    </section>
@endsection


