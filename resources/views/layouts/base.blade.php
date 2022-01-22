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
    <meta name='theme-color' content='#FAEC71'>

    <link rel='shortcut icon' type='image/png' href='{{ asset('media/images/LOGO-2020-1.png') }}'>

    <link rel="apple-touch-icon" href="{{ asset('media/images/LOGO-2020-1.png') }}" />

    <!-- Twitter Card meta -->
    <meta name='twitter:card' content='summary'>
    <meta name="twitter:site" content="@Netinq" />
    <meta name="twitter:title" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta name='twitter:url' content='https://www.bde-saintonge.fr/' />
    <meta name='twitter:domain' content='bde-saintonge.fr' />
    <meta name="twitter:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta name="twitter:image" content="{{ asset('media/images/LOGO-2020-1.jpg') }}" />

    <!-- Open Graph meta -->
    <meta property='og:title' content='Site du BDE Sainte Famille Saintonge Bordeaux ' />
    <meta property="og:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta property="og:image" content="{{ asset('media/images/LOGO-2020-1.jpg') }}" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='https://www.bde-saintonge.fr/' />
    <meta property='og:site_name' content='BDE Saintonge' />
    <meta property='author' content='BDE Saintonge' />
    <meta property='profile:gender' content='male' />
    <meta property="og:locale" content="fr_FR" />

    <!-- IOS meta -->
    <meta name="apple-mobile-web-app-title" content="BDE-Saintonge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>BDE Saintonge </title>

    <!-- ICON Tab Navigator -->
    <link rel="icon" href="{{ asset('media/images/LOGO-2020-1.png') }}">

    <!-- Librairie  Local CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    {{-- <header>
        <div id="burger-container">
            <p> </p>
            <div id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/"> <img src="{{asset('media/images/LOGO-2020-1.png')}}" alt="logo"> </a>
                </li>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="/login">Se Connecter</a>
                </li>
                <li class="bda">
                    <a href="/bda">BDA</a>
                </li>
                <li class="bdc">
                    <a href="/bdc">BDC</a>
                </li>
                <li class="bds">
                    <a href="/bds">BDS</a>
                </li>
                <li class="pole-com">
                    <a href="/pole-com">Pôle Com</a>
                </li>
                <li>
                    <a href="mailto:contact@bde-saintonge.fr">Contact</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank">
                        <img src="{{asset('media/images/yt.svg')}}" alt="logo youtube" width="40px" height="auto" style="position: relative;left: 0px;">
                    </a> 
                </li>
            </ul>
        </nav>
    </header> --}}
    <header class="p-4 bg-slate-50 text-gray-800 dark:bg-gray-700 dark:text-gray-100">
        <div class="container flex justify-between h-16 mx-auto">
            {{-- <a href="#" aria-label="Back to homepage" class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-8 h-8 dark:text-blue-400">
                    <path d="M27.912 7.289l-10.324-5.961c-0.455-0.268-1.002-0.425-1.588-0.425s-1.133 0.158-1.604 0.433l0.015-0.008-10.324 5.961c-0.955 0.561-1.586 1.582-1.588 2.75v11.922c0.002 1.168 0.635 2.189 1.574 2.742l0.016 0.008 10.322 5.961c0.455 0.267 1.004 0.425 1.59 0.425 0.584 0 1.131-0.158 1.602-0.433l-0.014 0.008 10.322-5.961c0.955-0.561 1.586-1.582 1.588-2.75v-11.922c-0.002-1.168-0.633-2.189-1.573-2.742zM27.383 21.961c0 0.389-0.211 0.73-0.526 0.914l-0.004 0.002-10.324 5.961c-0.152 0.088-0.334 0.142-0.53 0.142s-0.377-0.053-0.535-0.145l0.005 0.002-10.324-5.961c-0.319-0.186-0.529-0.527-0.529-0.916v-11.922c0-0.389 0.211-0.73 0.526-0.914l0.004-0.002 10.324-5.961c0.152-0.090 0.334-0.143 0.53-0.143s0.377 0.053 0.535 0.144l-0.006-0.002 10.324 5.961c0.319 0.185 0.529 0.527 0.529 0.916z"></path>
                    <path d="M22.094 19.451h-0.758c-0.188 0-0.363 0.049-0.515 0.135l0.006-0.004-4.574 2.512-5.282-3.049v-6.082l5.282-3.051 4.576 2.504c0.146 0.082 0.323 0.131 0.508 0.131h0.758c0.293 0 0.529-0.239 0.529-0.531v-0.716c0-0.2-0.11-0.373-0.271-0.463l-0.004-0.002-5.078-2.777c-0.293-0.164-0.645-0.26-1.015-0.26-0.39 0-0.756 0.106-1.070 0.289l0.010-0.006-5.281 3.049c-0.636 0.375-1.056 1.055-1.059 1.834v6.082c0 0.779 0.422 1.461 1.049 1.828l0.009 0.006 5.281 3.049c0.305 0.178 0.67 0.284 1.061 0.284 0.373 0 0.723-0.098 1.027-0.265l-0.012 0.006 5.080-2.787c0.166-0.091 0.276-0.265 0.276-0.465v-0.716c0-0.293-0.238-0.529-0.529-0.529z"></path>
                </svg> 
            </a> --}}

            <a href="/" aria-label="Retour à la racine" class="flex items-center">
                <svg class="fill-bleusaintonge dark:fill-jaunesaintonge h-20" version="1.0" xmlns="http://www.w3.org/2000/svg" width="200.000000pt" height="76.000000pt" viewBox="0 0 180.000000 80.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
                        <path d="M581 743 c-1 -20 -6 -23 -45 -23 -34 0 -46 4 -49 18 -4 15 -5 15 -6 0 0 -9 -11 -19 -23 -21 l-23 -4 23 -2 c18 -1 22 -7 22 -36 0 -33 -1 -35 -22 -25 l-23 11 23 -17 c18 -13 22 -26 22 -65 l0 -50 -30 16 c-16 9 -30 11 -30 6 0 -5 13 -14 30 -21 20 -8 30 -20 31 -34 0 -20 1 -20 8 -1 5 11 6 27 4 35 -4 13 -3 13 5 0 6 -8 9 -17 7 -21 -3 -3 36 -28 86 -55 l90 -49 -3 -55 -3 -55 -51 -3 c-43 -3 -54 1 -77 24 -15 15 -27 31 -27 36 0 5 -4 7 -9 3 -5 -3 -12 5 -14 17 -2 13 -5 -7 -6 -44 -1 -47 -5 -68 -13 -68 -9 0 -10 -3 -2 -8 6 -4 14 -14 17 -22 4 -12 6 -11 6 3 1 15 12 17 90 17 85 0 90 -1 94 -22 l4 -23 2 23 c1 20 6 22 56 22 50 0 55 -2 55 -22 0 -49 12 -4 14 52 1 46 -2 64 -14 70 -9 6 -11 10 -2 10 13 0 17 65 5 73 -9 4 7 0 35 -9 11 -4 8 2 -8 15 -14 11 -30 21 -36 21 -6 0 -19 10 -30 21 -10 12 -48 35 -84 51 -80 36 -100 54 -100 88 0 37 29 60 76 60 45 -1 67 -15 89 -56 l15 -29 0 28 c0 16 5 37 10 47 7 13 7 21 0 2-5 3 -11 21 -11 38 -1 24 -3 26 -6 10 -4 -22 -9 -23 -83 -23 -74 0 -79 1 -23 l-4 22 -2 -22z m-30 -52 c-13 -10 -32 -29 -42 -42 l-19 -24 0 43 0 42 4342 0 -24 -19z m159 -336 c0 -19 -4 -35 -10 -35 -5 0 -10 16 -10 35 0 19 5 10 35 6 0 10 -16 10 -35z m92 -59 l-4 -36 -52 0 -51 0 35 21 c19 12 41 30 48 41 19 26 29 15 24 -26z" />
                        <path d="M1490 556 c0 -44 4 -76 10 -76 6 0 10 30 10 69 0 39 -4 73 -10 76 -6 4 -10 -22 -10 -69z" />
                        <path d="M1537 623 c-11 -10 -8 -143 3 -143 6 0 10 32 10 75 0 75 -1 81 -13 68z" />
                        <path d="M870 610 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                        <path d="M1450 610 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                        <path d="M1170 545 c0 -53 3 -65 16 -65 13 0 15 7 11 30 -6 25 -3 30 13 30 11 0 20 5 20 10 0 6 -9 10 -20 10 -29 0 -22 30 10 43 8 3 0 6 -17 6 l-33 1 0 -65z" />
                        <path d="M1006 589 c-3 -8 -4 -34 -3 -59 2 -36 6 -45 22 -48 14 -2 16 0 7 6 -7 5 -12 27 -11 55 2 47 -6 72 -15 46z" />
                        <path d="M1066 567 c-12 -9 -17 -23 -14 -47 2 -29 7 -35 28 -38 22 -2 23 -1 8 8 -19 12 -25 65 -8 75 6 3 10 -3 10 -14 0 -12 5 -21 10 -21 14 0 12 26 -3 39 -10 8 -18 7 -31 -2z" />
                        <path d="M1587 569 c-35 -20 -18 -89 22 -88 25 0 25 0 4 9 -17 7 -23 18 -23 39 0 16 5 33 10 36 9 6 14 -8 11 -27 0 -5 4 -8 9 -8 14 0 12 26 -3 38 -8 7 -18 7 -30 1z" />
                        <path d="M813 564 c10 -3 17 -11 16 -17 -4 -35 3 -67 14 -67 10 0 12 11 8 43 -5 36 -10 42 -31 44 -15 1 -18 0 -7 -3z" />
                        <path d="M870 525 c0 -25 5 -45 10 -45 6 0 10 20 10 45 0 25 -4 45 -10 45 -5 0 -10 -20 -10 -45z" />
                        <path d="M910 523 c0 -52 18 -58 22 -6 4 52 28 56 28 4 0 -23 5 -41 10 -41 6 0 10 20 10 45 0 44 0 44 -35 43 -34 -1 -35 -2 -35 -45z" />
                        <path d="M1256 560 c15 -6 21 -17 20 -37 -1 -15 -5 -26 -11 -23 -5 3 -9 11 -8 19 1 11 -2 10 -14 -2 -20 -20 -9 -36 25 -35 26 1 27 3 23 44 -3 40 -5 44 -30 43 -24 0 -24 -1 -5 -9z" />
                        <path d="M1320 526 c0 -26 5 -46 11 -46 6 0 8 9 4 20 -7 23 2 60 16 60 5 0 9 -18 9 -40 0 -22 5 -40 11 -40 6 0 9 17 7 43 -3 38 -6 42 -30 45 -27 3 -28 2 -28 -42z" />
                        <path d="M1398 558 c7 -7 12 -28 12 -47 0 -40 10 -36 15 5 4 37 -3 54 -23 54 -12 0 -13 -3 -4 -12z" />
                        <path d="M1450 525 c0 -25 3 -45 8 -45 4 0 7 20 7 45 0 25 -3 45 -7 45 -5 0 -8 -20 -8 -45z" />
                        <path d="M797 523 c-12 -11 -8 -43 6 -43 6 0 12 11 12 25 0 25 -6 31 -18 18z" />
                        <path d="M950 440 c0 -13 5 -20 13 -17 6 2 12 10 12 17 0 7 -6 15 -12 18 -8 2 -13 -5 -13 -18z" />
                        <path d="M1147 423 c-4 -3 -7 -15 -7 -25 0 -10 -6 -18 -12 -18 -10 0 -10 -2  -1 -8 6 -4 13 -32 15 -62 3 -50 5 -55 28 -58 22 -2 23 -1 8 8 -13 8 -18 24 -18 60 0 41 3 50 18 50 16 1 16 1 0 10 -10 6 -14 18 -11 30 5 19 -7 27 -20 13z" />
                        <path d="M844 375 c-18 -15 -18 -15 7 -9 40 9 46 -22 8 -41 -24 -13 -30 -22 -27 -43 3 -24 7 -27 44 -29 l41 -2 -5 57 c-6 80 -26 99 -68 67z m46 -74 c0 -22 -15 -35 -30 -26 -7 4 -7 13 0 26 14 25 30 25 30 0z" />
                        <path d="M1051 381 c-7 -5 -21 -7 -30 -4 -14 3 -16 -5 -13 -62 3 -44 8 -65 15 -62 7 2 10 19 9 40 -4 39 13 81 29 72 5 -4 9 -31 9 -61 0 -41 4 -54 15 -54 22 0 22 125 -1 134 -19 7 -16 8 -33 -3z" />
                        <path d="M1220 370 c-40 -40 -20 -120 30 -120 35 0 50 23 50 74 0 59 -42 84 -80 46z m45 -51 c0 -41 -4 -54 -15 -54 -17 0 -25 52 -15 92 11 44 30 20 30 -38z" />
                        <path d="M1371 381 c-8 -5 -20 -7 -28 -4 -10 4 -13 -10 -13 -62 0 -49 3 -66 13 -62 7 2 11 18 9 40 -4 39 13 81 29 72 5 -4 9 -31 9 -61 0 -41 4 -54 15 -54 12 0 15 13 15 58 0 70 -16 94 -49 73z" />
                        <path d="M1462 378 c-16 -16 -15 -65 1 -71 9 -3 9 -7 -1 -20 -8 -9 -11 -21 -7 -26 3 -6 1 -20 -5 -31 -15 -28 3 -50 40 -50 35 0 52 21 48 57 -2 21 -9 29 -28 31 -41 6 -47 21 -13 33 26 9 32 16 35 50 3 38 3 39 -27 39 -17 0 -36 -5 -43 -12z m40 -15 c5 -23 -1 -53 -12 -53 -12 0 -21 31 -15 51 8 24 21 24 27 2z m13 -143 c0 -18 -6 -26 -23 -28 -13 -2 -25 3 -28 12 -10 26 4 48 28 44 17 -2 23 -10 23 -28z" />
                        <path d="M1576 374 c-19 -18 -22 -94 -4 -112 15 -15 68 -16 68 -1 0 5 -5 7 -10 4 -15 -9 -40 14 -40 36 0 14 7 19 30 19 23 0 30 5 30 19 0 23 -25 51 -45 51 -7 0 -21 -7 -29 -16z m44 -25 c0 -10 -7 -19 -15 -19 -15 0 -21 31 -9 43 1110 24 -3 24 -24z" />
                        <path d="M950 315 c0 -49 3 -65 14 -65 10 0 14 16 13 65 0 47 -4 65 -14 65 -90 -13 -18 -13 -65z" />
                    </g>
                </svg>
                {{-- <img class="contrast-200 saturate-200 w-max" src="{{ asset('media/images/LOGO-2020-1.png') }}"
                    alt="logo"> --}}
            </a>
            <ul class="items-stretch hidden space-x-3 lg:flex">
                <li class="flex">
                    <a href="#"
                        class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent dark:text-blue-400 dark:border-blue-400">Link</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent">Link</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent">Link</a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent">Link</a>
                </li>
            </ul>
            <div class="items-center flex-shrink-0 hidden lg:flex">
                <button class="self-center px-8 py-3 rounded">Sign in</button>
                <button class="self-center px-8 py-3 font-semibold rounded dark:bg-blue-400 dark:text-coolGray-900">Sign
                    up</button>
            </div>
            <button class="p-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6 dark:text-coolGray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
<footer>
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

</footer>
