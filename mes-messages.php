<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Mes messages', $description, 'default pi');
?>
<body class="default">
    <?php include('inc/header.php'); ?>
    
    <div class="headline">
        <span class="headline__content">Mes messages</span>
    </div>
    <section class="page">
        <header class="page__header">
            <div class="page__header--content">
                <div class="page__header--logo">
                    <img src="img/user/messages-grey.png" alt="Ma consommation">
                    <h1 class="page__title">Mes messages</h1>
                </div>
            </div>
        </header>
        <?php include('inc/sidebar.php'); ?>
        <div class="page__content">
            <div class="page-user">
                <section class="messages-section">
                    <header class="messages-header">
                        <h2>(3) Nouveaux messages non-lus</h2>
                    </header>
                    <ul class="messages unread">
                        <li class="message">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 18/11/2015</span>
                        </li>
                        <li class="message">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 12/11/2015</span>
                        </li>
                        <li class="message">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 09/11/2015</span>
                        </li>
                    </ul>
                </section>

                <section class="messages-section">
                    <header class="messages-header">
                        <h2>Anciens messages</h2>
                    </header>
                    <ul class="messages read">
                        <li class="message active">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 18/11/2015</span>
                        </li>
                        <li class="message">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 12/11/2015</span>
                        </li>
                        <li class="message">
                            <div class="message-title">Découvrez notre offre promotionnelle</div>
                            <span class="message-date">le 09/11/2015</span>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="page-user">
                <div class="message-r">
                    <header class="message-header">
                        <span class="message-title">Découvrez notre offre promotionnelle</span><span class="date">Le 18/11/2015</span>
                    </header>
                    <section class="message-content">
                        <p>Bonjour David<br />Nous souhaitons vous informer de la promotion de décembre.<br/>Pour les fêtes bénéficiez de 15 minutes à 1€ avec le code: <b>NOEL2015</b>.<br/>Bonne journée et à trés bientôt.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <?php include('inc/footer.php'); ?>
</body>

