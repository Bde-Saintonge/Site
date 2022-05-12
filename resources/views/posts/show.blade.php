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

<section class="p-6 dark:bg-gray-800 dark:text-gray-50">
	<form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
		<fieldset class="grid grid-cols-3 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">

			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="username" class="text-sm">Titre article</label>
					<input id="username" type="text" placeholder="Mon super article" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
				</div>

				<div class="col-span-full sm:col-span-3">
					<label for="website" class="text-sm">Lien image article</label>
					<input id="website" type="url" placeholder="https://monimage.fr/estici" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
				</div>

				<div class="col-span-full">
					<label for="bio" class="text-sm">Bio</label>
					<textarea id="bio" placeholder="" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900"></textarea>
                    <x-forms.tinymce-editor/>
                </div>				
			</div>
		</fieldset>
	</form>
</section>
<x-head.tinymce-config/>
@endsection
