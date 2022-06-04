<!-- Initialisation du contenu du document HTML   -->
@extends('layouts.base')
@section('content')
    <section class="bg-cover bg-no-repeat" style="background-image: url( {{ asset('media/images/fond.jpg') }} )">
        <div
            class="container mx-auto flex flex-col justify-center p-6 text-black sm:py-12 lg:flex-row lg:justify-between lg:py-24">
            <div
                class="flex flex-col justify-center rounded-md bg-white/90 p-6 text-center lg:max-w-md lg:text-left xl:max-w-xl">
                <h1 class="text-4xl font-bold leading-none sm:text-6xl">
                    Bureau des
                    <span class="text-blue-400">élèves</span>
                    de Saintonge
                </h1>
                <p class="mt-6 text-justify text-lg">
                    Bienvenue sur le site du bureau des élèves du lycée Sainte Famille Saintonge.
                    <br class="hidden md:inline">
                    Créé en 2018, ce bureau regroupe trois entités détaillées ci-dessous : le <strong>Bureau Des
                        Actions</strong> (BDA), le <strong>Bureau des cultures</strong> (BDC), le <strong>Bureau des
                        Sports</strong> (BDS) ainsi que le <strong>Pôle Communication</strong>.
                </p>

            </div>
        </div>
    </section>
    <section class="bg-white py-12 px-6 dark:bg-gray-700 sm:p-16">
        <div class="grid grid-cols-1 justify-items-center gap-x-8 gap-y-12 md:grid-cols-2 xl:grid-cols-4">
            <div
                class="max-w-sm rounded-md bg-zinc-100 text-black shadow-xl shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:max-w-md lg:max-w-xs">
                <img src="{{ asset('media/images/bda_logo.png') }}" alt=""
                    class="h-56 w-full rounded-t-md object-contain object-center sm:h-72">
                <div class="flex flex-col justify-between space-y-8 p-6">
                    <div class="space-y-2">
                        <h2 class="text-xl font-semibold tracking-wide sm:text-3xl xl:text-2xl 2xl:text-3xl">BUREAU DES
                            ACTIONS (BDA)</h2>
                        <p class="h-12 text-justify">S'occupe du journal du lyc&eacute;e, l'atelier
                            th&eacute;&acirc;tre, etc.</p>
                    </div>
                    <a href="/bda"
                        class="flex w-full items-center justify-center rounded-md bg-blue-400 p-3 text-sm font-semibold tracking-wide text-white sm:text-base">VOIR
                        LES ACTUALIT&Eacute;S</a>
                </div>
            </div>
            <div
                class="max-w-sm rounded-md bg-zinc-100 text-black shadow-xl shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:max-w-md lg:max-w-xs">
                <img src="{{ asset('media/images/bdc_logo.png') }}" alt=""
                    class="h-56 w-full rounded-t-md object-contain object-center sm:h-72">
                <div class="flex flex-col justify-between space-y-8 p-6">
                    <div class="space-y-2">
                        <h2 class="tracking-wid text-xl font-semibold sm:text-3xl xl:text-2xl 2xl:text-3xl">BUREAU DES
                            CULTURES (BDC)</h2>
                        <p class="h-12 text-justify">S'occupe d'organiser et d'animer les &eacute;v&eacute;nements
                            cultuels du
                            lyc&eacute;e.</p>
                    </div>
                    <a href="/bdc"
                        class="flex w-full items-center justify-center rounded-md bg-blue-400 p-3 text-sm font-semibold tracking-wide text-white sm:text-base">VOIR
                        LES ACTUALIT&Eacute;S</a>
                </div>
            </div>
            <div
                class="max-w-sm rounded-md bg-zinc-100 text-black shadow-xl shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:max-w-md lg:max-w-xs">
                <img src="{{ asset('media/images/bds_logo.png') }}" alt=""
                    class="h-56 w-full rounded-t-md object-contain object-center sm:h-72">
                <div class="flex flex-col justify-between space-y-8 p-6">
                    <div class="space-y-2">
                        <h2 class="text-xl font-semibold tracking-wide sm:text-3xl xl:text-2xl 2xl:text-3xl">BUREAU DES
                            SPORTS (BDS)</h2>
                        <p class="h-12 text-justify">S'occupe d'organiser et d'animer les &eacute;v&eacute;nements
                            sportifs.
                        </p>
                    </div>
                    <a href="/bds"
                        class="flex w-full items-center justify-center rounded-md bg-blue-400 p-3 text-sm font-semibold tracking-wide text-white sm:text-base">VOIR
                        LES ACTUALIT&Eacute;S</a>
                </div>
            </div>
            <div
                class="max-w-sm rounded-md bg-zinc-100 text-black shadow-xl shadow-gray-300 dark:bg-white dark:shadow-gray-600 sm:max-w-md lg:max-w-xs">
                <img src="{{ asset('media/images/pole-com_logo.png') }}" alt=""
                    class="h-56 w-full rounded-t-md object-contain object-center sm:h-72">
                <div class="flex flex-col justify-between space-y-8 p-6">
                    <div class="space-y-2">
                        <h2
                            class="text-xl font-semibold tracking-wide sm:text-3xl xl:h-16 xl:text-2xl 2xl:h-auto 2xl:text-3xl">
                            BUREAU DU P&Ocirc;LE COM</h2>
                        <p class="h-12 text-justify">Assure principalement la gestion des articles de ce site web.</p>
                    </div>
                    <a href="/pole-com"
                        class="flex w-full items-center justify-center rounded-md bg-blue-400 p-3 text-sm font-semibold tracking-wide text-white sm:text-base">VOIR
                        LES ACTUALIT&Eacute;S</a>
                </div>
            </div>

        </div>
    </section>
@endsection
