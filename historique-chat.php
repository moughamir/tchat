<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Historique tchat', $description, 'default pi');
?>

<body class="account">
  <?php include('inc/header.php'); ?>
<section class="page">
  <header class="page__header">
    <div class="page__header--content">
      <div class="page__header--logo">
        <img src="img/user/chat_history-grey.png" alt="Ma consommation">
        <h1 class="page__title">Historique tchat</h1>
      </div>
    </div>
  </header>
  <?php include('inc/sidebar.php'); ?>
  <div class="page__content">
    <div class="page-user">
      <div class="account_block ">
        <div class="content">
          <ul class="conversations-list">
            <li class="conversation media-object-date">
              <div class="media-object-section">
                <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
              </div>
              <div class="media-object-section">
                <p>Coversation du <time>21/10/2015</time></p>
              </div>
            </li>
            <li class="conversation media-object-date active">
              <div class="media-object-section">
                <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
              </div>
              <div class="media-object-section">
                <p>Coversation du <time>03/11/2015</time></p>
              </div>
            </li>
            <li class="conversation media-object-date">
              <div class="media-object-section">
                <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
              </div>
              <div class="media-object-section">
                <p>Coversation du <time>19/11/2015</time></p>
              </div>
            </li>
            <li class="conversation media-object-date">
              <div class="media-object-section">
                <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
              </div>
              <div class="media-object-section">
                <p>Coversation du <time>05/12/2015</time></p>
              </div>
            </li>
          </ul>
          <h2 class="conversation_header">Conversation du 03/11/2015<br/>avec Carole</h2>
            <ul class="conversations">
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
                <li class="media-object">
                  <div class="media-object-section">
                    <div class="thumbnail"><img src="uploads/psychic/psychic.jpg" alt=""></div>
                  </div>
                  <div class="media-object-section">
                    <h4>Carole</h4>
                    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                  </div>
                </li>
              </ul>

          <div class="row bottom-btns">
            <div class="large-6 columns"></div>
            <div class="large-6 columns"><button class="all">Voir tout</button></div>
          </div>
            </div>
          </div>
        </div>
        <?php include './inc/page-menu.php'; ?>
      
      </div>
    </section>
    <?php include('inc/footer.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/tarot.js"></script>
    <script type="text/javascript">
    $(window).load(function () {
      var eLiConversations = $('ul.conversations li');
      eLiConversations.on('click', function () {
        eLiConversations.removeClass('active');
        $(this).addClass('active');
        $('div.conversations')
        .find('.conversation.active').removeClass('active').end()
        .find('.conversation[data-conversation_id="' + $(this).data('conversation_id') + '"]').addClass('active');
      });
    });
    var chatContainer = {
      height: "+=200",
      overflow: "auto"
    }
    $('.all').click(function(){
      $('.conversations').css(chatContainer);
      $(this).hide();
    });
    </script>
  </body>
