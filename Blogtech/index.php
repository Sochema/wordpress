<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article class ="post" class="col-xs-12 col-sm-12 col-lg-6">
    <figure>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    </figure>
    <p class="myImg"></p>

    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span><?php the_time('j m y'); ?></p>
      <?php the_content('Lire la suite'); ?>
    <p><a href="neuf.html"><i class="fa fa-hashtag" aria-hidden="true"></i>neuf</a></p>
    <p class="text-muted">Publié par<a href="#"><?php the_author_post_link(); ?></a></p>
    <div class="btn">
      <a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-chevron-right"></span>Lire la suite</a>
    </div>
  </article><!--end post header-->

<div class="entry clear">
   <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
   <?php the_content(); ?>
   <?php edit_post_link(); ?>
   <?php wp_link_pages(); ?> </div>
<!--end entry-->
<div class="post-footer">
   <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
</div><!--end post footer-->
</div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<div class="navigation index">
   <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
   <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
</div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<!--


      <article class="col-xs-12 col-sm-12 col-lg-6">
        <figure>
          <img src="https://images.pexels.com/photos/239919/pexels-photo-239919.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="bâtiment bleu">
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
          <img src="https://images.pexels.com/photos/287748/pexels-photo-287748.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="ampoule entourée de couleurs vives">
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
          <img src="http://images.pexels.com/photos/261/camera-technology-display-items.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="pièce détachées">
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
          <img src="https://images.pexels.com/photos/196254/pexels-photo-196254.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="des mains et plusieurs écrans d'ordinateur">
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
          <img src="https://images.pexels.com/photos/218413/pexels-photo-218413.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="personne portant le masque dans Scream, devant un ordinateur">
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
          <img src="https://images.pexels.com/photos/123335/pexels-photo-123335.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="fille avec casque vr">
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
          <img src="https://images.pexels.com/photos/159204/game-controller-joystick-joypad-gamepad-159204.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="une manette">
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
          <img src="https://images.pexels.com/photos/159420/piano-instrument-music-keys-159420.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="un piano">
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
          <img src="https://images.pexels.com/photos/245618/pexels-photo-245618.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="vitres de bâtiment">
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
          <img src="https://images.pexels.com/photos/119661/pexels-photo-119661.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="des interrupteurs">
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
-->

  <?php get_footer(); ?>
