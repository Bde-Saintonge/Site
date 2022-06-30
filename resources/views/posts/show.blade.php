@extends('layouts.base')
@section('content')
    <div class="md:min-h-[60rem] lg:min-h-[49rem] p-3 mx-auto sm:p-10 md:p-16 dark:bg-gray-700">
        <div class="flex flex-col max-w-6xl mx-auto overflow-hidden rounded">
            <div class="h-60 w-auto bg-cover bg-center bg-no-repeat sm:h-96"
                 style="background-image: url( {{ $post->image_url }} )"></div>
            <div
                class="mx-0 mb-4 -mt-16 space-y-6 break-words rounded-md bg-zinc-100 p-4 pb-12 shadow-md shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:mx-12 sm:py-6 sm:px-10">
                <div class="space-y-2">
                    <h1 class="text-2xl font-semibold sm:text-6xl">{{ $post->title }}</h1>
                    <p class="dark:text-coolGray-400 text-sm">Par
                        <a href="{{ route('office.index', ['office' => $post->office->code_name]) }}"
                           class="text-xs hover:underline">{{ $post->office->name }}</a>
                    </p>
                </div>
                <hr class="sm:mx-12">
                <article class="bde dark:text-coolGray-100">
                    {!! $post->content !!}
                </article>
            </div>
        </div>
    </div>
@endsection
