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

    <header class="w-screen p-4 bg-slate-50 text-gray-800 dark:bg-gray-700 dark:text-gray-100">
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
                    <a href="bda"
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
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8 stroke-1 dark:stroke-white stroke-slate-900 zoom" fill="none"
                        viewBox="0 0 24 24">
                        <a href="mailto:contact@bde-saintonge.fr" alt="Mail contact famille saintonge">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </a>
                    </svg>
                </li>
                <li class="flex items-center">
                    <svg class="h-8 zoom" viewBox="0 -38 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                        <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank"
                            alt="Lien chaîne youtube famille saintonge">
                            <g>
                                <path
                                    d="M250.346231,28.0746923 C247.358133,17.0320558 238.732098,8.40602109 227.689461,5.41792308 C207.823743,0 127.868333,0 127.868333,0 C127.868333,0 47.9129229,0.164179487 28.0472049,5.58210256 C17.0045684,8.57020058 8.37853373,17.1962353 5.39043571,28.2388718 C-0.618533519,63.5374615 -2.94988224,117.322662 5.5546152,151.209308 C8.54271322,162.251944 17.1687479,170.877979 28.2113844,173.866077 C48.0771024,179.284 128.032513,179.284 128.032513,179.284 C128.032513,179.284 207.987923,179.284 227.853641,173.866077 C238.896277,170.877979 247.522312,162.251944 250.51041,151.209308 C256.847738,115.861464 258.801474,62.1091 250.346231,28.0746923 Z"
                                    fill="#FF0000"></path>
                                <polygon fill="#FFFFFF" points="102.420513 128.06 168.749025 89.642 102.420513 51.224">
                                </polygon>
                            </g>
                        </a>
                    </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 dark:text-coolGray-100">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown-menu"
                    class="hidden absolute items-center right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800">
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
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 stroke-1 dark:stroke-white stroke-slate-900" fill="none"
                            viewBox="0 0 24 24">
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
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Se Connecter
                    </a>

                </div>
            </div>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
{{-- <footer>
    <!-- Section footer -->
    <section class="row wrap">
        <!-- Div de Construction Contact -->
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12 blue-dark">


            <!-- Div Habillage Contact -->
            <div class="margin-arround column blue-footer border">
                <div class="container-liens">
                    <div class="pad-arround-footer column center">
                        <h2>Informations</h2>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/footer-adresse.svg') }}" width="25px" height="35px"
                            style="position: relative;left: 25px;">
                        <span style="cursor:pointer" onclick="window.open('https://goo.gl/maps/zxMQJ3HJmS6JM1GE6');">
                            <h4 style="position: relative;left: 50px;top: 10px;">12 rue Saintonge 33000 Bordeaux</h4>
                        </span>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/footer-tel.svg') }}" width="25px" height="35px"
                            style="position: relative;left: 25px;">
                        <span style="cursor:pointer" onclick="window.open('tel:+33556993929');">
                            <h4 style="position: relative;left: 50px;top: 10px;">Tél : 05 56 99 39 29</h4>
                        </span>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/footer-mail.svg') }}" width="25px" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 28px;">
                            <a href="mailto:contact@bde-saintonge.fr" target="_blank">Nous contacter</a>
                        </h4>
                    </div>

                </div>
            </div>
            <!-- Fin Div Habillage Contact -->

        </div>
        <!-- Fin Div de Construction Contact -->

        <!-- Div de Construction Contact -->
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12 blue-dark">


            <!-- Div Habillage Contact -->
            <div class="margin-arround column blue-footer border">
                <div class="container-liens">
                    <div class="pad-arround-footer column center">
                        <h2>Liens Utiles</h2>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/high_school.png') }}" width="" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 22px;">
                            <a href="https://lyceesaintefamille.com/lycee-general/" target="_blank">Lycée Général</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/high_school.png') }}" width="" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 22px;">
                            <a href="https://lyceesaintefamille.com/lycee-technologique/" target="_blank">Lycée
                                Technologique</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/high_school.png') }}" width="" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 22px;">
                            <a href="https://lyceesaintefamille.com/lycee-professionnel/">Lycée Professionnel</a>
                        </h4>
                    </div>

                </div>
            </div>
            <!-- Fin Div Habillage Contact -->

        </div>
        <!-- Fin Div de Construction Contact -->

        <!-- Fin Div de Construction Liens -->

        <!-- Div de Construction Informations -->
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12 blue-dark">
            <!-- Div Habillage Informations -->
            <div class="margin-arround column blue-footer">
                <div class="container-liens">
                    <div class="pad-arround-footer column center">
                        <h2>Réglementation</h2>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/mention-legale.png') }}" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 20px;">
                            <a href="/mentions-legales" target="_blank">Mentions Légales</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{ asset('media/images/rgpd.png') }}" height="35px"
                            style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 20px;">
                            <a href="/rgpd" target="_blank">RGPD</a>
                        </h4>
                    </div>

                </div>
            </div>
            <!-- Fin Div Habillage Informations -->
        </div>
        <!-- Fin Div de Construction Informations -->

    </section>
    <!-- Fin Section Footer -->

</footer> --}}
