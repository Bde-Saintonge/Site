{{-- <h1>{{ $post->name }}</h1>
<p>
    <small>
        Le: <a href="{{ route('posts.office', ['office_slug' => $post->office->slug]) }}">{{ $post->office->name }}</a>
        vous propose l'article intitulé <i>"{{$post->name}}"</i> rédigé par: <a href="{{ route('posts.user', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a>
        ajouté le {{ $post->created_at->format('d M Y') }}
    </small>
</p>

{!! $post->html !!}

<p>&nbsp;</p> --}}



@extends('layouts.base')
@section('content')

        <div class="md:min-h-[60rem] lg:min-h-[49rem] p-5 mx-auto sm:p-10 md:p-16 dark:bg-gray-700">
            <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">
                <img src="https://source.unsplash.com/random/480x360" alt=""
                    class="w-full h-60 sm:h-96 dark:bg-coolGray-500">
                <div
                    class="p-6 pb-12 m-4 mx-auto -mt-16 space-y-6 lg:max-w-4xl sm:px-10 sm:mx-12 lg:rounded-md shadow-md shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white">
                    <div class="space-y-2">
                        <p class="inline-block text-2xl font-semibold sm:text-3xl">The Best Activewear from the Nordstrom
                            Anniversary Sale</p>
                        <p class="text-xs dark:text-coolGray-400">Par
                            <a href="/{{ strtolower($office->name) }}" class="text-xs hover:underline">{{ $office->name }}</a>
                        </p>
                    </div>
                    <div class="dark:text-coolGray-100">
                        <p>
                            {{-- <?= $post->content ?> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

@endsection
