<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Liste des voyants', $description, 'default');
?>

<body class="account">
  <?php include('inc/header.php'); ?>
  <div class="headline">
    <span class="headline__content">liste <span>des voyants</span>
    </span>
  </div>
  <section class="page">
  <?php include('inc/chat-sidebar.php'); ?>
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
                                <p class="psychic__info">
                                Informations personnelles    Spécialité: <span>Cartomancie</span><br />
                                    Support divinatoire: <span>Tarot</span>
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
                                <a href="informations-personnelles.php"></a>
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
    <?php include('inc/footer.php'); ?>
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
</body>
