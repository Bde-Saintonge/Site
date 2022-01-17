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

    <link rel='shortcut icon' type='image/png' href='{{asset('media/images/LOGO-2020-1.png')}}'>

    <link rel="apple-touch-icon" href="{{asset('media/images/LOGO-2020-1.png')}}" />

    <!-- Twitter Card meta -->
    <meta name='twitter:card' content='summary'>
    <meta name="twitter:site" content="@Netinq" />
    <meta name="twitter:title" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta name='twitter:url' content='https://www.bde-saintonge.fr/' />
    <meta name='twitter:domain' content='bde-saintonge.fr' />
    <meta name="twitter:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta name="twitter:image" content="{{asset('media/images/LOGO-2020-1.jpg')}}" />

    <!-- Open Graph meta -->
    <meta property='og:title' content='Site du BDE Sainte Famille Saintonge Bordeaux ' />
    <meta property="og:description" content="Site du Bureau des élèves Sainte Famille Saintonge Bordeaux" />
    <meta property="og:image" content="{{asset('media/images/LOGO-2020-1.jpg')}}" />
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
    <link rel="icon" href="{{asset('media/images/LOGO-2020-1.png')}}">

    <!-- Librairie  Local CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <header>
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
    </header>
    <header class="p-4 dark:bg-coolGray-800 dark:text-coolGray-100">
        <div class="container flex justify-between h-16 mx-auto">
            <a href="#" aria-label="Back to homepage" class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-8 h-8 dark:text-blue-400">
                    <path d="M27.912 7.289l-10.324-5.961c-0.455-0.268-1.002-0.425-1.588-0.425s-1.133 0.158-1.604 0.433l0.015-0.008-10.324 5.961c-0.955 0.561-1.586 1.582-1.588 2.75v11.922c0.002 1.168 0.635 2.189 1.574 2.742l0.016 0.008 10.322 5.961c0.455 0.267 1.004 0.425 1.59 0.425 0.584 0 1.131-0.158 1.602-0.433l-0.014 0.008 10.322-5.961c0.955-0.561 1.586-1.582 1.588-2.75v-11.922c-0.002-1.168-0.633-2.189-1.573-2.742zM27.383 21.961c0 0.389-0.211 0.73-0.526 0.914l-0.004 0.002-10.324 5.961c-0.152 0.088-0.334 0.142-0.53 0.142s-0.377-0.053-0.535-0.145l0.005 0.002-10.324-5.961c-0.319-0.186-0.529-0.527-0.529-0.916v-11.922c0-0.389 0.211-0.73 0.526-0.914l0.004-0.002 10.324-5.961c0.152-0.090 0.334-0.143 0.53-0.143s0.377 0.053 0.535 0.144l-0.006-0.002 10.324 5.961c0.319 0.185 0.529 0.527 0.529 0.916z"></path>
                    <path d="M22.094 19.451h-0.758c-0.188 0-0.363 0.049-0.515 0.135l0.006-0.004-4.574 2.512-5.282-3.049v-6.082l5.282-3.051 4.576 2.504c0.146 0.082 0.323 0.131 0.508 0.131h0.758c0.293 0 0.529-0.239 0.529-0.531v-0.716c0-0.2-0.11-0.373-0.271-0.463l-0.004-0.002-5.078-2.777c-0.293-0.164-0.645-0.26-1.015-0.26-0.39 0-0.756 0.106-1.070 0.289l0.010-0.006-5.281 3.049c-0.636 0.375-1.056 1.055-1.059 1.834v6.082c0 0.779 0.422 1.461 1.049 1.828l0.009 0.006 5.281 3.049c0.305 0.178 0.67 0.284 1.061 0.284 0.373 0 0.723-0.098 1.027-0.265l-0.012 0.006 5.080-2.787c0.166-0.091 0.276-0.265 0.276-0.465v-0.716c0-0.293-0.238-0.529-0.529-0.529z"></path>
                </svg>
            </a>
            <ul class="items-stretch hidden space-x-3 lg:flex">
                <li class="flex">
                    <a href="#" class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent dark:text-blue-400 dark:border-blue-400">Link</a>
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
                <button class="self-center px-8 py-3 font-semibold rounded dark:bg-blue-400 dark:text-coolGray-900">Sign up</button>
            </div>
            <button class="p-4 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 dark:text-coolGray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
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
                        <img src="{{asset('media/images/footer-adresse.svg')}}" width="25px" height="35px" style="position: relative;left: 25px;">
                        <span style="cursor:pointer" onclick="window.open('https://goo.gl/maps/zxMQJ3HJmS6JM1GE6');">
                        <h4 style="position: relative;left: 50px;top: 10px;">12 rue Saintonge 33000 Bordeaux</h4>
                        </span>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/footer-tel.svg')}}" width="25px" height="35px" style="position: relative;left: 25px;">
                        <span style="cursor:pointer" onclick="window.open('tel:+33556993929');">
                        <h4 style="position: relative;left: 50px;top: 10px;">Tél : 05 56 99 39 29</h4>
                        </span>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/footer-mail.svg')}}" width="25px" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 28px;">
                            <a href="mailto:contact@bde-saintonge.fr" target="_blank" >Nous contacter</a>
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
                        <img src="{{asset('media/images/high_school.png')}}" width="" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 22px;">
                            <a href="https://lyceesaintefamille.com/lycee-general/" target="_blank">Lycée Général</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/high_school.png')}}" width="" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 22px;">
                            <a href="https://lyceesaintefamille.com/lycee-technologique/" target="_blank">Lycée Technologique</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/high_school.png')}}" width="" height="35px" style="position: relative;left: 25px;">
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
                        <img src="{{asset('media/images/mention-legale.png')}}"  height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 20px;">
                            <a href="/mentions-legales" target="_blank">Mentions Légales</a>
                        </h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/rgpd.png')}}"  height="35px" style="position: relative;left: 25px;">
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
