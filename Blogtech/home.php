<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" conte nt="ie=edge">
  <title><?php bloginfo('title'); ?></title>
  <link rel="icon" href="favicon.png" type="image/png">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="<?php bloginfo('stylesheet_url'); ?>" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <?php wp_head(); ?>
</head>



<body>

  <header>
    <nav>
      <?php wp_nav_menu(); ?>
        </nav>

    <h1><?php bloginfo('name'); ?></h1>
  </header>

  <div class="container-fluid">
    <div class="row">
      <section class="col-xs-12 row">
        <article class="col-xs-12 col-sm-12 col-lg-6">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/nouvellecollection.jpeg" alt="bâtiment bleu">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">LA NOUVELLE COLLECTION</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 15 juin 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="neuf.html"><i class="fa fa-hashtag" aria-hidden="true"></i>neuf</a></p>
          <p class="text-muted">Publié par<a href="#"> Sophie Stiké</a></p>

          <div class="btn">
            <a href="lanouvellecollection.html"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-6">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/enfantdelatech.jpeg" alt="ampoule entourée de couleurs vives">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">LES ENFANTS DE LA TECH</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 14 juin 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="decrypter.html"><i class="fa fa-hashtag" aria-hidden="true"></i>decrypter</a></p>
          <p class="text-muted">Publié par<a href="#"> Sacha Touille</a></p>

          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-6">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/doityourself.jpeg" alt="pièce détachées"/>
          </figure>
          <p class="myImg"></p>

          <h2 class="title">DO IT YOURSELF</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 12 mars 2017</p>
          <p class="paragraphe">6"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="lifetech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>lifetech</a></p>
          <p class="text-muted">Publié par<a href="#"> Mehdi Kamen</a></p>
          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-6">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/journalisme.jpeg" alt="des mains et plusieurs écrans d'ordinateur">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">LE JOURNALISME 3.0</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 07 mars 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="decrypter.html"><i class="fa fa-hashtag" aria-hidden="true"></i>decrypter</a></p>
          <p class="text-muted">Publié par<a href="#"> Jude Citron</a></p>
          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>
      </section>
    </div>
  </div>


  <hr>


  <div class="container-fluid">
    <div class="row">
      <section class="col-xs-12 col-sm-12 col-md-12  col-lg-12 row">

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/e_learning.jpeg" alt="personne portant le masque dans Scream, devant un ordinateur">
          </figure>
          <p class="myImg"></p>
          <h2 class="title">E-LEARNING</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 25 février 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="lifetech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>lifetech</a>, <a href="bibliotech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>bibliotech</a></p>
          <p class="text-muted">Publié par<a href="#"> Ivan Dushite</a></p>

          <div class="btn">
            <a href="article/lanouvellecollection.html"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/connexionvr.jpeg" alt="fille avec casque vr">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">LA CONNEXION EN VR</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 19 février 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="neuf.html"><i class="fa fa-hashtag" aria-hidden="true"></i>neuf</a></p>
          <p class="text-muted">Publié par<a href="#"> Sacha Touille</a></p>

          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/gaming.jpeg" alt="une manette">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">GAMING</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 01 février 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="lifetech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>lifetech</a></p>
          <p class="text-muted">Publié par<a href="#"> Mehdi Kamen</a></p>
          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>

        </article>

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="/<?php echo esc_url (get_template_directory_uri() );?>img/e_musique.jpeg" alt="un piano">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">E-MUSIQUE</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 20 janvier 2017</p>
          <p class="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="lifetech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>lifetech</a></p>
          <p class="text-muted">Publié par<a href="#"> Jude Citron</a></p>

          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/lego.jpeg" alt="vitres de bâtiment">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">APPRENDRE AVEC DES LEGO</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 12 décembre 2016</p>
          <p class="paragraphe">6"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="bibliotech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>bibliotech</a>,<a href="decrypter.html"><i class="fa fa-hashtag" aria-hidden="true"></i> decrypter</a></p>
          <p class="text-muted">Publié par<a href="#"> Mehdi Kamen</a></p>
          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-lg-4">
          <figure>
            <img src="<?php echo esc_url (get_template_directory_uri() );?>img/architecht.jpeg" alt="des interrupteurs">
          </figure>
          <p class="myImg"></p>

          <h2 class="title">LES ARCHI"TECH"TS</h2>
          <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> Le 12 décembre 2016</p>
          <p class="paragraphe">6"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <p><a href="bibliotech.html"><i class="fa fa-hashtag" aria-hidden="true"></i>bibliotech</a>,<a href="decrypter.html"><i class="fa fa-hashtag" aria-hidden="true"></i> decrypter</a></p>
          <p class="text-muted">Publié par<a href="#"> Mehdi Kamen</a></p>
          <div class="btn">
            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
          </div>
        </article>

      </section>
      </div>
      </div>

      <div id='seconds-counter'> </div>


      <footer>
        <ul>
          <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="contact.html"><i class="fa fa-address-card-o" aria-hidden="true"></i></a></li>
        </ul>
      </footer>

      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
      </script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
        (function(b, o, i, l, e, r) {
          b.GoogleAnalyticsObject = l;
          b[l] || (b[l] =
            function() {
              (b[l].q = b[l].q || []).push(arguments)
            });
          b[l].l = +new Date;
          e = o.createElement(i);
          r = o.getElementsByTagName(i)[0];
          e.src = 'https://www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
      </script>
      <script src="js/bootstrap.js"></script>
      </body>

      </html>
