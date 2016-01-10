<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gbl
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<div class='menu-overlay--closed'>
  <nav id="site-navigation" class="main-navigation menu-overlay__navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
  </nav><!-- #site-navigation -->
</div>

<div class="other-sites-footer">
  <h3>Ailleurs</h3>
  <div>
    <a href="http://www.creusonslabible.fr">
        <img src="http://gbu.fr/templates/gbu09/img/logos/creusonslabible-nb.png" style="width:210px"
    </a>
    <div>
      Sur <a href="http://www.creusonslabible.fr">Creusons la Bible</a> vous trouverez un ensemble varié de ressources théologiques pour découvrir ou approfondir la foi chrétienne basée sur la Bible.
    </div>
    <hr />
  </div>
  <div>
    <a href="http://www.questionsuivante.fr">
      <img src="http://gbu.fr/templates/gbu09/img/logos/questionsuivante-nb.png">
    </a>
    <div>
      De nombreuses ressources en ligne sur <a href="http://www.questionsuivante.fr">Question suivante</a> pour réflechir aux questions existentielles et se forger une opinion éclairée sur la foi chrétienne et sur la Bible.
    </div>
    <hr />
  </div>
  <div>
    <a href="http://amis.gbu.fr">
      <img src="http://gbu.fr/templates/gbu09/img/logos/amis-nb.png" style="width:210px">
    </a>
    <div>
      Réseaux professionnels et ressources en ligne à destination des amis des GBU, <a href="http://amis.gbu.fr">des GBUssiens d'avant</a>.
    </div>
    <hr />
  </div>
  <div>
    <a href="http://pbu.gbu.fr">
      <img src="http://gbu.fr/templates/gbu09/img/logos/PBU-nb.png">
    </a>
    <div>
      En partenariat avec le GBU, les <a href="http://pbu.gbu.fr">Presses Bibliques Universitaires</a> sont une collection pour réflechir aux questions que se posent nos contemporains.
    </div>
    <hr />
  </div>
  <div>
    <a href="http://www.veritasforum.eu">
      <img src="http://gbu.fr/templates/gbu09/img/logos/forumveritas-nb.png">
    </a>
    <div>
      <a href="http://www.veritasforum.eu">Forum-veritas</a>: Des conférences-débats au sein des facs, avec des intervenants de points de vues contrastants pour une compréhension globale du monde.
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
