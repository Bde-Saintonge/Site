<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Default meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <meta name='author' content='BDE Saintonge'>
    <meta name='owner' content='BDE Saintonge'>
    <meta name='subject' content="BDE Saintonge">

    <meta name='identifier-URL' content='https://www.bde-saintonge.fr/'>
    <meta name="description" content="Site du Bureau des élèves du lycée Sainte Famille Saintonge Bordeaux">
    <meta name='reply-to' content='contact@bde-saintonge.fr'>

    <meta name='language' content='FR'>
    <meta name='target' content='all'>
    <meta name='theme-color' content='#224096'>

    <link rel='shortcut icon' type='image/png' href='{{ asset('media/images/logo_saintonge.png') }}'>

    <link rel="apple-touch-icon" href="{{ asset('media/images/logo_saintonge.png') }}" />

    <!-- Twitter Card meta -->
    <meta name='twitter:card' content='summary'>
    <meta name="twitter:site" content="@BDE Saintonge" />
    <meta name="twitter:title" content="Bureau des élèves - Saintonge Bordeaux" />
    <meta name='twitter:url' content='https://www.bde-saintonge.fr/' />
    <meta name='twitter:domain' content='bde-saintonge.fr' />
    <meta name="twitter:description" content="Site du Bureau des élèves du lycée Sainte Famille Saintonge Bordeaux" />
    <meta name="twitter:image" content="{{ asset('media/images/logo_saintonge.png') }}" />

    <!-- Open Graph meta -->
    <meta property='og:title' content='BDE - Saintonge Bordeaux ' />
    <meta property="og:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta property="og:image" content="{{ asset('media/images/logo_saintonge.png') }}" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='https://www.bde-saintonge.fr/' />
    <meta property='og:site_name' content='BDE Saintonge' />
    <meta property='author' content='BDE Saintonge' />
    <meta property="og:locale" content="fr_FR" />

    <!-- IOS meta -->
    <meta name="apple-mobile-web-app-title" content="BDE-Saintonge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <!-- ICON Tab Navigator -->
    <link rel="icon" href="{{ asset('media\images\logo_saintonge.png') }}">

    <!-- Librairie  Local CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Bureau Des Élèves - Lycée Sainte Famille Saintonge</title>
</head>


<body class="dark:bg-gray-700">
<header class="w-full bg-slate-50 p-4 text-gray-800 dark:bg-gray-700 dark:text-gray-100">
    <div class="container mx-auto flex h-16 justify-between">
        <a href="/" aria-label="Retour à la racine" class="flex items-center">
            <img class="h-16 dark:contrast-150" src="{{ asset('media/images/logo_saintonge.png') }}"
                 alt="Logo famille Saintonge">
        </a>
        <ul class="hidden items-stretch space-x-3 lg:flex">
            <li class="flex">
                <a href="{{ route('office.index', ['office' => 'bda']) }}"
                   class="-mb-1 flex items-center border-transparent px-4 hover:border-b-2 hover:border-blue-400 hover:text-blue-400">BDA</a>
            </li>
            <li class="flex">
                <a href="{{ route('office.index', ['office' => 'bdc']) }}"
                   class="-mb-1 flex items-center border-transparent px-4 hover:border-b-2 hover:border-blue-400 hover:text-blue-400">BDC</a>
            </li>
            <li class="flex">
                <a href="{{ route('office.index', ['office' => 'bds']) }}"
                   class="-mb-1 flex items-center border-transparent px-4 hover:border-b-2 hover:border-blue-400 hover:text-blue-400">BDS</a>
            </li>
            <li class="flex">
                <a href="{{ route('office.index', ['office' => 'pole-com']) }}"
                   class="-mb-1 flex items-center border-transparent px-4 hover:border-b-2 hover:border-blue-400 hover:text-blue-400">Pôle
                    Com.</a>
            </li>
        </ul>
        <ul class="hidden w-32 justify-around lg:flex">
            <li class="flex items-center">
                <a href="mailto:contact@bde-saintonge.fr" alt="Mail contact famille saintonge">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="zoom h-8 w-8 stroke-slate-900 stroke-1 dark:stroke-white" fill="none"
                         viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </li>
                <li class="flex items-center">
                    <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank"
                        alt="Lien chaîne youtube famille saintonge">
                        <svg class="zoom h-8" viewBox="0 -38 256 256" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                            <g>
                                <path
                                    d="M250.346231,28.0746923 C247.358133,17.0320558 238.732098,8.40602109 227.689461,5.41792308 C207.823743,0 127.868333,0 127.868333,0 C127.868333,0 47.9129229,0.164179487 28.0472049,5.58210256 C17.0045684,8.57020058 8.37853373,17.1962353 5.39043571,28.2388718 C-0.618533519,63.5374615 -2.94988224,117.322662 5.5546152,151.209308 C8.54271322,162.251944 17.1687479,170.877979 28.2113844,173.866077 C48.0771024,179.284 128.032513,179.284 128.032513,179.284 C128.032513,179.284 207.987923,179.284 227.853641,173.866077 C238.896277,170.877979 247.522312,162.251944 250.51041,151.209308 C256.847738,115.861464 258.801474,62.1091 250.346231,28.0746923 Z"
                                    fill="#FF0000"></path>
                                <polygon fill="#FFFFFF" points="102.420513 128.06 168.749025 89.642 102.420513 51.224">
                                </polygon>
                            </g>
                        </svg>
                    </a>
                </li>
        </ul>

        @auth
            <div class="hidden flex-shrink-0 items-center lg:flex">
                <a href="{{ route('admin.dashboard') }}"
                   class="mr-1 self-center rounded bg-blue-400 px-8 py-3 font-semibold text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500">
                    Dashboard</a>
                <a href="{{ route('auth.logout') }}"
                   class="ml-1 self-center rounded bg-red-400 px-3 py-1 font-medium text-white hover:bg-red-300 focus:outline-none focus:ring focus:ring-red-900">
                    Déconnexion</a>
            </div>
        @elseguest
            <div class="hidden flex-shrink-0 items-center lg:flex">
                <a href="{{ route('auth.login') }}"
                   class="self-center rounded bg-blue-400 px-8 py-3 font-semibold text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500">Se
                    Connecter</a>
            </div>
        @endauth
        <div class="relative my-auto block lg:hidden">
            <!-- Dropdown toggle button -->
            <button id="dropdown-toggle"
                    class="group relative z-10 h-10 w-10 rounded-md border border-transparent bg-blue-400 p-2 text-white focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:bg-blue-400 dark:text-white dark:focus:ring-blue-400 dark:focus:ring-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown-menu"
                 class="absolute right-0 z-20 mt-2 hidden w-48 items-center rounded-md bg-white py-2 shadow-xl dark:bg-gray-800">
                <a href="{{ route('office.index', ['office' => 'bda']) }}"
                   class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    BDA
                </a>
                <a href="{{ route('office.index', ['office' => 'bdc']) }}"
                   class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    BDC
                </a>
                <a href="{{ route('office.index', ['office' => 'bds']) }}"
                   class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    BDS
                </a>
                <a href="{{ route('office.index', ['office' => 'pole-com']) }}"
                   class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    Pôle Com.
                </a>
                <hr class="border-gray-200 dark:border-gray-700">
                <a href="mailto:contact@bde-saintonge.fr" alt="Mail contact famille saintonge"
                   class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="mr-2 inline h-6 stroke-slate-900 stroke-1 dark:stroke-white" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Mail</a>
                    <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank"
                        alt="Lien chaîne youtube famille saintonge"
                        class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="mr-2 inline h-6" viewBox="0 -38 256 256" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                            <g>
                                <path
                                    d="M250.346231,28.0746923 C247.358133,17.0320558 238.732098,8.40602109 227.689461,5.41792308 C207.823743,0 127.868333,0 127.868333,0 C127.868333,0 47.9129229,0.164179487 28.0472049,5.58210256 C17.0045684,8.57020058 8.37853373,17.1962353 5.39043571,28.2388718 C-0.618533519,63.5374615 -2.94988224,117.322662 5.5546152,151.209308 C8.54271322,162.251944 17.1687479,170.877979 28.2113844,173.866077 C48.0771024,179.284 128.032513,179.284 128.032513,179.284 C128.032513,179.284 207.987923,179.284 227.853641,173.866077 C238.896277,170.877979 247.522312,162.251944 250.51041,151.209308 C256.847738,115.861464 258.801474,62.1091 250.346231,28.0746923 Z"
                                    fill="#FF0000"></path>
                                <polygon fill="#FFFFFF" points="102.420513 128.06 168.749025 89.642 102.420513 51.224">
                                </polygon>
                            </g>
                        </svg>
                        Youtube
                    </a>
                <hr class="border-gray-200 dark:border-gray-700">

                @auth
                    <a href="{{ route('admin.dashboard') }}"
                       class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        Dashboard
                    </a>
                    <a href="{{ route('auth.logout') }}"
                       class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        Déconnexion
                    </a>
                @elseguest
                    <a href="{{ route('auth.login') }}"
                       class="block transform px-4 py-3 text-sm capitalize text-gray-600 transition-colors duration-200 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        Se Connecter
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
<main>
    @yield('content')
    </main>
    <footer class="bg-white p-6 text-black dark:bg-gray-700 dark:text-white">
        <hr class="mx-auto my-10 w-3/4 rounded-lg border-2">
        <div
            class="container mx-auto grid grid-cols-1 gap-x-3 gap-y-8 text-center sm:grid-cols-3 sm:justify-items-center">
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Informations</h2>
                <div class="dark:text-coolGray-400 flex flex-col space-y-2 text-sm">
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                        rel="noopener noreferrer" href="https://goo.gl/maps/kLbFeMLv2B3DZ2cB6" target="_blank">12 rue
                        Saintonge 33000 Bordeaux</a>
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                        rel="noopener noreferrer" href="tel:+33556993929">Tél : 05 56 99 39
                        29</a>
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                        rel="noopener noreferrer" href="mailto:contact@bde-saintonge.fr">Nous
                        contacter par mail</a>
                </div>
            </div>
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Liens Utiles</h2>
                <div class="dark:text-coolGray-400 flex flex-col space-y-2 text-sm">
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                        rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-general/"
                        target="_blank">Lycée Général</a>
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                        rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-technologique/"
                        target="_blank">Lycée
                        Technologique</a>
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                       rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-professionnel/"
                       target="_blank">Lycée
                        Professionnel</a>
                </div>
            </div>
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Réglementation</h2>
                <div class="dark:text-coolGray-400 flex flex-col space-y-2 text-sm">
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                       rel="noopener noreferrer" href="{{ route('legal.mentions') }}">Mentions
                        Légales</a>
                    <a class="text-blue-500 hover:text-blue-400 hover:underline dark:text-blue-300"
                       rel="noopener noreferrer" href="{{ route('legal.gdpr') }}">RGPD</a>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center px-6 pt-12 text-sm">
            <span class="dark:text-coolGray-400 text-center">© Copyright {{ date('Y') }}. BDE-Saintonge tous droits
                réservés.</span>
        </div>
    </footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
