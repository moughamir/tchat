<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Mon Compte', $description, 'default');
?>
<body class="default">
<?php include('inc/header.php'); ?>  
<section class="page">
  <header class="page__header">
    <div class="page__header--content row">
      <div class="page__header--logo large-6 columns">
        <img src="img/user/user.png" alt="Mon compte">
        <h1 class="page__title">Mon Compte</h1>
      </div>
      <div class="page__header--menu large-6 columns">
        <a href="#" class="button">Rejoindre le chat</a>
        <a href="#" class="button">Voir les voyants</a>
      </div>
    </div>
  </header>
  <?php include('inc/sidebar.php'); ?>
  <div class="page__content">
    <div class="page-user">
      <div class="page__menu">
        <div class="page__menu--item"><a href="informations-personnelles.html"><i class="icon item-1"></i><span class="item__text">Informations personnelles</span></a></div>
        <div class="page__menu--item"><a href="ma-consommation.html"><i class="icon item-2"></i><span class="item__text">Ma consommation</span></a></div>
        <div class="page__menu--item"><a href="cartes-enregistrees.html"><i class="icon item-3"></i><span class="item__text">Cartes enregistrées</span></a></div>
        <div class="page__menu--item"><a href="mes-messages.html"><i class="icon item-4"></i><span class="item__text">Mes messages (3)</span></a></div>
        <div class="page__menu--item"><a href="historique-chat.html"><i class="icon item-5"></i><span class="item__text">Historique des conversations</span></a></div>
        <div class="page__menu--item"><a href="factures.html"><i class="icon item-6"></i><span class="item__text">Factures</span></a></div>
      </div>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>
</body>

