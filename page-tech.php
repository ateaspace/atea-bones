<?php
/*
 Template Name: Te Reo Technology Page
 *
*/
?>

<?php get_header(null,['tech']); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">
    
    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


         <div id="subNavRed">
             <div id="subNavText" class="navTextBold">

               <p>
	        The development technologies and processes that will
		use Māori-language data to ensure Human-Computer
		Interactions are performed using te reo Māori. The
		models will use artificial intelligence and machine
		learning to deliver text-to-speech and speech-to-text
		for te reo and eventually recognise and convert
		optical characters (OCR).
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
