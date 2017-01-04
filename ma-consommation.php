<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Ma consommation', $description, 'default pi');
?>

<body class="account personnal_informations">
  <?php include('inc/header.php'); ?>
  <section class="page">
    <header class="page__header">
      <div class="page__header--content">
        <div class="page__header--logo">
          <img src="img/user/my_consumption-grey.png" alt="Ma consommation">
          <h1 class="page__title">Ma consommation</h1>
        </div>
      </div>
    </header>
  <?php include('inc/sidebar.php'); ?>
  <div class="page__content">
    <div class="page-user">
      <div class="row">
        <div class="small-12 columns">
          <ul class="consom-info">
            <li class="item"><i class="icon"></i>Il vous rest: <span class="hightlight">15 minutes</span></li>
            <li class="item"><i class="icon"></i>Vous avez souscrit à un abonnement de <span class="hightlight">44.9 €/mois</span> en date du <span class="hightlight"><time datetime="2016-04-21">21/04/2016</time></span></li>
            <li class="item"><i class="icon"></i>Cet abonnement vous donne droit à <span class="hightlight">15 minutes par mois</span>.</li>
            <li class="item"><i class="icon"></i>Prochaine échéance prévue: <span class="hightlight"><time datetime="2016-06-20">20/06/2016</time></span>.</li>
            <li class="item"><i class="icon"></i>Prochain créditage prévu: <span class="hightlight">15 minutes le <time datetime="2016-06-20">20/06/2016</time></span>.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <span class="button recredit_action">Recharger mon compte</span>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns"><a href="" class="logout"><span>X</span> Se déconnecter</a></div>
      </div>
      <div id="buy_formula_modal" class="reveal-modal buy_formula_modal" data-reveal aria-hidden="true" role="dialog"></div>
    </div>
    <div class="page__menu">
      <div class="page__menu--item"><a href="informations-personnelles.html"><i class="icon item-1"></i><span class="item__text">Informations personnelles</span></a></div>
      <div class="page__menu--item"><a href="cartes-enregistrees.html"><i class="icon item-3"></i><span class="item__text">Cartes enregistrées</span></a></div>
      <div class="page__menu--item"><a href="mes-messages.html"><i class="icon item-4"></i><span class="item__text">Mes messages (3)</span></a></div>
      <div class="page__menu--item"><a href="historique-chat.html"><i class="icon item-5"></i><span class="item__text">Historique des conversations</span></a></div>
      <div class="page__menu--item"><a href="factures.html"><i class="icon item-6"></i><span class="item__text">Factures</span></a></div>
    </div>
  </div>
</section>
    <?php include('inc/footer.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/tarot.js"></script>
    <script type="text/javascript">
            var buy_formula_modal_id = 'buy_formula_modal';
            var cancel_subscription_modal_id = 'cancelSubscriptionModal';
            $(window).load(function () {
                $('.recredit_action').on('click', function () {
                    $('#' + buy_formula_modal_id).foundation('reveal', 'open', 'recherche-formules', {multiple_opened: true});
                });
                $('.open_cancel_subscription_modal').on('click', function () {
                    var modal = $('#' + cancel_subscription_modal_id), p = modal.find('p.subscriptionUntil'), jLink = $(this);

                    p.html(p.html().replace('%xx/xx%', jLink.data('committed_until')));

                    modal
                            .find('.chat_subscription_id_receiver')
                            .val(jLink.data('subscription_id'))
                            .end()
                            .foundation('reveal', 'open');
                });
                initBuyFormulaModal('#' + buy_formula_modal_id, function (data) {
                    $('#buyFormulaSuccessModal').remove();

                    $('<div class="reveal-modal success tiny" id="buyFormulaSuccessModal" data-reveal role="dialog">'
                            + '<div class="content">'
                            + data.message
                            + '<a class="close-reveal-modal" aria-label="Close">&#215;</a>'
                            + '</div>'
                            + '</div>')
                            .appendTo('body')
                            .foundation('reveal', 'open');

                    $.get(document.location.href, function (response) {
                        $('.remaining_credit').html(
                                $(response).find('.remaining_credit').html()
                                );
                    });
                });
            });
        </script>
</body>
