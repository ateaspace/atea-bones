<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

				  <div id="topNav">
				    <ul>
				      <li><a href="about/index.html">About</a></li>
				      <li><a href="contact.html">Contact</a></li>
				    </ul>
				  </div>

				  <div style="background-color: #fff;">
					<div id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					  <img alt="Atea logo" src="<?php echo get_template_directory_uri(); ?>/library/images/favicon32.png" />
					  <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
					</div>


<div id="navTabs" class="responsiveNavbar">
  <div class="responsiveDropdown">
    <div style="margin-top: 20px; margin-right: 10px;">
      <button class="responsiveDropbtn" style="padding-top: 6px; padding-bottom: 6px; padding-right: 8px; font-weight: bold; color: #666"
	      onclick="toggleResponsiveDropdown()">Research Areas ▼</button>
    </div>
    <ul class="responsiveDropdownContent" id="researchAreasDropdown">
      <li id="blue"><a href="index.php">Home</a></li>
      <li><a href="index.php/digital-library-core">Core Content</a></li>
      <li><a href="te-reo-technology/">Te Reo Technology</a></li>
      <li><a href="realities/l">Realities</a></li>
      <li><a href="tikanga">Tikanga</a></li>
  </ul>
  </div> 
</div>

<script>
  // When the user clicks on the button, toggle between hiding and showing the dropdown content
  function toggleResponsiveDropdown() {
      document.getElementById("researchAreasDropdown").classList.toggle("responsiveShow");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
      if (!e.target.matches('.responsiveDropbtn')) {
	  var researchAreasDropdown = document.getElementById("researchAreasDropdown");
	  if (researchAreasDropdown.classList.contains('responsiveShow')) {
	      researchAreasDropdown.classList.remove('responsiveShow');
	  }
      }
  }
</script>



<!--
					
					<div id="navTabs">
					    <ul class="dropdown-content" id="myDropdown">
					      <li id="blue"><a href="index.html">Home</a></li>
					      <li><a href="text/index.html">Audio &amp; Text Project</a></li>
					      <li><a href="peiJones/index.html">Pei Jones</a></li>
					      <li><a href="naming/index.html">Māori Naming</a></li>
					      <li><a href="whakatauki/index.html">Whakataukī</a></li>
					    </ul>

					  
					</div>

-->
					
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'atea-bones' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it is located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
					<div style="clear: both;">
					</div>

				  </div>

				</div>

			</header>
