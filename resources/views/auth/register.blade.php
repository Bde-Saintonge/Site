<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>BDE Saintonge </title>

    <!-- Fichier Locaux CSS -->
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
    <link rel="stylesheet" href="{{asset('css/alert.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/button.css')}}">

    <!-- ICON Tab Navigator -->
    <link rel="icon" href="{{asset('media/images/LOGO-2020-1.jpg')}}">

    <!-- Librairie  Local CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/all.css')}}">
<!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

-->
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
                <a href="/blog">Blog</a>
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
                <a href="/nous-contacter">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section class="row wrap full-screen" id="register-image">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12" >

            <div class="margin-arround center">

                <form method="post" action="/register">
                    @csrf
                    <div class="form-group">
                        {!! $errors->first('lastname', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="lastname">Votre nom de famille:</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('name', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="name">Votre prénom:</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('classe', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="class">Votre classe:</label>
                        <select  class="form-control" name="classe" id="class">
                            <option name="seconde_gt_a">Seconde GT A</option>
                            <option name="seconde_gt_b">Seconde GT B</option>
                            <option name="seconde_pro_tisec">Seconde PRO TISEC</option>
                            <option name="seconde_pro_melec">Seconde PRO MELEC</option>
                            <option name="seconde_pro_tbee">Seconde PRO TBEE</option>
                            <option name="seconde_pro_mbc">Seconde PRO MBC</option>
                            <option name="premiere_s">Première SSI</option>
                            <option name="premiere_sti_a">Première STI A</option>
                            <option name="premiere_sti_b">Première STI B</option>
                            <option name="premiere_sti_c">Première STI C</option>
                            <option name="premiere_pro_tisec">Premiere PRO TISEC</option>
                            <option name="premiere_pro_melec">Premiere PRO MELEC</option>
                            <option name="premiere_pro_tbee">Premiere PRO TBEE</option>
                            <option name="premiere_pro_mbc">Premiere PRO MBC</option>
                            <option name="premiere_pro_macon">Premiere PRO Maçon</option>
                            <option name="premiere_pro_ifca">Premiere PRO IFCA</option>
                            <option name="terminal_ssi">Terminal SSI</option>
                            <option name="terminal_sti_a">Terminal STI A</option>
                            <option name="terminal_sti_b">Terminal STI B</option>
                            <option name="terminal_sti_c">Terminal STI C</option>
                            <option name="terminale_pro_tisec">Terminale PRO TISEC</option>
                            <option name="terminale_pro_melec">Terminale PRO MELEC</option>
                            <option name="terminale_pro_tbee">Terminale PRO TBEE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="email">Votre email:</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"  value="{{ old('password') }}"id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer votre mot de passe:</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation">
                    </div>
                    <div class="form-group form-check">
                        {!! $errors->first('agree', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <input type="checkbox" class="form-check-input"  name="agree" id="check">
                        <label class="form-check-label" for="check">Accepter les termes et la politique de confidentialité.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>



                </form>
            </div>

        </div>

    </section>
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
                        <h2>Information</h2>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/footer-tel.svg')}}" width="25px" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;top: 10px;">12 rue Saintonge 33000 Bordeaux</h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/footer-adresse.svg')}}"'" width="25px" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;top: 10px;">Tèl : 05 56 99 39 29</h4>
                    </div>

                    <div class="pad-arround-footer">
                        <img src="{{asset('media/images/footer-mail.svg')}}" width="25px" height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 28px;">
                            <a href="/nous-contacter" target="_blank" >Nous contacter</a>
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
                        <h2>Liens Utile</h2>
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
                        <img src="{{asset('media/images/cgu.png')}}"  height="35px" style="position: relative;left: 25px;">
                        <h4 style="position: relative;left: 50px;bottom: 20px;">
                            <a href="/cgu" target="_blank">CGU</a>
                        </h4>
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
