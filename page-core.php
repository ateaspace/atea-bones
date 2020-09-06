<?php
/*
 Template Name: DL Core Page
 *
*/
?>

<?php get_header(null,['core']); ?>

<div id="content">

  <div id="inner-content" class="wrap cf">
    
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <article style="border: 0;" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	  <section class="embedded-iframe entry-content cf" itemprop="articleBody">
	    <iframe src="/greenstone3/library" scrolling="yes"></iframe>
	  </section>


    </article>
     
    </main>
    
  </div>
  
</div>


<?php get_footer(); ?>
