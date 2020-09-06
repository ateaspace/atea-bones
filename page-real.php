<?php
/*
 Template Name: Realities Page
 *
*/
?>

<?php get_header(null,['real']); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">
    
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <div id="subNavYellow">
        <div id="subNavText" class="navTextBold">
	  <p>
	  Research and development into delivering a Māori experience
	  for presence, telepresence, and co-presence using virtual,
	  augmented and mixed realities (VR, AR, and MR), controlled
	  avatars for storytelling and immersed experiences from
	  different locations.
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
