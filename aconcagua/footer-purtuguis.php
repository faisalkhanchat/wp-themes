<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



<div class="partners">
	<div class="container">
		<div class="logos">
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-1.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-2.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-3.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-4.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-5.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-6.png">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-7.png">
			</div>
		</div>
	</div>
</div>
<div class="services">
	<div class="container">
	    <ul class="expeditions fblk">
	    <?php  switch_to_blog(6);
            wp_nav_menu( array( 
            'container' => 'ul',
            'menu_class'=>'blk',
            'link_before' => '<span>',
               'link_after' => '</span><span class="background"></span>',

            'theme_location' =>
            'social' ) );
            
            restore_current_blog();
        ?>
        </ul>
	    
		<!--<div class="box climbing">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/climbing.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(47);?>"><div class="text">Climbing</div></a>
			</div>
		</div>
		<div class="box trekking">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/trekking.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(51);?>"><div class="text">Trekking</div></a>
			</div>
		</div>
		<div class="box logistics">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logistics.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(172);?>"><div class="text">Logistics</div></a>
			</div>
		</div>	
		-->
	</div>
</div>
<div class="information">
	<div class="container">
		<div class="left">
			<nav>
			<?php  switch_to_blog(6);   wp_nav_menu( array(
                        'theme_location' => '',
                        'menu'     => 'Aconcagua Information Footer',
                        'container' => 'ul',
                        //'menu_class'=>'aconcagua',

                    ) );  restore_current_blog(); ?>
					</nav>
			<!--<nav>
				<ul>
					<li><a href="<?php echo get_permalink(10);?>">Aconcagua Park</a></li>
					<li><a href="<?php echo get_permalink(30);?>">Statistics</a></li>
					<li><a href="<?php echo get_permalink(99);?>">Routes</a></li>
					<li><a href="<?php echo get_permalink(170);?>">Services</a></li>
					<li><a href="<?php echo get_permalink(217);?>">Weather </a></li>
					<li><a href="<?php echo get_permalink(227);?>">Preparation </a></li>
					<li><a href="<?php echo get_permalink(249);?>">Medicine </a></li>
					<li><a href="<?php echo get_permalink(350);?>">Anecdotes</a></li>
				</ul>
			</nav>-->
			<nav>
			<?php   switch_to_blog(6);   wp_nav_menu( array(
                                        'theme_location' => '',
                                        'menu'     => 'Aconcagua Services footer',
                                        'container' => 'ul',
                                        //'menu_class'=>'aconcagua',
                            ) );  restore_current_blog();  ?>
							
							</nav>
			<!--<nav>
				<ul>
					<li><a href="<?php echo get_permalink(47);?>">Climbing</a></li>
					<li><a href="<?php echo get_permalink(51);?>">Trekking</a></li>
					<li><a href="<?php echo get_permalink(60);?>">Logistics and other services</a></li>
					<li><a href="<?php echo get_permalink(425);?>">Contact us</a></li>
					<li><a href="#">Why choose us</a></li>
					<li><a href="#">Who are we?</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Policy privacy</a></li>
					<li><a href="#">Related Links</a></li>
				</ul>
			</nav>-->
			<nav>
			<?php    wp_nav_menu( array(
                                        'theme_location' => '',
                                        'menu'     => 'Another available services in Argentina',
                                        'container' => 'ul',
                                        //'menu_class'=>'aconcagua',
                            ) );  ?>
							
			</nav>
			<nav>
				<ul class="lang-foot">
                    <li><a href="http://182.71.223.29/aconcaguaWp/frances/1/introduccion.htm">Français</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/aleman/1/introduccion.htm">Deustch</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/portugues/cerroaconcagua/parqueaconcaguaargentina.htm">Português</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/italiano/1/introduccion.htm">Italiano</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/espaniol/1/cerro_aconcagua.htm">Español</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/polaco/1/aconcagua.htm">Polski</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/holandes/1/cerro_aconcagua.htm">Nederlands</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/russian/1/aconcagua_mount.htm">Pусский</a></li>
                    
                </ul>
			</nav>
			
		</div>
		<div class="right">
        
	    	<?php if(is_active_sidebar('sidebar-4')):?>
             <?php   switch_to_blog(1);    dynamic_sidebar('sidebar-4'); restore_current_blog(); ?>
            <?php endif; ?>
            
			<!--<p><strong>MONT ACONCAGUA</strong> - Expéditions, information, guides,  ascensions - Argentine</p>
			<p><strong>CERRO ACONCAGUA</strong> - Expediciones, información, guías  y logística - Argentina</p>
			<p><strong>ACONCAGUA BERG</strong> - Expeditionen auf den Aconcagua  und vollstandige Information uber den Berg - Argentinien</p>
			<p><strong>MONTE ACONCAGUA</strong> - Spedizione - escursione - informazione - guide e logistica Salita alla cima e trekking Argentina</p>
			<p><strong>CERRO ACONCAGUA</strong> - Expedições - informação - serviços guias e logística - Ascensão ao cume e trekking - Argentina</p>
			-->
		</div>
	</div>
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
                
			</nav>
		</div>
		<div class="block_2">
			<?php if(is_active_sidebar('sidebar-2')):?>
             <?php switch_to_blog(6); dynamic_sidebar('sidebar-2'); restore_current_blog(); ?>
            <?php endif;?>
            
		</div>
		<div class="block_3">
				<?php   switch_to_blog(6);  wp_nav_menu( array(
                    'theme_location' => '',
                    'menu'     => 'Footer Left Button',
                    'container' => 'a',
                            'link_before' => '<span>',
                               'link_after' => '</span>',
                    'menu_class'=>'footer_left',

                ) );  restore_current_blog(); ?>
                
		</div>
	</div>
</footer>
<div id="icon_fixed">
	<a href="" id="wa">
		<img src="images/svg/wa.svg" />
	</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.3.3/mobile-detect.min.js"></script>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/magnific.min.css" />
<script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/jquery.magnific-popup.min.js"></script>

   <?php
  global $wpdb;
$results1 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
$results2 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
$results3 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
$results4 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
$results5 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
$results6 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );

$result1 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
$result2 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
$result3 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
$result4 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
$result5 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
$result6 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
$result7 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
$result8 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
$result9 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
$result10 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
$result11 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );

switch_to_blog(1);
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];
 restore_current_blog();
foreach($results1 as $datas1){
    
 ?>
 <!--<article class="projectgal ml-0">
 <img alt="SearchEngineJournal" class="wd-150" src="<?php echo $upload_path.'/photo-gallery'.$datas1['image_url'];?>">
 </article> 
 -->
 <?php
} ?>
   

 <script type="text/javascript">
$(document).ready(function() {
    // normal page btn 1  
    $('#nbtn1').magnificPopup({
    items: [
      <?php foreach($results1 as $datas1){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas1['image_url'];?>',
        title: '<?php echo $datas1['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    // normal page btn 2  
    $('#nbtn2').magnificPopup({
    items: [
      <?php foreach($results2 as $datas2){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas2['image_url'];?>',
        title: '<?php echo $datas2['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    // normal page btn 3
    $('#nbtn3').magnificPopup({
    items: [
      <?php foreach($results3 as $datas3){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas3['image_url'];?>',
        title: '<?php echo $datas3['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    
    // normal page btn 4  
    $('#nbtn4').magnificPopup({
    items: [
      <?php foreach($results4 as $datas4){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas4['image_url'];?>',
        title: '<?php echo $datas4['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    // normal page btn 5  
    $('#nbtn5').magnificPopup({
    items: [
      <?php foreach($results5 as $datas5){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas5['image_url'];?>',
        title: '<?php echo $datas5['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});

// normal page btn 6  
$('#nbtn6').magnificPopup({
    items: [
      <?php foreach($results6 as $datas6){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas6['image_url'];?>',
        title: '<?php echo $datas6['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});

// polish page btn 1  
$('#pbtn1').magnificPopup({
    items: [
      <?php foreach($result1 as $data1){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data1['image_url'];?>',
        title: '<?php echo $data1['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 2  
$('#pbtn2').magnificPopup({
    items: [
      <?php foreach($result2 as $data2){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data2['image_url'];?>',
        title: '<?php echo $data2['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 3  
$('#pbtn3').magnificPopup({
    items: [
      <?php foreach($result3 as $data3){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data3['image_url'];?>',
        title: '<?php echo $data3['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 4  
$('#pbtn4').magnificPopup({
    items: [
      <?php foreach($result4 as $data4){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data4['image_url'];?>',
        title: '<?php echo $data4['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 5  
$('#pbtn5').magnificPopup({
    items: [
      <?php foreach($result5 as $data5){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data5['image_url'];?>',
        title: '<?php echo $data5['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 6  
$('#pbtn6').magnificPopup({
    items: [
      <?php foreach($result6 as $data6){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data6['image_url'];?>',
        title: '<?php echo $data6['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 7  
$('#pbtn7').magnificPopup({
    items: [
      <?php foreach($result7 as $data7){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data7['image_url'];?>',
        title: '<?php echo $data7['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 8  
$('#pbtn8').magnificPopup({
    items: [
      <?php foreach($result8 as $data8){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data8['image_url'];?>',
        title: '<?php echo $data8['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 9  
$('#pbtn9').magnificPopup({
    items: [
      <?php foreach($result9 as $data9){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data9['image_url'];?>',
        title: '<?php echo $data9['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 10  
$('#pbtn10').magnificPopup({
    items: [
      <?php foreach($result10 as $data10){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data10['image_url'];?>',
        title: '<?php echo $data10['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});

    


    
// common imge popup 
$('.imgPopup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
 });

    
});
</script>    

  
<script>

/*
Modernizr.addTest('mix-blend-mode', function(){
    return Modernizr.testProp('mixBlendMode');
});
*/

$(document).ready(function() {
    
    
    $('.lang_selector').on("click", function(){
        $('.lang_menu > ul>.lang_item>a').slideToggle('fast');
        $('.lang_menu > ul .lang_item').css('height','auto');
        $('.lang_selector span').toggleClass('active');
        /*
        $('.lang_menu ul').css('height','auto');*/
        
        $('.lang_menu ul').toggleClass('showhide');
        
    });
	$('.header .hamburger').click(function(event) {
		$('.header .lang_menu').slideToggle();
	});

	$('.header .lang_menu .lang_selector').click(function(event) {
		$(this).toggleClass('active');
		$('.header .lang_menu .lang_submenu').slideToggle();
		return false;
	});
    
    
 if ( $(window).width() < 769 ) {
     $('.menu_content > ul.aconcagua > li > a').click(function(e){
         e.preventDefault();
     })
    $('.menu_content > ul.aconcagua > li',this).click(function() {
        $(this).toggleClass('active');
        $(this).children('ul').stop().slideToggle(300);
    });
    
    console.log(siteid);
    if(siteid == 1){ 
        $('.lang_menu>ul>li:eq(0)>.menu_content').css('display','block');
    }
    else if(siteid == 2){ 
        $('.lang_menu>ul>li:eq(1)>.menu_content').css('display','block');
    }
    else if(siteid == 3){ 
        $('.lang_menu>ul>li:eq(2)>.menu_content').css('display','block');
    }
    else if(siteid == 4){ 
        $('.lang_menu>ul>li:eq(3)>.menu_content').css('display','block');
    }
    else if(siteid == 6){ 
        $('.lang_menu>ul>li:eq(4)>.menu_content').css('display','block');
    }
    else if(siteid == 7){ 
        $('.lang_menu>ul>li:eq(5)>.menu_content').css('display','block');
    }
    else if(siteid == 8){ 
        $('.lang_menu>ul>li:eq(6)>.menu_content').css('display','block');
    }
    else if(siteid == 9){ 
        $('.lang_menu>ul>li:eq(7)>.menu_content').css('display','block');
    }
    else if(siteid == 10){ 
        $('.lang_menu>ul>li:eq(8)>.menu_content').css('display','block');
    }
    
    
    else{
        $('.lang_menu>ul>li:eq(0)>.menu_content').css('display','block');        
    }
    
} // window.width >768
           
	$('.header .lang_menu > ul > li > a').click(function(event) {

		// Remove All Active
		$('.header .lang_menu > ul > li').removeClass('active');

		current_sibling = $(this).siblings('.menu_content');

		if ( current_sibling.is(':visible') )
		{
			$(this).parent('li').removeClass('active');
		}
		else
		{
			$(this).parent('li').addClass('active');
		}

		$('.header .lang_menu > ul > li > .menu_content').not(current_sibling).hide();
		$(current_sibling).slideToggle();
		return false;
	

        
    });
    
/*        // ===== Scroll to Top ==== 
$(window).scroll(function() {
    console.log('asdf');
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
    */
    
jQuery('body').click(function(event){
   // alert('clicked');
  if (jQuery(event.target).closest('.menu_content').length) {
    return;
  } else {
      if (jQuery('.header .lang_menu > ul > li').hasClass('active') )
		{
			jQuery('.header .lang_menu > ul > li').removeClass('active');
            jQuery('.menu_content').slideUp();
		}
  }
});

	/*var md = new MobileDetect(window.navigator.userAgent);

	if ( md.os() == "AndroidOS" && false )
	{
		jQuery('#icon_fixed').fadeIn();
		var wa_android_url = "intent://send/5492616181000#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end";
		jQuery('#wa').attr('href',wa_android_url);

	}
	else if ( md.os() == "iOS" && false )
	{
		jQuery('#icon_fixed').fadeIn();
		var wa_ios_url = "whatsapp://5492615403513";
		jQuery('#wa').attr('href',wa_ios_url);
		
	}*/

});
</script>

<!--
<script src="javascripts/gyro.min.js"></script>-->
<!--
<script>
$(document).ready(function() {

	//
	// Global
	//

	var coef = 0; // Left [-1;1] Right


	//
	// Check Mobile || Tablet
	//

	var md = new MobileDetect(window.navigator.userAgent);

	if ( md.mobile() || md.tablet() )
	{
		accelerometer_init();
	}
	else
	{
		mouse_init();
	}

	//
	// With Accelerometer
	//


	function accelerometer_init()
	{
		$('.layers').addClass('accelerometer');
		
		gyro.frequency = 200;

		if (window.DeviceMotionEvent != undefined ) 
		{
			gyro.startTracking(function(o){
				ax = o.x;
				if ( ax > 2.5 ) ax = 2.5;
				if ( ax < -2.5 ) ax = -2.5;
				ax = ax/5*2;
				animate_layers(ax);
				$(".accelerationX").html(ax);
			});

		}
	}

	//
	// With Mouse
	//

	function mouse_init()
	{
		// Get Window Width

		var window_x = $(window).width();

		$(window).on('resize', function() {
			window_x = $(window).width();
		});

		// Mouse Move

		var cursor_x = 0;

		$(window).mousemove(function(event) {
			gyro.stopTracking();
			$('body').removeClass('accelerometer');
			var cursor_x = event.clientX;
			var coef = (cursor_x/window_x - 0.5) * 2;
			animate_layers(coef);
		});

	}


	// 
	// Animation
	// 

	function animate_layers(coef)
	{
		// Layer 1
		// Clouds
		coef_1 = -coef;
		coef_1 = coef_1*5 - 5;
		// Reduce
		coef_1 = coef_1*1;
		coef_1 = coef_1 + "%";
		// Animation
		jQuery('.layers .layer_1 .image').css({left : coef_1 });

		// Layer 2
		coef_2 = coef;
		coef_2 = coef_2*5 - 5;
		coef_2 = coef_2/5*7;
		// Reduce
		coef_2 = coef_2*0.025;
		coef_2 = coef_2 + "%";
		jQuery('.layers .layer_2 .image').css({left : coef_2 });

		// Layer 3
		coef_3 = -coef;
		coef_3 = coef_3*5 - 5;
		coef_3 = coef_3/5*9;
		coef_3 = coef_3*0.2;
		coef_3 = coef_3 + "%";
		jQuery('.layers .layer_3 .image').css({left : coef_3 });

	}

});
</script>
-->

<?php wp_footer(); ?>
</body>
</html>
