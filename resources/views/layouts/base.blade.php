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
    <meta name="description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux">
    <meta name='reply-to' content='contact@bde-saintonge.fr'>

    <meta name='language' content='FR'>
    <meta name='target' content='all'>
    <meta name='theme-color' content='#224096'>

    <link rel='shortcut icon' type='image/png' href='{{ asset('media/images/logo_saintonge.png') }}'>

    <link rel="apple-touch-icon" href="{{ asset('media/images/logo_saintonge.png') }}" />

    <!-- Twitter Card meta -->
    <meta name='twitter:card' content='summary'>
    <meta name="twitter:site" content="@Netinq" />
    <meta name="twitter:title" content="Bureau des élèves - Saintonge Bordeaux" />
    <meta name='twitter:url' content='https://www.bde-saintonge.fr/' />
    <meta name='twitter:domain' content='bde-saintonge.fr' />
    <meta name="twitter:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
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

    <title>BDE Saintonge</title>
</head>


<body>

    <header class="w-full p-4 bg-slate-50 text-gray-800 dark:bg-gray-700 dark:text-gray-100">
        <div class="container flex justify-between h-16 mx-auto">
            <a href="/" aria-label="Retour à la racine" class="flex items-center">
                <img class="dark:contrast-150 h-16" src="{{ asset('media/images/logo_saintonge.png') }}"
                    alt="Logo famille Saintonge">
            </a>
            <ul class="items-stretch hidden space-x-3 lg:flex">
                <li class="flex">
                    <a href="/bda"
                        class="flex items-center px-4 -mb-1 hover:border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400">BDA</a>
                </li>
                <li class="flex">
                    <a href="/bdc"
                        class="flex items-center px-4 -mb-1 hover:border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400">BDC</a>
                </li>
                <li class="flex">
                    <a href="bds"
                        class="flex items-center px-4 -mb-1 hover:border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400">BDS</a>
                </li>
                <li class="flex">
                    <a href="/pole-com"
                        class="flex items-center px-4 -mb-1 hover:border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400">Pôle
                        Com.</a>
                </li>
            </ul>
            <div class="justify-around w-32 hidden lg:flex">
                <li class="flex items-center">
                    <a href="mailto:contact@bde-saintonge.fr" alt="Mail contact famille saintonge">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 stroke-1 dark:stroke-white stroke-slate-900 zoom" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </li>
                <li class="flex items-center">
                    <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank"
                        alt="Lien chaîne youtube famille saintonge">
                        <svg class="h-8 zoom" viewBox="0 -38 256 256" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            preserveAspectRatio="xMidYMid">
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
            </div>
            <div class="items-center flex-shrink-0 hidden lg:flex">
                <a href="/login"
                    class="self-center px-8 py-3 font-semibold rounded bg-blue-400 text-white hover:bg-blue-300 focus:outline-none focus:ring focus:ring-blue-500">Se
                    Connecter</a>
            </div>
            <div class="relative block lg:hidden my-auto ">
                <!-- Dropdown toggle button -->
                <button id="dropdown-toggle"
                    class="relative group z-10 w-10 h-10 p-2 text-white bg-blue-400 border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-blue-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown-menu"
                    class="hidden absolute items-center right-0 py-2 z-20 w-48 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800">
                    <a href="/bda"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        BDA
                    </a>

                    <a href="/bdc"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        BDC
                    </a>

                    <a href="/bds"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        BDS
                    </a>
                    <a href="/pole-com"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Pôle Com.
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                    <a href="mailto:contact@bde-saintonge.fr" alt="Mail contact famille saintonge"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 stroke-1 dark:stroke-white stroke-slate-900"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>

                    <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank"
                        alt="Lien chaîne youtube famille saintonge"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="h-6" viewBox="0 -38 256 256" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            preserveAspectRatio="xMidYMid">
                            <g>
                                <path
                                    d="M250.346231,28.0746923 C247.358133,17.0320558 238.732098,8.40602109 227.689461,5.41792308 C207.823743,0 127.868333,0 127.868333,0 C127.868333,0 47.9129229,0.164179487 28.0472049,5.58210256 C17.0045684,8.57020058 8.37853373,17.1962353 5.39043571,28.2388718 C-0.618533519,63.5374615 -2.94988224,117.322662 5.5546152,151.209308 C8.54271322,162.251944 17.1687479,170.877979 28.2113844,173.866077 C48.0771024,179.284 128.032513,179.284 128.032513,179.284 C128.032513,179.284 207.987923,179.284 227.853641,173.866077 C238.896277,170.877979 247.522312,162.251944 250.51041,151.209308 C256.847738,115.861464 258.801474,62.1091 250.346231,28.0746923 Z"
                                    fill="#FF0000"></path>
                                <polygon fill="#FFFFFF" points="102.420513 128.06 168.749025 89.642 102.420513 51.224">
                                </polygon>
                            </g>
                        </svg>
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                    <a href="/login"
                        class="block px-4 py-3 text-sm  text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Se Connecter
                    </a>

                </div>
            </div>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="p-6 text-black bg-white dark:bg-gray-700 dark:text-white">
        <hr class="w-3/4 rounded-lg border-2 mx-auto my-10">
        <div class="container grid grid-cols-1 text-center sm:justify-items-center mx-auto gap-x-3 gap-y-8 sm:grid-cols-3">
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Informations</h2>
                <div class="flex flex-col space-y-2 text-sm dark:text-coolGray-400">
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="https://goo.gl/maps/kLbFeMLv2B3DZ2cB6" target="_blank">12 rue
                        Saintonge 33000 Bordeaux</a>
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="tel:+33556993929">Tél : 05 56 99 39 29</a>
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="mailto:contact@bde-saintonge.fr">Nous contacter par mail</a>
                </div>
            </div>
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Liens Utiles</h2>
                <div class="flex flex-col space-y-2 text-sm dark:text-coolGray-400">
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-general/" target="_blank">Lycée Général</a>
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-technologique/" target="_blank">Lycée Technologique</a>
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="https://lyceesaintefamille.com/lycee-professionnel/" target="_blank">Lycée Professionnel</a>
                </div>
            </div>
            <div class="flex flex-col space-y-4 sm:w-max">
                <h2 class="font-medium">Réglementation</h2>
                <div class="flex flex-col space-y-2 text-sm dark:text-coolGray-400">
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="/mentions-legales">Mentions Légales</a>
                    <a class="hover:text-blue-400" rel="noopener noreferrer" href="/rgpd">RGPD</a>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center px-6 pt-12 text-sm">
            <span class="dark:text-coolGray-400 text-center">© Copyright {{ date("Y") }}. BDE-Saintonge tous droits réservés.</span>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
