<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

  <div id="inner-footer" class="wrap cf">

    <nav role="navigation">
      <?php wp_nav_menu(array(
  'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
  'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
  'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
  'menu_class' => 'nav footer-nav cf',            // adding custom nav class
  'theme_location' => 'footer-links',             // where it's located in the theme
  'before' => '',                                 // before the menu
  'after' => '',                                  // after the menu
  'link_before' => '',                            // before each link
  'link_after' => '',                             // after each link
  'depth' => 0,                                   // limit the depth of the nav
  'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
)); ?>
    </nav>
    <span class="footer-left-col">
	<a href="http://talutoit.ee/" target="_blank"><img src="http://www.kaarlitalu.ee/wp-content/uploads/2017/01/Talutoit_valgel_slogan.png" alt="TaluToit"></a>
    </span>
    <span class="footer-right-col">
     <p>
        <a href="https://et-ee.facebook.com/kaarlitalu/"  target="_blank"><img src="http://www.kaarlitalu.ee/wp-content/uploads/2016/02/icon-facebook.png" alt="fb"></a>
        <a href="https://www.google.ee/maps/place/Kaarli+Talukaup+O%C3%9C/@59.1364787,26.250534,18z/data=!4m12!1m6!3m5!1s0x0:0x9b5c8982a24a9009!2sKaarli+talu!8m2!3d59.136162!4d26.2510338!3m4!1s0x0:0xe7323bb54b65e80f!8m2!3d59.1364919!4d26.2512477?hl=et"  target="_blank"><img src="http://www.kaarlitalu.ee/wp-content/uploads/2016/02/google_maps_icon_round35x35.png" alt="google maps"></a>
      </p>
    </span>
    <span class="source-org copyright footer-text">
      <!--<p>&copy;&ensp; <?php bloginfo( 'name' ); ?>&ensp;<?php echo date('Y'); ?> </p>-->
      <p><strong>Kaarli Talukaup OÜ</strong>, Kaarli Ärina küla 46235 Väike-Maarja vald Lääne-Virumaa</p>
      <p>info@kaarlitalu.ee www.kaarlitalu.ee</p>
    </span>
  </div>

</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->
