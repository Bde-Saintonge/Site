<!-- Initialisation du contenu HTML   -->
@extends('layouts.base')
@section('content')
    <section class="max-w-7xl px-6 py-24 mx-auto space-y-12 dark:bg-coolGray-800 dark:text-white dark:text-coolGray-50">
        <div class="w-full mx-auto space-y-4 text-center">
            <h1 class="text-4xl text-blue-400 font-bold leading-tight md:text-5xl">RGPD</h1>
        </div>
        <div class="dark:text-coolGray-100">

            <h2 class="text-blue-400 font-bold text-xl mb-3">1. Introduction</h2>
            <p class="my-2 text-justify">Dans le cadre de son activité, le lycée SAINTE FAMILLE SAINTONGE, dont le siège
                social
                est situé au 12 rue de Saintonge, 33000 BORDEAUX, est amenée à collecter et à traiter
                des informations dont certaines sont qualifiées de "données personnelles". LYCEE SAINTE
                FAMILLE SAINTONGE attache une grande importance au respect de la vie privée, et
                n’utilise que des donnes de manière responsable et confidentielle et dans une finalité
                précise.</p>

            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">2. Les données transmises directement</h2>
            <p class="my-2 text-justify">Ces données sont celles que vous nous transmettez directement, via un formulaire de
                contact ou bien par contact direct par email. Sont obligatoires dans le formulaire de
                contact le champs « prénom et nom », « entreprise ou organisation » et « email ».
                Les données collectées automatiquement
                Lors de vos visites, une fois votre consentement donné, nous pouvons recueillir des
                informations de type « web analytics » relatives à votre navigation, la durée de votre
                consultation, votre adresse IP, votre type et version de navigateur. La technologie
                utilisée est le cookie.</p>

            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">3. Utilisation des données</h2>
            <p class="my-2 text-justify">Les données que vous nous transmettez directement sont utilisées dans le but de vous
                re-contacter et/ou dans le cadre de la demande que vous nous faites. Les données « web
                analytics » sont collectées de forme anonyme (en enregistrant des adresses IP anonymes)
                par Google Analytics, et nous permettent de mesurer l'audience de notre site web, les
                consultations et les éventuelles erreurs afin d’améliorer constamment l’expérience des
                utilisateurs. Ces données sont utilisées par LYCEE SAINTE FAMILLE SAINTONGE, responsable
                du traitement des données, et ne seront jamais cédées à un tiers ni utilisées à d’autres
                fins que celles détaillées ci-dessus.</p>

            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">4. Base légale</h2>
            <p class="my-2 text-justify">Les données personnelles ne sont collectées qu’après consentement obligatoire de
                l’utilisateur. Ce consentement est valablement recueilli,
                libre, clair et sans équivoque.</p>

            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">5. Durée de conservation</h2>
            <p class="my-2 text-justify">Les données seront sauvegardées durant une durée maximale de 3 ans.</p>



            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">6. Cookies</h2>
            <p class="my-2 text-justify">Voici la liste des cookies utilisées et leur objectif :</p>

            <ul class="list-disc list-inside">
                <li><strong>Cookie "PHPSESSID"</strong> : Permet de vérifier si un utilisateur est connecté ou
                non pour lui permettra d'accéder à des pages sécurisés.</li>
                <li><strong>Cookie "XSRF-TOKEN"</strong> : Est une clée de chiffrement permettant de signer
                    l'envoie des différents formulaires.</li>
                <li><strong>Cookie "laravel_session"</strong> : Permet d'ouvrir une session de notre
                    framework.</li>
            </ul>


            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">7. Vos droits concernant les données personnelles</h2>
            <p class="my-2 text-justify">Vous avez le droit de consultation, demande de modification ou d’effacement sur
                l’ensemble de vos données personnelles. Vous pouvez également retirer votre consentement
                au traitement de vos données.</p>


            <h2 class="text-blue-400 font-bold text-xl mt-8 mb-3">8. Contact délégué à la protection des données</h2>
            <p class="my-2 text-justify">Directeur Délégué aux Formations Professionnelles et Technologiques : M. Stéphane BERGES
                - <a class="underline text-blue-300" href="mailto:s.berges@lyceesaintefamille.com?subject=RGPD BDE Saintonge">s.berges@lyceesaintefamille.com</a></p>
        </div>
    </section>
@endsection

<!-- Fin de l'Initialisation du contenu HTML -->
