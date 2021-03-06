<!DOCTYPE html>
<html lang="fr" class="default">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot en direct</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="noindex, nofollow" />
        <link rel="stylesheet" href="css/tarot.css">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Lobster|Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body class="default">
        <section class="header header-default">
            <div class="header__content">
                <a href="voyants.php">
                    <img src="img/tarot/logo.png" alt="Tarot Direct" class="header__logo" />
                </a>
            </div>
            <div class="header__login">
                <span>{{USER}}</span>
                <a href="informations-personnelles.php" class="button">Mon compte</a>
                <a href="logout" class="button">Me déconnecter</a>
            </div>
        </section>
        <div class="headline">
            <span class="headline__content">Fiche du voyant</span>
        </div>
        <section class="page">
            <div class="page__sidebar">
                <div class="sidebar__block sidebar__block--user">
                    <p class="sidebar__title sidebar__title--user">Amine</p>
                    <div class="sidebar__credit">
                        Voici le solde de votre compte :<br/>
                        Il vous reste : 0 seconde
                    </div>
                    <a href="compte.php" class="sidebar__button">Accéder à mon compte</a>
                    <a href="logout" class="sidebar__button">Me déconnecter</a>
                </div>
                <div class="sidebar__block sidebar__block--opening">
                    <p class="sidebar__title sidebar__title--opening">Horaires d&#039;ouverture</p>
                    <p class="sidebar__text--opening">du lundi au vendredi<br />de 8h à minuit</p>
                </div>
                <div class="sidebar__block sidebar__block--chat">
                    <p class="sidebar__title sidebar__title--chat">Découvrez les avantages de la voyance par tchat</p>
                    <div class="sidebar__chat__item">
                        <i class="icon icon-sidebar-reinsurance1"></i>
                        <p>Confidentialité garantie</p>
                    </div>
                    <div class="sidebar__chat__item">
                        <i class="icon icon-sidebar-reinsurance2"></i>
                        <p>Rapidité &amp; fiabilité des réponses</p>
                    </div>
                    <div class="sidebar__chat__item">
                        <i class="icon icon-sidebar-reinsurance3"></i>
                        <p>Budget maitrisé, garantie, sérénité, paiement sécurisé</p>
                    </div>
                </div>
            </div>
            <div class="page__content">
                <div class="page__block page__block--white">
                    <img src="uploads/psychic/582d6e0fe4e0b_Franck.jpg" alt="Franck" class="psychic__avatar" />
                    <div class="psychic__profile">
                        <h1 class="psychic__name">Franck</h1>
                        <div class="rate">Note: <ul class="rating">
                            <li class="star"><img src="img/star.svg" /></li>
                            <li class="star"><img src="img/star.svg" /></li>
                            <li class="star"><img src="img/star.svg" /></li>
                            <li class="star"><img src="img/star.svg" /></li>
                            <li class="star"><img src="img/star.svg" /></li>
                        </ul> (X avis)</div>
                        <p class="psychic__info">
                            Spécialité: <span>Voyance</span><br />
                            Support divinatoire: <span>Tarot</span><br />
                            Signe astrologique: <i class="psychic__sign icon icon-sign-sagittarius"></i>
                        </p>
                        <a href="chat/franck" class="psychic__button psychic__button--status psychic__button--status-available">Disponible</a>
                        <a class="psychic__button psychic__button--more" href="voyants/">Liste des voyants</a>
                        <a href="chat/franck" class="psychic__button psychic__button--chat">Lancer le tchat</a>
                    </div>
                </div>
                <div class="page__block page__block--white">
                    <fieldset class="psychic__description">
                        <legend>Franck</legend>
                        Bonjour à toutes et à tous, je m’appelle Franck et je suis cartomancien, tout spécialement utilisateur du célèbre tarot de Marseille qui est toujours dans mon sac depuis maintenant de longues années. Depuis que j’ai reçu ce jeu des mains de mon grand-père, je ne le quitte plus et je pense que je ne suis pas près de m’en séparer tant je suis habité par la passion et l’amour de ses cartes. Pour moi la cartomancie est l’histoire de toute une vie et un allié puissant pour y voir plus clair dans une période et un avenir parfois troubles. Et les conseils des cartes s’avèrent bien utiles dans ces situations pour y voir plus clair et trouver son chemin. C’est avec plaisir que j’accomplirai mon rôle d’interprète pour vous transmettre tous ce que les cartes ont à vous dire.
                    </fieldset>
                </div>
            </div>
        </section>
        <div class="page">
            <div class="page-home__content">
                <div class="page__block page__block--white">
                    <div class="page__block__reinsurance">
                        <i class="icon icon-reinsurance-security"></i>
                        <i class="icon"></i>
                        <p>Garantie anonymat<br />Protection des données personnelles</p>
                    </div>
                    <div class="page__block__reinsurance">
                        <i class="icon icon-reinsurance-expertise"></i>
                        <p>Voyants experts<br />Grâce à plusieurs années d’expériences</p>
                    </div>
                    <div class="page__block__reinsurance">
                        <i class="icon icon-reinsurance-plan"></i>
                        <p>Prix adaptatifs<br />Des formules adaptées à vos besoins</p>
                    </div>
                    <div class="page__block__reinsurance">
                        <i class="icon icon-reinsurance-payment"></i>
                        <p>Paiement sécurisé<br />Transaction vias Be2Bill</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p class="footer__content">
                © 2016 -
                <a href="voyants.php">Tarot Direct</a> -
                <a href="cgv.php">CGV</a> -
                <a href="mentions-legales.php">Mentions légales</a>
            </p>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/tarot.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 933151112;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/933151112/?value=0&amp;guid=ON&amp;script=0"/>
            </div>
        </noscript>
        <script>
            !function(m,y,a,s,t,r,o){m.GoogleAnalyticsObject=a;m[a]||(m[a]=function(){
            (m[a].q=m[a].q||[]).push(arguments)});m[a].l=+new Date;r=y.createElement(s);
            o=y.getElementsByTagName(s)[0];r.src=t;o.parentNode.insertBefore(r,o)}
            (window,document,'ga','script','//www.google-analytics.com/analytics.js');
            
            ga('create', 'UA-16975536-8', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>