<?php
/*
 Template Name: Kaarli Talu
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?/******************************************************
 HEADER
 ******************************************************/?>
<?php get_header(); ?>

<?/******************************************************
 1ST FULLSCREEN BACKGROUND
 ******************************************************/?>
<div class="para img-1">
  <div class="v-center">
    <p class="lead">päris toit võidab südame</p>
  </div>
</div>
<?/******************************************************
 1ST BORDER WITH BADGE
 ******************************************************/?>
<div id="talu" style="position: absolute;
margin: -25.5em 0px 0px;"></div>
<div class="content-border-top"></div>
<div class="content-border-bottom"></div>
<div class="badge-container">
  <div class="badge">
    <div class="badge-text">talu</div>
  </div>
</div>
<?/******************************************************
 1ST CONTENT
 ******************************************************/?>
<div id="content" class="img-bg">
<div class="bg-flower"></div>
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all t-all d-1of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <section class="entry-content cf" itemprop="articleBody">
          <div class="content-logo">
            <img src="http://kaarlitalu.ee/wp-content/uploads/2015/10/talu.png" alt="talu-logo">
          </div>
          <?php
          // query for the talu page
          $your_query = new WP_Query( 'pagename=talu' );
          // "loop" through query (even though it's just one page)
          while ( $your_query->have_posts() ) : $your_query->the_post();
          the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
          ?>
        </section>
      </article>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </main>
  </div>
</div>
<div class="content-border-top"></div>
<div class="content-border-bottom"></div>
<?/******************************************************
 2ND FULLSCREEN BACKGROUND
 ******************************************************/?>
<div id="tegevused" class="para-half img-2">
  <div class="v-center">
    <p class="lead"></p>
  </div>
</div>
<?/******************************************************
 2ND BORDER WITH BADGE
 ******************************************************/?>
<div class="content-border-top"></div>
<div class="content-border-bottom"></div>
<div class="badge-container">
  <div class="badge">
    <div class="badge-text">tooted</div>
  </div>
</div>
<?/******************************************************
 2ND CONTENT
 ******************************************************/?>
<div id="content" class="img-bg">
<div class="bg-flower"></div>
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all t-all d-1of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <section class="entry-content cf" itemprop="articleBody">
          <div class="content-logo">
            <img src="http://kaarlitalu.ee/wp-content/uploads/2015/10/lill.png" alt="lille-logo">
          </div>
          <?php
          // query for the page
          $your_query = new WP_Query( 'pagename=tooted' );
          // "loop" through query (even though it's just one page)
          while ( $your_query->have_posts() ) : $your_query->the_post();
          the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
          ?>
        </section>
      </article>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </main>
  </div>
</div>
<div class="content-border-top"></div>
<div class="content-border-bottom"></div>
<?/******************************************************
 3RD FULLSCREEN BACKGROUND
 ******************************************************/?>
<div id="kontakt" class="para-half img-3">
  <div class="v-center">
    <p class="lead"></p>
  </div>
</div>
<?/******************************************************
 3RD BORDER WITH BADGE
 ******************************************************/?>
<div class="content-border-top"></div>
<div class="content-border-bottom"></div>
<div class="badge-container">
  <div class="badge">
    <div class="badge-text">kontakt</div>
  </div>
</div>
<?/******************************************************
 3RD CONTENT
 ******************************************************/?>
<div id="content" class="img-bg">
<div class="bg-flower"></div>
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all t-all d-1of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <section class="entry-content cf" itemprop="articleBody">
          <div class="content-logo">
            <img src="http://kaarlitalu.ee/wp-content/uploads/2016/02/telefon.png" alt="kontakti-logo">
          </div>
          <?php
          // query for the talu page
          $your_query = new WP_Query( 'pagename=kontakt' );
          // "loop" through query (even though it's just one page)
          while ( $your_query->have_posts() ) : $your_query->the_post();
          the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
          ?>
        </section>
      </article>
      <?php endwhile; else : ?>
      <?php endif; ?>
    </main>
  </div>
</div>
<?/******************************************************
  FOOTER
 ******************************************************/?>
<?php get_footer(); ?>
