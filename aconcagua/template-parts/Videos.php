<?php 
/**
 *template name: Videos
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="sitelock-site-verification" content="4395" />
	<meta name="google-site-verification" content="tAC79Ubrwl0UG32Fr5RQTXnMxo7YzqChFBFbXDFGcx4" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/form.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/animate.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/grid.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/style.min_.css">
</head>

<body <?php body_class(); ?>>


	<header class="header">
		<div class="container" style="text-align:center;">
			<div class="logo" style="display:inline-block;float: none;text-align: center;">
                <h1 style="display:inline-block;"><a href="http://aconcaguaexpeditions.com"><img style="height: 80px;" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-main.png" alt=""></a></h1>
			</div>
			<!--<a href="#" class="contact_us_button button_1">
				<span>Contact <b>US</b></span>
			</a>
			-->
		</div>
	</header><?

     $b = get_current_blog_id(); 
 ?>
<div class="sales">
	<?php
	// TO SHOW THE PAGE CONTENTS
	while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	
		<?php the_content(); ?>

	<?php
	endwhile; //resetting the page loop
	wp_reset_query(); //resetting the page query
	?>
	
</div>
<footer class="footer">
	<div class="container">
		<div class="block_1">
			<div class="footer_header">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-ftr.png" />
				<a href="#">AconcaguaExpeditions.com</a>
				<p>Mendoza - Argentina</p>
			</div>
			<nav class="social_links">
				<?php
                 switch_to_blog(1);
                    if ( function_exists('cn_social_icon') ) echo cn_social_icon();
                 restore_current_blog();
                ?>
                
				<div class="youtube_footer">
					<a href="https://www.youtube.com/user/acomara"><img src="http://aconcaguaexpeditions.com/wp-content/themes/aconcagua/images/svg/youtube-logo.svg" />
					<p><b>Acomara channel</b></p></a>
				</div>
			</nav>
		</div>
		<div class="block_2">
			<?php if(is_active_sidebar('sidebar-2')):?>
             <?php dynamic_sidebar('sidebar-2');?>
            <?php endif;?>
            
		</div>
		<div class="block_3">
		<?php   
             wp_nav_menu( array(
                    'theme_location' => '',
                    'menu'     => 'Footer Left Button',
                    'container' => 'a',
                            'link_before' => '<span>',
                               'link_after' => '</span>',
                    'menu_class'=>'footer_left',
                ) ); 
             /*if(is_page(47) && ($b == 1)) {  //  English climbing reservation top link 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing',
                        'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',
                        'menu_class'=>'footer_left ',
                    )); restore_current_blog();
                }
                else if(is_page(162) && ($b == 2)) {  //  Français climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing france', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(96) && ($b == 3)) {  //  Deutsch climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Deutsch', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(171) && ($b == 4)) {  //  Italiano climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Italiano', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(184) && ($b == 6)) {  //  Portugues climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Portugues', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(166) && ($b == 7)) {  //  Español climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Español', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(40) && ($b == 8)) {  //  Polski climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Polski', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(43)&& ($b == 9)) {  //  Nederland climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Nederland', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if((is_page(43)) && ($b == 10)) {  //  русский climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing русский', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                
            
            else{
                     wp_nav_menu( array(
                    'theme_location' => '',
                    'menu'     => 'Footer Left Button',
                    'container' => 'a',
                            'link_before' => '<span>',
                               'link_after' => '</span>',
                    'menu_class'=>'footer_left',
                ) ); 
                }*/
            ?>
                
		</div>
	</div>
</footer>
<div id="contact-buttons">
	<button type="button" class="action"><i class="fa fa-pencil" aria-hidden="true"></i></button>
	<button type="button" class="hdn mail"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
	<button type="button" class="hdn messenger"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/fbmsg.png" height="35" /></button>
	<button type="button" class="hdn whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
	<button type="button" class="hdn phone"><i class="fa fa-phone" aria-hidden="true"></i></button>
</div>
<script>
jQuery(window).on( "load", function() { 
	// Scroll by anchor
	if(location.hash.slice(1)!="") {
		var scrollposit = jQuery('#'+location.hash.slice(1));
		if(scrollposit.length>0) { jQuery('html, body').animate({ scrollTop: scrollposit.offset().top }, 1000); console.log(scrollposit.offset().top); }
	}
	// Abre o cierra las opciones de contacto
	jQuery('#contact-buttons button.action').click(function(event) {
		if(jQuery('#contact-buttons').hasClass("active")) {
			jQuery('#contact-buttons button.hdn').fadeOut();
			jQuery('#contact-buttons').css("width","60px");
			jQuery('#contact-buttons').removeClass("active");
		} else {
			jQuery('#contact-buttons').css("width","300px");
			jQuery('#contact-buttons button.hdn').fadeIn();
			jQuery('#contact-buttons').addClass("active");
		}
	});
	jQuery('button.mail').click(function(event) {
		window.location.href = "mailto:info@aconcaguaexpeditions.com";
	});
	jQuery('button.messenger').click(function(event) {
		window.location.href = "https://m.me/Aconcagua22841/";
	});
	jQuery('button.whatsapp,a.whatsapp').click(function(event) {
		event.preventDefault();
		window.location.href = "https://api.whatsapp.com/send?phone=5492616181000&text=I'm%20interested%20in%20your%20Aconcagua%20expeditions.";
	});
	jQuery('button.phone').click(function(event) {
		window.location.href = "tel:+542614251983";
	});
	

});
</script>
<?php wp_footer(); ?>
	<script>
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-16235768-1', 'auto');
	ga('send', 'pageview');
	}
</script>
<style>
.header {
	height: 160px;
}
.you-are-in {
	padding-top: 200px;
}
@media(min-width:640px) {
	.header {
		height: 180px;
	}
}
@media(max-width:639px) {
	.bg_blk {
		background-attachment: fixed;
		background-position-x: 80%;
	}
	.you-are-in {
		padding-top: 140px; 
	}
	iframe	{
		height: 280px;
	}
}
.you-are-in .text_2 {
	text-align: center;
	font-size: 1.6rem;
	text-transform: none;
	color: #fff;
	text-shadow: 0px 1px 5px #333;
	margin: 20px 0;
	border-top: 1px solid #fff;
	padding-top: 20px;
}
</style>
</body>
</html>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/magnific.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=twentysixteen_fonts_url()?>">