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
      <?php include 'inc/page-menu.php'; ?>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>
</body>

