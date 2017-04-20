@extends('Classique-template')

@section('title')
    Mention-Légales
@endsection

@section('custom_css')
    @if(auth::User()->promo === 'Exia')
    <link rel="stylesheet" href="/../webProject/public/css/style-mentionExia.css">
    @else
        <link rel="stylesheet" href="/../webProject/public/css/style-mentionEi.css">
    @endif

@endsection

@section('contenu')
    <div class="container">
        <div class="col-md-8">
            <h2>MENTIONS LÉGALES</h2>
            <br><br>
            <h2>ÉDITEUR</h2>

            <p> CESI – Association loi 1901 <br>
                SIREN : 775 722 572<br>
                Siège social : 30 rue Cambronne 75015 Paris<br>
                Tél : 01 44 19 23 45 Fax : 01 42 50 25 06<br>
                e-mail : contact@cesi.fr</p>
            <br>
            <h2>HÉBERGEUR</h2>

            <p>Poisson Bouge, Laboratoire de contenus web dynamiques<br>
                7 rue des Cadeniers<br>
                44000 Nantes<br>
                <a href="http://www.poissonbouge.fr/">www.poissonbouge.fr</a></p>
            <br>
            <h2>DÉCLARATION D’ACTIVITÉ</h2>

            <p>CESI – association loi de 1901<br>
                775 722 572<br>
                30 rue Cambronne – F-75015 Paris – tél. : +33(0) 1 44 13 23 45 – fax : +33(0) 1 42 50 25 06<br>
                Déclaration d’activité enregistrée sous le numéro 11 75 47883 75 auprès du Préfet de la région
                Ile-de-France.<br>
                Cet enregistrement ne vaut pas agrément de l’Etat.</p>
            <br>
            <h2>COLLECTE DES DONNÉES PERSONNELLES</h2>

            <p>Par “Données Personnelles”, il faut entendre toute information qui permet d’identifier une personne. Il
                s’agira le plus souvent d’un nom, d’une adresse, d’un numéro de téléphone ou d’une adresse électronique.<br><br>

                Le CESI collecte des informations nominatives par l’intermédiaire notamment, de formulaires, de bons de
                commande, et de bulletins d’inscription.</p>
            <br>
            <h2>DROIT D’ACCÈS, DE RECTIFICATION ET DE SUPPRESSION DES DONNÉES</h2>

            <p> Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez
                d’un droit d’accès, de rectification et de suppression aux informations qui vous concernent, que vous
                pouvez exercer en vous adressant à cil@cesi.fr ou en adressant un courrier à CESI, 30 rue Cambronne,
                75015 Paris.</p>
            <br>
            <h2>CONSERVATION DES DONNÉES</h2>

            <p>Le CESI conserve les données ainsi collectées pendant une durée minimum de un an, pouvant varier en
                fonction du statut de la personne concernée par cette collecte. En tout état de cause, cette durée est
                raisonnablement fixée par le responsable du traitement, et ne peut être inférieur à la durée de la
                formation suivie ou de la relation entre le CESI et l’utilisateur.</p>
            <br>
            <h2>SÉCURITÉ</h2>

            <p>Le CESI s’engage à mettre en œuvre tous les moyens nécessaires au bon fonctionnement du site. Cependant,
                le CESI ne peut pas garantir la continuité absolue de l’accès aux services proposés par le site. Les
                adhérents sont informés que les informations et services proposés sur le site <a href="https://exia.cesi.fr">https://exia.cesi.fr</a>
                pourront être interrompus en cas de force majeure et pourront le cas échéant contenir des erreurs
                techniques.</p>
            <br>
            <h2>COOKIES</h2>

            <p>Lors de la consultation de notre site <a href="https://exia.cesi.fr">https://exia.cesi.fr</a> ou <a href="www.eicesi.fr">www.eicesi.fr</a>, des cookies sont
                déposés sur votre ordinateur, votre mobile ou votre tablette.<br><br>

                Un cookie est un fichier texte déposé sur votre ordinateur lors de la visite d’un site ou de la
                consultation d’une publicité. Il a pour but de collecter des informations relatives à votre navigation
                et de vous adresser des services adaptés à votre terminal (ordinateur, mobile ou tablette). Les cookies
                sont gérés par votre navigateur internet. Nous veillons dans la mesure du possible à ce que les
                prestataires de mesures d’audience respectent strictement la loi informatique et libertés du 6 janvier
                1978 modifiée et s’engagent à mettre en œuvre des mesures appropriées de sécurisation et de protection
                de la confidentialité des données.<br><br>

                Les seuls cookies utilisés par le site sont ceux destinés à la mesure d’audience et ne collectent pas de
                données personnelles. Les outils de mesures d’audience sont déployés afin d’obtenir des informations sur
                la navigation des visiteurs. Ils permettent notamment de comprendre comment les utilisateurs arrivent
                sur un site et de reconstituer leur parcours.
                Les données générées par les cookies sont transmises et stockées par les prestataires de mesure
                d’audience (Xiti et Google). Les données générées par Google sont hébergées sur des serveurs situés aux
                Etats-Unis. Google utilisera cette information dans le but d’évaluer votre utilisation du site mais ne
                recoupera pas votre adresse IP avec toute autre donnée détenue par Google. Les prestataires de mesure
                d’audience sont susceptibles de communiquer ces données à des tiers en cas d’obligation légale ou
                lorsque ces tiers traitent ces données pour leur compte.<br><br>

                Vous pouvez à tout moment choisir de désactiver ces cookies. Votre navigateur peut également être
                paramétré pour vous signaler les cookies qui sont déposés dans votre ordinateur et vous demander de les
                accepter ou pas. Vous pouvez accepter ou refuser les cookies au cas par cas ou bien les refuser
                systématiquement. Afin de gérer les cookies au plus près de vos attentes nous vous invitons à paramétrer
                votre navigateur en tenant compte de la finalité des cookies.
                Informations complémentaires sur les cookies<br><br>

                Pour plus d’information sur les cookies : <a href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser">https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser</a>
            </p>

        </div>
    </div>
    <br>    <br>    <br>    <br>


@endsection
