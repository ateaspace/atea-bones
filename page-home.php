<?php
/*
 Template Name: Home Page
 *
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">

    <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <!--
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	   -->

	   <div id="subNavBlue">
	     <div id="subNavText" class="navTextBold">
	       
	       <p>
		 Nau mai, haere mai ki Ātea. Welcome to Ātea – a Science for
		 Technological Innovation National Science Spearhead Project. You
		 will find examples of technological innovations that draw on Māori
		 protocols and world views to connect Māori to their knowledge,
		 language, culture, histories, stories and to each other.
	       </p>
	       
	     </div>
	   </div>

	   <img alt="Atea banner-header" style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/library/images/atea-header-image.png" />
							
	   <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	     <!--
		 <header class="article-header">
		   
		   <h1 class="page-title"><?php the_title(); ?></h1>
					   
					   <p class="byline vcard">
					     <?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'atea-bones' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
					      </p>

					   
		 </header>
-->

		 <section class="entry-content cf" itemprop="articleBody">
		   <?php the_content();	?>
		 </section>

<!--
		 <footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'atea-bones' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>
		 <?php comments_template(); ?>
-->

</article>

	   <!--
							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'atea-bones' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'atea-bones' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'atea-bones' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							 -->
							 
						</main>

				</div>

			</div>


<?php get_footer(); ?>
