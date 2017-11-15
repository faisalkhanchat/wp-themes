<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
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
	<style>
	.lang_item .flag img {
		max-height:50px;
		max-width:80px;
	}
	</style>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/form.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/animate.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/grid.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheet/style.min_.css">
</head>

<body <?php body_class(); ?>>


	<header class="header">
		<div class="container">
			<div class="logo">
                <h1><a href="http://aconcaguaexpeditions.com"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-main.png" alt=""></a></h1>
			</div>		
			<div class="hamburger">
				<a href="#">
					<span class="icon-menu">
					    <span></span>
					    <span></span>
					    <span></span>
					</span>
				</a>
			</div>	
			<!--<a href="#" class="contact_us_button button_1">
				<span>Contact <b>US</b></span>
			</a>
			-->
			<?php 
                if(is_page(790) || is_page(874)) {
                //  get_footer('dutch'); 
                    switch_to_blog(3);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(800) || is_page(859)) {
                //  get_footer('espanol'); 
                    switch_to_blog(7);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(792) || is_page(876)) {
                 // get_footer('french'); 
                    switch_to_blog(2);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(802) || is_page(872)) {
                 // get_footer('italion'); 
                    switch_to_blog(4);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(814) || is_page(866)) {
                //  get_footer('neaderland'); 
                    switch_to_blog(9);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(828) || is_page(868)) {
                //  get_footer('polski'); 
                    switch_to_blog(8);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(811) || is_page(870)) {
                 // get_footer('purtuguis'); 
                    switch_to_blog(6);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else if(is_page(816) || is_page(864)) {
                 // get_footer('русский'); 
                    switch_to_blog(10);
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    restore_current_blog();
                    
                }
                else {
                    wp_nav_menu( array( 
                        'theme_location' => '',
                        'menu'     => 'Top Contact Button',
                        'container' => 'a',
                        'menu_class'=>'contact_us_button button_1',

                    ));
                    

                }

                ?>
			<nav class="lang_menu">		
			<a href="#" class="lang_selector">Languages <span class="fa fa-angle-right"></span></a>	
				<ul class="lang_submenu">
					<li class="lang_item lg_en">
						<a href="#" data-lang="en">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/en.svg" /></div> 
							<div class="text">English</div> 
						</a>
					</li>
					<li class="lang_item lg_fr">
						<a href="#" data-lang="fr">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/fr.svg" /></div> 
							<div class="text">Français</div> 
						</a>
					</li>
					<li class="lang_item lg_de">
						<a href="javascript:void();" data-lang="de">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/de.svg" /></div> 
							<div class="text">Deutsch</div> 
						</a>
					</li>
					<li class="lang_item lg_it">
						<a href="#" data-lang="it">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/it.svg" /></div> 
							<div class="text">Italiano</div> 
						</a>
					</li>
					<li class="lang_item lg_pt">
						<a href="javascript:void();" data-lang="pt">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/pt.svg" /></div> 
							<div class="text">Portugues</div> 
						</a>
					</li>
					<li class="lang_item lg_es">
						<a href="#" data-lang="es">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/es.svg" /></div> 
							<div class="text">Español</div> 
						</a>
					</li>
					<li class="lang_item lg_po">
						<a href="#" data-lang="po">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/pl.svg" /></div> 
							<div class="text">Polski</div> 
						</a>
					</li>
					<li class="lang_item lg_nl">
						<a href="#" data-lang="nl">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/nl.svg" /></div> 
							<div class="text">Nederland</div> 
						</a>
					</li>
					<li class="lang_item lg_ru">
						<a href="#" data-lang="ru">
							<div class="flag"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/ru.svg" /></div> 
							<div class="text">русский</div> 
						</a>
					</li>
				</ul>
				<div id="menu_contents">
						<div class="menu_content lg_en">
							<ul class="expeditions">
								<a href="javascript:void();" class="title">Aconcagua Expeditions</a>
								
                                <?php switch_to_blog(1); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',

                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
								
							</ul>
							
							<?php /*  wp_nav_menu( array(
                                        'theme_location' => '3',
                                        'menu'     => 2,
                                        'container' => 'ul',
                                        'menu_class'=>'aconcagua',
                            ) ); */ ?>
                            
                            <?php switch_to_blog(1); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' =>
                                'primary' ) );
                            restore_current_blog();
                            ?>
						</div>
						<div class="menu_content lg_fr">
							<ul class="expeditions">
								<a href="javascript:void();" class="title">Aconcagua Expéditions</a>
								<?php switch_to_blog(2); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',

                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(2); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' =>
                                'primary' ) );
                            restore_current_blog();
                            ?>
                            
						</div>
						<div class="menu_content lg_de">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Spedizione</a>
								<?php switch_to_blog(3); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',

                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							
							<?php switch_to_blog(3); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
                           
						</div>
						<div class="menu_content lg_it">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Spedizione</a>
								<?php switch_to_blog(4); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',

                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(4); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
						<div class="menu_content lg_pt">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Expediciones</a>
								<?php switch_to_blog(6); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',
                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(6); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
						<div class="menu_content lg_es">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Expediciones</a>
								<?php switch_to_blog(7); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',
                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(7); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
						<div class="menu_content lg_po">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Wyprawy</a>
								<?php switch_to_blog(8); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',
                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(8); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
						<div class="menu_content lg_nl">
							<ul class="expeditions">
								<a href="#" class="title">Aconcagua Expedities</a>
								<?php switch_to_blog(9); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',

                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(9); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
						<div class="menu_content lg_ru">
							<ul class="expeditions">
								<a href="#" class="title">Аконкагуа Экспедиции</a>
								<?php switch_to_blog(10); wp_nav_menu( array( 
                                    'container' => 'ul',
                                    'menu_class'=>'blk',
                                    'link_before' => '<span class="background"></span><span>',
                                       'link_after' => '</span>',
                                    'theme_location' =>
                                    'social' ) );
                                restore_current_blog();
                                ?>
                                
							</ul>
							<?php switch_to_blog(10); wp_nav_menu( array( 
                                'container' => 'ul',
                                'menu_class'=>'aconcagua',
                                'theme_location' => 'primary' ) );
                            restore_current_blog();
                            ?>
                            
							
						</div>
				
				</div>
			</nav>	


			<?php
            
            ?>
		</div>
	</header>
	

