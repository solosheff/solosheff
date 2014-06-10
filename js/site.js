$(document).ready(function() {

/*----------------------------------

Responsive Functions

----------------------------------*/

	$(window).resize(function(){
		if (
			//Resizing to Home Page Tablet View
			$(window).width() <= 1090 && $('#websites').css('display') == 'none') {
				$('#content > nav').width(300);
			} else if ($(window).width() > 1090 && $('#websites').css('display') == 'none') {
				$('#content > nav').width(480);
			}
	});

	$(window).resize(function(){
			//Resizing to DYNN Tablet View
		if ( $(window).width() <= 1090 && $('#screenshots').css('left') == '-927px' ) {
				$('#screenshots').css({'left': '-516px'});
			} else if ( $(window).width() > 1090 && $('#screenshots').css('left') == '-516px' ) {
				$('#screenshots').css({'left': '-927px'});
			}
	});

	$(window).resize(function(){
			//Resizing to Skate Shop Swap Tablet View
		if ( $(window).width() <= 1090 && $('#screenshots').css('left') == '-1859px' ) {
				$('#screenshots').css({'left': '-1038px'});
			} else if ( $(window).width() > 1090 && $('#screenshots').css('left') == '-1038px' ) {
				$('#screenshots').css({'left': '-1859px'});
			}
	});

/*----------------------------------

Site Navigation

----------------------------------*/

//------Web Design Link 
		$('#web').click( function() {
			$('#main_Container').animate( { marginTop: '-225px'}, 700, "easeInOutCubic" );
			$('#content > nav').animate( { width: '170px', height: '450px'}, 700, "easeInOutCubic" );
			$('#logo').fadeOut(700, "easeInOutCubic", function() {

				$('#contact_info').fadeOut(700, "easeInOutCubic", function() {
					// Display Websites 
					$('#websites').css( { display: "inline-block"} );
					$('#websites').animate( { opacity: 1}, 500, "easeInOutCubic", function() {
						// Display Website Descriptions 
						$('footer').fadeIn(500, function() {
							if ( $('#screenshots').css('left') =="0px" && $('#websites').css('display') != "none") {
								$('#tms_desc').fadeIn(500);
							}
						});
					});				
				});
			});
		});

			// Web Design Navigation
			$('#tms').click( function() { 
				$('#screenshots').animate( { left: '0px' }, 700, "easeInOutCubic");
				$('#tms_desc').fadeIn(500);
				$('#dynn_desc').fadeOut(500);
				$('#sss_desc').fadeOut(500);
			});
			
			// DYNN
			$('#dynn').click( function() { 
				if ($('.tablet').css("display") == 'inline-block') {
					$('#screenshots').animate( { left: '-516px' }, 700, "easeInOutCubic");
				} else {
					$('#screenshots').animate( { left: '-927px' }, 700, "easeInOutCubic");
				}
				$('#dynn_desc').fadeIn(500);
				$('#tms_desc').fadeOut(500);
				$('#sss_desc').fadeOut(500);
			});

			// Skate Shop Swap
			$('#sss').click( function() { 
				if ($('.tablet').css("display") == 'inline-block') {
					$('#screenshots').animate( { left: '-1038px' }, 700, "easeInOutCubic");
				} else {
					$('#screenshots').animate( { left: '-1859px' }, 700, "easeInOutCubic");
				}
				$('#sss_desc').fadeIn(500);
				$('#dynn_desc').fadeOut(500);
				$('#tms_desc').fadeOut(500);
			});

/*------Contact Link 
		$('#contact').click( function() {
			$('footer').fadeOut(500);
			$('#websites').fadeOut(500, "easeInOutCubic", function() {
				$('#websites').css( { opacity: 0} );
				$('#logo').fadeOut(300, "easeInOutCubic", function() {
					$('#contact_info').css( { display: "inline-block"} );
					$('#contact_info').animate( {opacity: 1}, 500, "easeInOutCubic");
				});		
			});
		});*/

//------Contact 
		$('#contact').click( function() {
			$('footer').fadeOut(500);
			$('#websites').fadeOut(500, "easeInOutCubic", function() {
				$('#websites').css( { opacity: 0} );
				$('#main_Container').animate( { marginTop: '-94px'}, 700, "easeInOutCubic" );
				if ($('#content').css("width") == '710px' || $(window).width() <= 1090) {
					$('#content > nav').animate( { width: '300px', height: '162px'}, 700, "easeInOutCubic" );
				} else {
					$('#content > nav').animate( { width: '480px', height: '162px'}, 700, "easeInOutCubic" );
				}
				$('#logo').fadeOut(500, "easeInOutCubic", function() {
					$('#contact_info').css( {display: 'inline-block'});
					$('#contact_info').animate( {opacity: 1}, 500);
				});
			});		
		});

//------Home Link 
		$('#home').click( function() {
			$('footer').fadeOut(500);
			$('#websites').fadeOut(500, "easeInOutCubic", function() {
				$('#websites').css( { opacity: 0} );
				$('#main_Container').animate( { marginTop: '-94px'}, 700, "easeInOutCubic" );
				if ($('#content').css("width") == '710px' || $(window).width() <= 1090) {
					$('#content > nav').animate( { width: '300px', height: '162px'}, 700, "easeInOutCubic" );
				} else {
					$('#content > nav').animate( { width: '480px', height: '162px'}, 700, "easeInOutCubic" );
				}
				$('#contact_info').fadeOut(500, "easeInOutCubic", function() {
					$('#contact_info').css( {opacity: 0});
					$('#logo').fadeIn(500, "easeInOutCubic");
				});
			});		
		});

});
