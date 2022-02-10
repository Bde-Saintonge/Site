<!-- Initialisation du contenu du document HTML   -->
@extends('layouts.base')
@section('content')
    <section class="bg-cover bg-no-repeat" style="background-image: url( {{ asset('media/images/fond.jpg')}} )">
        <div class="text-black container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="bg-white/90 rounded-md flex flex-col justify-center p-6 text-center lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-4xl font-bold leading-none sm:text-6xl">
                    Bureau des
                    <span class="text-blue-400">élèves</span>
                    de Saintonge
                </h1>
                <p class="mt-6 text-lg text-justify ">
                    Bienvenue sur le site du bureau des élèves du lycée Sainte Famille Saintonge.
                    <br class="hidden md:inline lg:hidden">
                    Créé en 2018, ce bureau regroupe trois entités détaillées ci-dessous : le <strong>Bureau Des Actions</strong> (BDA), le <strong>Bureau des cultures</strong> (BDC), le <strong>Bureau des Sports</strong> (BDS) ainsi que le <strong>Pôle Communication</strong>.
                </p>
                
            </div>
        </div>
    </section>
    <section class="dark:bg-gray-700 bg-white p-16">
        <div class="grid grid-cols-2 xl:grid-cols-4 justify-items-center">
            <div class="max-w-xs rounded-md shadow-xl shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black ">
                <img src="{{ asset('media/images/bda_logo.png')}}" alt="" class="object-cover object-center w-full rounded-t-md h-72">
                <div class="flex flex-col justify-between p-6 space-y-8">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-semibold tracking-wide">BUREAU DES ACTIONS (BDA)</h2>
                        <p>Présentation / Explication du Bureau des Actions.</p>
                    </div>
                    <div href="/bda" class="flex items-center justify-center w-full p-3 font-semibold tracking-wide rounded-md bg-blue-400 text-white">EN SAVOIR PLUS</div>
                </div>
            </div>
            <div class="max-w-xs rounded-md shadow-xl shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black ">
                <img src="{{ asset('media/images/bdc_logo.png')}}" alt="" class="object-cover object-center w-full rounded-t-md h-72">
                <div class="flex flex-col justify-between p-6 space-y-8">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-semibold tracking-wide">BUREAU DES CULTURES (BDC)</h2>
                        <p>Présentation / Explication du bureau des Cultures.</p>
                    </div>
                    <div href="/bdc" class="flex items-center justify-center w-full p-3 font-semibold tracking-wide rounded-md bg-blue-400 text-white">EN SAVOIR PLUS</div>
                </div>
            </div>
            <div class="max-w-xs rounded-md shadow-xl shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black ">
                <img src="{{ asset('media/images/bds_logo.png')}}" alt="" class="object-cover object-center w-full rounded-t-md h-72">
                <div class="flex flex-col justify-between p-6 space-y-8">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-semibold tracking-wide">BUREAU DES SPORTS (BDS)</h2>
                        <p>Présentation / Explication du Bureau des Sports.</p>
                    </div>
                    <div href="/bds" class="flex items-center justify-center w-full p-3 font-semibold tracking-wide rounded-md bg-blue-400 text-white">EN SAVOIR PLUS</div>
                </div>
            </div>
            <div class="max-w-xs rounded-md shadow-xl shadow-gray-300 dark:shadow-gray-600 bg-zinc-100 dark:bg-white text-black ">
                <img src="{{ asset('media/images/pole-com_logo.png')}}" alt="" class="object-cover object-center w-full rounded-t-md h-72">
                <div class="flex flex-col justify-between p-6 space-y-8">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-semibold tracking-wide">BUREAU DU PÔLE COM</h2>
                        <p>Présentation / Explication du Bureau du Pôle Communication.</p>
                    </div>
                    <div href="/pole-com" class="flex items-center justify-center w-full p-3 font-semibold tracking-wide rounded-md bg-blue-400 text-white">EN SAVOIR PLUS</button>
                </div>
            </div>
            
        </div>
    </section>
@endsection
