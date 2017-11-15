Modernizr.addTest('mix-blend-mode', function(){
    return Modernizr.testProp('mixBlendMode');
});

jQuery(document).ready(function($) {

	jQuery('.header .hamburger').click(function(event) {
		jQuery('.header .main_menu').slideToggle();
	});

	jQuery('.header .main_menu .lang_selector').click(function(event) {
		jQuery(this).toggleClass('active');
		jQuery('.header .main_menu .lang_submenu').slideToggle();
		return false;
	});

	jQuery('.header .lang_menu > ul > li > a').click(function(event) {

		// Remove All Active
		jQuery('.header .lang_menu > ul > li').removeClass('active');

		current_sibling = jQuery(this).siblings('.menu_content');

		if ( current_sibling.is(':visible') )
		{
			jQuery(this).parent('li').removeClass('active');
		}
		else
		{
			jQuery(this).parent('li').addClass('active');
		}

		jQuery('.header .lang_menu > ul > li > .menu_content').not(current_sibling).hide();
		jQuery(current_sibling).slideToggle();
		return false;
	});

jQuery('body').click(function(event){
    alert('clicked');
  // check if the clicked element is a descendent of navigation 
  if (jQuery(event.target).closest('.menu_content').length) {
    return; //do nothing if event target is within the navigation
  } else {
  // do something if the event target is outside the navigation
     // code for collapsing menu here...
      alert('asdf');
  }
});
    
	var md = new MobileDetect(window.navigator.userAgent);

	if ( md.os() == "AndroidOS" && false )
	{
		jQuery('#icon_fixed').fadeIn();
		var wa_android_url = "intent://send/5492616181000#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end";
		jQuery('#wa').attr('href',wa_android_url);

	}
	else if ( md.os() == "iOS" && false )
	{
		/*jQuery('#icon_fixed').fadeIn();
		var wa_ios_url = "whatsapp://5492615403513";
		jQuery('#wa').attr('href',wa_ios_url);
		*/
	}
    
    // video js code here 
    
    var vid = document.getElementById("bgvid");
    var pauseButton = document.querySelector("#polina button");

    if (window.matchMedia('(prefers-reduced-motion)').matches) {
        vid.removeAttribute("autoplay");
        vid.pause();
        pauseButton.innerHTML = "Paused";
    }

    function vidFade() {
      vid.classList.add("stopfade");
    }

    vid.addEventListener('ended', function()
    {
    // only functional if "loop" is removed 
    vid.pause();
    // to capture IE10
    vidFade();
    }); 


    pauseButton.addEventListener("click", function() {
      vid.classList.toggle("stopfade");
      if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = "Pause";
      } else {
        vid.pause();
        pauseButton.innerHTML = "Paused";
      }
    })


});