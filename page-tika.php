<?php
/*
 Template Name: Tikanga Page
 *
*/
?>

<?php get_header(null,['tika']); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">
    
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <div id="subNavDarkBlue">
        <div id="subNavText" class="navTextBold">
	  <p>
	    Research on the impact of AI, VR & AR, MR and ML on
	    culture, language, time, space, place and
	    knowledge. Issues of data governance, sovereignty, access,
	    management, display and secondary use of Mātauranga in
	    Ātea are addressed from a Tikanga Māori perspective.
	  </p>
	  
        </div>
      </div>
      
      <article style="border: 0;" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<section class="embedded-iframe entry-content cf" itemprop="articleBody">
	  <?php	the_content(); ?>
	</section>
	
      </article>
    </main>
    
    <?php get_sidebar(); ?>

  </div>
  
</div>


<?php get_footer(); ?>
