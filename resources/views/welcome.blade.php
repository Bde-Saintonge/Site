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

    <link rel='shortcut icon' type='image/png' href='{{asset('media/images/LOGO-2020-1.jpg')}}'>

    <link rel="apple-touch-icon" href="{{asset('media/images/LOGO-2020-1.jpg')}}" />

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

    <!-- Fichier Locaux CSS-->
    <link rel="stylesheet" href="{{asset('css/reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/explication_bde.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('css/404.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">

    <!-- ICON Tab Navigator -->
    <link rel="icon" href="{{asset('media/images/LOGO-2020-1.jpg')}}">

    <!-- Librairie  Local CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/all.css')}}">

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
        <div class="logo-nav">
            <a href="">
                <img src="{{asset('media/images/LOGO-2020-1.jpg')}}" alt="logo">
            </a>
        </div>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>
                <a href="/login">Se Connecter</a>
            </li>
            <li >
                <a href="https://www.youtube.com/channel/UCavw3aPAmd220peMhn96kjg" target="_blank">
                <img src="{{asset('media/images/yt.svg')}}" alt="logo youtube" width="40px" height="auto" style="position: relative;left: 0px;"></a>
            </li>
            <li class="bda">
                <a href="/bda">BDA</a>
            </li>
            <li class="'bdc') ? 'active' : '' ?>">
                <a href="/bdc">BDC</a>
            </li>
            <li class="bds">
                <a href="/bds">BDS</a>
            </li>
            <li>
                <a href="/pole-com">Pôle Com</a>
            </li>
            <li>
                <a href="mailto:contact@bde-saintonge.fr">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<main>


    <!-- Section Explication BDE -->
    <section class="row wrap full-screen">
        <!-- Div de Construction Explication BDE-->
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 full-div">
            <!-- Div Habillage Explication BDE -->
            <div class="container-expli">
                <img src="" class="image" style="width:100%">
                <div class="explication center">
                    <div class="text">
                        <span style="fontgit -weight: bold;">Bienvenue sur le site du bureau des élèves du lycée Sainte Famille Saintonge. Créé en 2018, ce bureau regroupe trois entités détaillées ci-desouus : le Bureau Des Actions (BDA), le Bureau des Sports (BDS), le Bureau de la culture (BDC) ainsi que le Pôle Communication.</span>
                    </div>
                </div>
            </div>
            <!-- Fin Div Habillage Explication BDE -->
        </div>
        <!-- Fin Div de Construction -->
    </section>
    <!-- Fin Section Explication BDE -->

    <!-- Section Bureau-->
    <section class="row wrap bureau">
        <!-- Div de Construction BDS -->
        <div class="xLarge-3 large-3 medium-6 small-6 xSmall-6 blue-content ">
            <!-- Div Habillage BDS -->
            <div class="margin-arround column">
                <div class="card">
                    <img src="{{asset('media/images/bds_logo.png')}}" alt="Logo du BDS" style="width:100%">
                    <div class="container">
                        <div class="container-title">
                            <h4>Bureau des Sports (BDS)</h4>
                        </div>
                        <p>Présentation / Explication du Bureau des Sports</p>
                        <button><a href="/bds" target="_blank">En savoir Plus</a></button>
                    </div>
                </div>
            </div>
            <!-- Fin Habillage BDS -->
        </div>
        <!-- Fin Div de Construction BDS -->

        <!-- Div de Construction BDA -->
        <div class="xLarge-3 large-3 medium-6 small-6 xSmall-6 blue-content">
            <!-- Div Habillage BDA -->
            <div class="margin-arround column">
                <div class="card">
                    <img src="{{asset('media/images/bda_logo.png')}}" alt="Logo du BDA" style="width:100%">
                    <div class="container">
                        <div class="container-title">
                            <h4>Bureau des Actions (BDA)</h4>
                        </div>
                        <p>Présentation / Explication du Bureau des Actions</p>
                        <button><a href="/bda" target="_blank">En savoir Plus</a></button>
                    </div>
                </div>
            </div>
            <!-- Fin Habillage BDA -->
        </div>
        <!-- Fin Div de Construction BDA -->

        <!-- Div de Construction BDC -->
        <div class="xLarge-3 large-3 medium-6 small-6 xSmall-6 blue-content">
            <!-- Div Habillage BDC -->
            <div class="margin-arround column">
                <div class="card">
                    <img src="{{asset('media/images/bdc_logo.png')}}" alt="Logo du BDC" style="width:100%">
                    <div class="container">
                        <div class="container-title">
                            <h4>Bureau de la Culture (BDC)</h4>
                        </div>
                        <p>Présentation / Explication du bureau de la Culture</p>
                        <button><a href="/bdc" target="_blank">En savoir Plus</a></button>
                    </div>
                </div>
            </div>
            <!-- Fin Div Habillage BDC -->
        </div>
        <!-- Fin Div de Construction BDC -->

        <!-- Div de Construction Pôle Com -->
        <div class="xLarge-3 large-3 medium-6 small-6 xSmall-6 blue-content">
            <!-- Div Habillage Pôle Com -->
            <div class="margin-arround column">
                <div class="card">
                    <img src="{{asset('media/images/pole-com_logo.png')}}" alt="Logo du pole Communication" style="width:100%">
                    <div class="container">
                        <div class="container-title">
                            <h4>Pôle Communication</h4>
                        </div>
                        <p>Présentation / Explication du Pôle Communication</p>
                        <button><a href="/pole-com" target="_blank">En savoir Plus</a></button>
                    </div>
                </div>
            </div>
            <!-- Fin Div Habillage Pôle Com -->
        </div>
        <!-- Fin Div de Construction Pôle Com -->

    </section>
    <!-- Fin Section Bureau-->
</main>
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
                            <h4 style="position: relative;left: 50px;top: 10px;">12 rue Saintonge 33000 Bordeaux</h4>
                        </div>

                        <div class="pad-arround-footer">
                            <img src="{{asset('media/images/footer-tel.svg')}}"'" width="25px" height="35px" style="position: relative;left: 25px;">
                            <h4 style="position: relative;left: 50px;top: 10px;">Tél : 05 56 99 39 29</h4>
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
