<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Mes Factures', $description, 'default pi');
?>
<body class="default">
<?php include('inc/header.php'); ?>  
<section class="page">
  <header class="page__header">
    <div class="page__header--content">
      <div class="page__header--logo">
        <img src="img/user/bill-grey.png" alt="Ma consommation">
        <h1 class="page__title">Factures</h1>
      </div>
    </div>
  </header>
  <?php include('inc/sidebar.php'); ?>
  <div class="page__content">
    <div class="page-user">
      <ul class="cards">
        <li class="card">
          <div class="card-number">Facture du 03/11/2015</div>
        </li>
        <li class="card">
          <div class="card-number">Facture du 21/12/2015</div>
        </li>
        <li class="card">
          <div class="card-number">Facture du 19/01/2016</div>
        </li>
      </ul>
    </div>
    <div class="page__menu">
      <div class="page__menu--item"><a href="informations-personnelles.php"><i class="icon item-1"></i><span class="item__text">Informations personnelles</span></a></div>
      <div class="page__menu--item"><a href="ma-consommation.php"><i class="icon item-2"></i><span class="item__text">Ma consommation</span></a></div>
      <div class="page__menu--item"><a href="mes-messages.php"><i class="icon item-4"></i><span class="item__text">Mes messages (3)</span></a></div>
      <div class="page__menu--item"><a href="historique-chat.php"><i class="icon item-5"></i><span class="item__text">Historique des conversations</span></a></div>
      <div class="page__menu--item"><a href="factures.php"><i class="icon item-6"></i><span class="item__text">Factures</span></a></div>
    </div>
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

