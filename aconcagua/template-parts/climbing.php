<?php 
/**
 *template name: Page Layout One
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
 ?>
 <div class="cover inr_pgs">	
	<div class="cover_bottom">


	<div class="youtube_information" style="height: auto;">
	<div class="multiply"></div>
	<div class="container">
		<div class="left">
			<div class="cover_buttons">
				<div class="">
					<div class="buttons fl-l">
						
           <?php 
                if(is_page(790) || is_page(874)) {
                 
                }

                ?>

					</div>
				</div>
			</div>
			<nav class="social_links">
				<?php
                 switch_to_blog(1);
                    if ( function_exists('cn_social_icon') ) echo cn_social_icon();
                 restore_current_blog();
                ?>
                
			</nav>
		</div>
		<div class="image">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/svg/youtube-logo.svg"/>
			<p><b>Acomara channel</b></p>
		</div>
	</div>
</div>
</div>
</div>

<div class="content-wapper layout-one">

    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

    
</div>

<?php
   // echo '<input type="text" name="activepost" id="activepost" value="'.get_the_ID().'" />';
?>

<?php 
if(is_page(790) || is_page(874)) {
 get_footer('dutch'); 
}
else if(is_page(800) || is_page(859)) {
 get_footer('espanol'); 
}
else if(is_page(792) || is_page(876)) {
 get_footer('french'); 
}
else if(is_page(802) || is_page(872)) {
 get_footer('italion'); 
}
else if(is_page(814)) {
 get_footer('neaderland'); 
}
else if(is_page(828) || is_page(868)) {
 get_footer('polski'); 
}
else if(is_page(811) || is_page(870)) {
 get_footer('purtuguis'); 
}
else if(is_page(816) || is_page(864)) {
 get_footer('русский'); 
}
else {
 get_footer();
}

?>

<?php // get_footer(); ?>

<style>
    @media (max-width:768px) { 
        .ul-YoutubeGallery li{width: 50% !important;}
        .ul-YoutubeGallery li h3.title-YoutubeGallery{text-align: center;}
        .ul-YoutubeGallery li blockquote.blockquote-YoutubeGallery{text-align: center;}
    }
    
    @media (max-width:460px) { 
        .ul-YoutubeGallery li{width: 100% !important;}
        
    }
    
</style>