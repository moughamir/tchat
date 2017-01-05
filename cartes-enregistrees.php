<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Cartes enregistrées', $description, 'default pi');
?>
<body class="default">
    <?php include('inc/header.php'); ?>
    <div class="headline">
        <span class="headline__content">Cartes enregistrées</span>
    </div>
    <section class="page">
        <header class="page__header">
            <div class="page__header--content">
                <div class="page__header--logo">
                    <img src="img/user/registered_cards-grey.png" alt="Ma consommation">
                    <h1 class="page__title">Cartes enregistrées</h1>
                </div>
            </div>
        </header>
        <?php include('inc/sidebar.php'); ?>
        <div class="page__content">
            <div class="page-user">
                <ul class="cards">
                    <li class="card">
                        <div class="card-number">4913 3579 6042 4256</div>
                        <button class="delete-card">Supprimer cette carte</button>
                    </li>
                    <li class="card">
                        <div class="card-number">6709 6514 0493 8965</div>
                        <button class="delete-card">Supprimer cette carte</button>
                    </li>
                    <li class="card">
                        <div class="card-number">5250 4126 2757 9638</div>
                        <button class="delete-card">Supprimer cette carte</button>
                    </li>
                </ul>
                <div class="row bottom-btns">
                    <div class="large-6 columns"><button class="add-card">+ Ajouter une carte</button></div>
                    <div class="large-6 columns"><button class="button save">Enregistrer</button></div>
                </div>
                <div data-reveal class="reveal-modal small alias-confirm-modal" id="alias-delete-confirm-modal">
                    <h2>Suppression de la carte</h2>
                    <p>Êtes-vous sûr(e) de vouloir supprimer cette carte ?</p>
                    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                    <a data-confirm-cancel class="button secondary">Annuler</a>
                    <a data-confirm class="button alert">Confirmer</a>
                </div>
            </div>
            <?php include './inc/page-menu.php'; ?>

        </div>
    </section>
    <?php include('inc/footer.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/tarot.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            var modal = $('#alias-delete-confirm-modal');
            modal.find('a[data-confirm-cancel]').click(function () {
                modal.foundation('reveal', 'close');
            });
            $('ul.aliases li a').click(function () {
                modal.find('a[data-confirm]').attr('href', this.href);
                modal.foundation('reveal', 'open');
                return false;
            });
        });
    </script>
</body>

