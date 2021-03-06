<!DOCTYPE html>
<html lang="fr" class="default">
    <head>
        <meta charset="UTF-8" />
        <title>Liste des voyants</title>
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
            <span class="headline__content">liste <span>des voyants</span>
            </span>
        </div>
        <section class="page">
            <div class="page__sidebar">
                <div class="sidebar__block sidebar__block--user">
                    <p class="sidebar__title sidebar__title--user">{{USER}}</p>
                    <div class="sidebar__credit">
                        Voici le solde de votre compte :<br/>
                        Il vous reste : {{X}} seconde
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
                <div class="page__psychics">
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-franck">
                            <img src="uploads/psychic/582d6e0fe4e0b_Franck.jpg" alt="Franck" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Franck</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <a href="chat/franck" class="psychic__button psychic__button--status available">Disponible</a>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/franck"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-olivier">
                            <img src="uploads/psychic/57d1299a2bf46_Olivier.jpg" alt="Olivier" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Olivier</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Cartomancie</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <a href="chat/olivier" class="psychic__button psychic__button--status available">Disponible</a>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/olivier"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-anita">
                            <img src="uploads/psychic/582d6dc2a2591_Anita.jpg" alt="Anita" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Anita</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Cartomancie</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status busy">En consultation</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/anita"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-veronique">
                            <img src="uploads/psychic/582d6e21a8201_Veronique.jpg" alt="Véronique" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Véronique</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status busy">En consultation</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/veronique"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-charly">
                            <img src="uploads/psychic/57d128c567efe_Charly.jpg" alt="Charly" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Charly</h3>
                                <p class="psychic__info">Spécialité: <span>Cartomancie</span><br />Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/charly"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-christelle">
                            <img src="uploads/psychic/57d128d0a8181_Christelle.jpg" alt="Christelle" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Christelle</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/christelle"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-daniel">
                            <img src="uploads/psychic/582d6dec12e72_Daniel.jpg" alt="Daniel" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Daniel</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/daniel"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-emilien">
                            <img src="uploads/psychic/582d6dfe00ba8_Emilien.jpg" alt="Emilien" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Emilien</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/emilien"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-patricia">
                            <img src="uploads/psychic/583c138717b85_Patricia.jpg" alt="Patricia" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Patricia</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/patricia"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-sonia">
                            <img src="uploads/psychic/57d129d81024e_Sonia.jpg" alt="Sonia" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Sonia</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/sonia"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics__item-container">
                        <div class="psychics__item" data-psychic_reference="tarot-vincent">
                            <img src="uploads/psychic/57d129ef5e1fa_Vincent.jpg" alt="Vincent" class="psychic__avatar" />
                            <div class="psychic__profile">
                                <h3 class="psychic__name">Vincent</h3>
                                <p class="psychic__info">
                                    Spécialité: <span>Voyance</span><br />
                                    Support divinatoire: <span>Tarot</span>
                                </p>
                                <div class="psychic__button psychic__button--status unavailable">Indisponible</div>
                                <a class="psychic__button psychic__button--more" href="fiche-voyant.php">En savoir +</a>
                            </div>
                            <div class="psychic__bottom">
                                <a  href="chat/vincent"  class="psychic__button psychic__button--chat">Lancer le tchat</a>
                            </div>
                        </div>
                    </div>
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
                © 2016 - <a href="voyants.php">Tarot Direct</a> - <a href="cgv.php">CGV</a> - <a href="mentions-legales.php">Mentions légales</a>
            </p>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/tarot.js"></script>
        <script type="text/javascript" src="js/psychic-availability.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                var psychicAvailability = new PsychicAvailability({
                    env: 'prod',
                    socketio_url: 'https://chat.voyance-en-direct.tv',
                    website_reference: 'tarot',
                    psychic_selector: 'data-psychic_reference',
                    status_selector: '.psychic__button--status',
                    available: {
                        class: 'available',
                        label: 'Disponible'
                    },
                    unavailable: {
                        class: 'unavailable',
                        label: 'Indisponible'
                    },
                    busy: {
                        class: 'busy',
                        label: 'En consultation'
                    }
                });
            });
        </script>
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
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-16975536-8', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>