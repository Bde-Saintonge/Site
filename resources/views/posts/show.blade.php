@extends('layouts.base')
@section('content')

<section class="p-6 dark:bg-gray-800 dark:text-gray-50">
	<form action="post" class="container justify-center flex flex-col mx-auto space-y-12">
		<fieldset class="grid grid-cols-3 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="title" class="text-sm">Titre article</label>
					<input id="title" type="text" value="{{ $post->title}}" placeholder="Mon super article" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
				</div>

				<div class="col-span-full sm:col-span-3">
					<label for="image" class="text-sm">Lien image article</label>
					<input id="image" type="url" value="{{ $post->image_url}}" placeholder="https://monimage.fr/estici" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
				</div>

				<div class="col-span-full">
					<label for="content" class="text-sm">Contenu</label>
					<textarea id="content" placeholder="" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900"></textarea>
                </div>				
			</div>
			<button type="submit" class="col-span-3 sm:col-span-1 sm:mr-20 self-center px-8 py-3 font-semibold rounded bg-blue-400 text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500">Envoyer</button>
		</fieldset>
	</form>
</section>
<x-head.tinymce-config/>
@endsection
