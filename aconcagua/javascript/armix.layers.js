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