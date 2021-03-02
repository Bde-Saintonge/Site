<!-- Initialisation du contenu du document HTML   -->
@extends('layouts.base')
@section('content')
  <!-- Section Explication BDE -->
    <section class="row wrap full-screen">
        <!-- Div de Construction Explication BDE-->
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 full-div">
            <!-- Div Habillage Explication BDE -->
            <div class="container-expli">
                <img src="" class="image" style="width:100%">
                <div class="explication center">
                    <div class="text">
                        <span style="font-weight: bold;">Bienvenue sur le site du bureau des élèves du lycée Sainte Famille Saintonge. Créé en 2018, ce bureau regroupe trois entités détaillées ci-desouus : le Bureau Des Actions (BDA), le Bureau des Sports (BDS), le Bureau de la culture (BDC) ainsi que le Pôle Communication.</span>
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
                            <h4>Pôle Com</h4>
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
<!-- Fin d'Initialisation du contenu du document HTML -->
@endsection


