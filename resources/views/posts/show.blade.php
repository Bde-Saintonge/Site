@extends('layouts.base')
@section('content')
    <div class="md:min-h-[60rem] lg:min-h-[49rem] p-5 mx-auto sm:p-10 md:p-16 dark:bg-gray-700">
        <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">
            {{-- <img src="{{ $post->image_url }}" alt="" class="block w-auto h-60 sm:h-96 dark:bg-coolGray-500"> --}}
            <div class="w-auto h-60 sm:h-96 bg-cover bg-center bg-no-repeat"
                style="background-image: url( {{ $post->image_url }} )"></div>
            <div
                class="break-words p-6 pb-12 mb-4 mx-0 -mt-16 space-y-6 sm:px-10 sm:mx-12 rounded-md shadow-md shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white">
                <div class="space-y-2">
                    <h1 class="text-2xl font-semibold sm:text-6xl">{{ $post->title }}</h1>
                    <p class="text-sm dark:text-coolGray-400">Par
                        <a href="/{{ strtolower($post->office->name) }}"
                            class="text-xs hover:underline">{{ $post->office->name }}</a>
                    </p>
                </div>
                <hr class="sm:mx-12">
                <div class="dark:text-coolGray-100">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
