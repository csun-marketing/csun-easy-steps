<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php echo"<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66349607-1', 'auto');
  ga('send', 'pageview');

</script>" ?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head();
?>

</head>

<body <?php body_class(); ?>>
    <?php $secondary_wordmark = get_theme_mod('secondary_logo'); ?>
    <?php $tertiary_wordmark = get_theme_mod('tertiary_logo'); ?>
    <?php $secondary_wordmark_url = get_theme_mod('secondary_wordmark_url'); ?>
    <?php $tertiary_wordmark_url = get_theme_mod('tertiary_wordmark_url'); ?>


    <?php
    	echo "
      <div class='layout-csun'>
        <div class='layout-csun--header'>
          <header id='header' class='header' role='banner'>
            <a id='logo' class='header--logo' title='Home' href='http://www.csun.edu/' rel='home'>
              <img class='header--logo-image' alt='Home' src='http://www.csun.edu/sites/default/themes/csun/logoCSUN.png'/>
            </a>
            <hgroup id='name-and-slogan' class='header--name-and-slogan'>
              <h1 id='site-name' class='header--site-name'>
                <a class='header--site-link' title='Home' href='http://www.csun.edu/' rel='home'>
                  <span>CSUN</span>
                </a>
              </h1>
            </hgroup>
          </header>
          <div class='wordmark-wrapper'>
          <h2 class='wordmark-secondary'>
            <a class='wordmark' title='Home' href=\"http://www.csun.edu/marketing-and-communications/our-services\" rel='home'>
              <span class='wordmark--offset'>Marketing and Communications</span>
            </a>
          </h2>
          <h3 class='third-wordmark'>
            <a class='wordmark' title='Home' href=\"$tertiary_wordmark_url\" rel='home'>
            <span class='wordmark--offset'></span>
            </a>
          </h3>
          </div>
        </div>

        <div class='nav-dropdown'>
          <a href='#' class='nav-dropdown__label' title='Menu'>&equiv;</a>
        </div>

        <div class='layout-csun--header-right nav-container'>
          <p class='skip-link'>
            <a href='http://www.csun.edu/user/2981#main-content'>Skip to Content</a>
          </p>

          <div class='panel-pane pane-menu-tree pane-user-menu'>
            <h2 class='pane-title'>User menu</h2>
            <div class='menu-block-wrapper menu-block-ctools-user-menu-1 menu-name-user-menu parent-mlid-user-menu:0 menu-level-1'>
              <ul class='menu'>
                <li class='menu--leaf first leaf menu-mlid-1195'>
                  <a class='menu--link' title='' href='http://www.csun.edu/accessibility'>Accessibility</a>
                </li>
                <li class='menu--leaf leaf menu-mlid-5131'>
                  <a class='menu--link' title='' href='http://www.csun.edu/peoplefinder'>Directory</a>
                </li>
                <li class='menu--leaf leaf menu-mlid-5136'>
                  <a class='menu--link' title='' href='http://www.csun.edu/calendar'>Calendar</a>
                </li>
                <li class='menu--leaf leaf menu-mlid-31546'>
                  <a class='menu--link' title='' href='http://www.csun.edu/atoz/' >A to Z</a>
                </li>
                <li class='menu--leaf leaf menu-mlid-5141'>
                  <a class='menu--link' title='' href='http://www.csun.edu/webmail'>Webmail</a>
                </li>
              </ul>
            </div>
          </div>

          <div class='panel-pane pane-block pane-google-appliance-ga-block-search-form'>
            <form id='google-appliance-block-form' accept-charset='UTF-8' method='post'
              action='http://www.csun.edu/gsearch/'>
              <div class='container-inline'>
                <h2 class='element-invisible'>Search Google Appliance</h2>
                <div class='form-item form-type-textfield form-item-search-keys'>
                  <label class='element-invisible' for='edit-search-keys'>
                    Enter the terms you wish to search for.
                  </label>
                  <input id='edit-search-keys' class='form-text' name='search_keys'
                    maxLength='128' size='15' type='text'>
                </div>
                <div id='edit-actions' class='form-actions form-wrapper'>
                  <input id='edit-submit' class='form-submit' name='op' value='Search' type='submit'>
                </div>
                <input name='form_build_id' value='form-_3bWPskFlOf8SEcIUiEN3Kazy0DVxtVD3voN5UADKJg'
                  type='hidden'>
                <input name='form_token' value='XnyscuoaVTB5bq5H_Zhfi00YQ6Crb-mEijeSQYqb7tg'
                  type='hidden'>
                <input name='form_id' value='google_appliance_block_form' type='hidden'>
              </div>
            </form>
          </div>
        </div>
        <div class='mobile-menu nav-container primary-nav'>";
        wp_nav_menu(
          array (
            'fallback_cb' => false
          )
        );
        // wp_nav_menu( array('menu' => 'Primary Navigation' ));
      echo "
        </div>
      </div>";
    ?>


    <?php

    	echo "
        <div id='primary-navigation' class='panel-pane pane-block pane-menu-block-custom-primary-links'>
          <h2 class='pane-title'>Navigation</h2>";
          wp_nav_menu(
            array (
              'fallback_cb' => false
            )
          );
          // wp_nav_menu( array('menu' => 'Primary Navigation' ));
      echo "
        </div>";
    ?>

    <?php
      $header_image = get_header_image();
  		if ( ! empty( $header_image ) ) : ?>
  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( $header_image ); ?>"
            class="header-image" width="<?php echo get_custom_header()->width; ?>"
            height="<?php echo get_custom_header()->height; ?>" alt="" />
        </a>
  	<?php
      endif; ?>

	</header><!-- #masthead -->

	<div id="main" class="wrapper">
