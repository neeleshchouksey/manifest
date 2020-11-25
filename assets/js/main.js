
/*! http://mths.be/placeholder v2.0.6 by @mathias */

$(function(){

//Function for Pages Scroll	
$('.main-nav li a').bind('click',function(event){
	var $anchor = $(this);
	if($(window).width()<=750){
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500);
	
		}
		
		else{
 			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top 
			}, 1500);
			}
	
	
	event.preventDefault();
});	
	
// When ready URL bar hide...
	var iOS = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)/i);
	if(iOS){
		window.addEventListener("load",function() {
			// Set a timeout...
			setTimeout(function(){
				// Hide the address bar!
				window.scrollTo(0, 1);
			}, 10);
			
		});
	}
	//end		
	
	
 	//fixedRatefinder();
	rateFinder();
	userLogin();
	currencyDropdown();
	backToTop();
	servicesDetial();
	headerFixed();
	cuntrySelect();
	mobileMenu();
	
	
	
 	 
});


function backToTop(){
	var windowWidth = $(window).width(),
		windowHeight = $(window).height(),
		winScroll = $(window).scrollTop();
		 $('.back-to-top').click(function(){
			$('body,html').animate({
				scrollTop: 0
			}, 500);
		});
	
}
	
function headerFixed(){
	var windowWidth = $(window).width(),
	windowHeight = $(window).height(),
	winScroll = $(window).scrollTop();
	/*$(window).scroll(function(){
		if ($(this).scrollTop() > windowHeight/5) {
				$('.header-top').slideUp();
 				$('.header-wrap').css({'height':'100px'});
			} else {
 				$('.header-wrap').css({'height':'153px'});
				$('.header-top').slideDown(500);
			}
		});*/
}	
	
//$.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));	
function homepageMenu(){
$(window).scroll(function() {
	 //$('.get-started').slideUp();

	
		var scroll = $(window).scrollTop();
		 
 		var landingtop = parseInt($("#home").offset().top)-200;
		var servicespage = parseInt($("#about").offset().top)+500;
		var promotionpage = parseInt($("#promotionpage").offset().top)-153;
		var whychoodevippage = parseInt($("#whychoodevippage").offset().top)-153;
		var supportpage = parseInt($("#supportpage").offset().top)-153;
   
 	if(scroll>=landingtop && scroll < servicespage){
		$(".main-nav li").removeClass("active"); 
		//$(".main-nav li.srvc").addClass("active");
		$('.get-started').slideDown();
		//$('.back-to-top').fadeIn(50);
 		
   	}
	else if(scroll>=servicespage && scroll < promotionpage){
		$(".main-nav li").removeClass("active"); 
		$(".main-nav li.srvc").addClass("active");
		$('.get-started').slideDown();
		//$('.back-to-top').fadeIn(50);
 		
   	}
	
	
	
	else if(scroll>=promotionpage && scroll<whychoodevippage){
		 $(".main-nav li").removeClass("active");
		 $(".main-nav li.prmo").addClass("active");
		 $('.get-started').slideUp();
		// $('.rate-finder-block').removeClass('fixed');
		// $('.rate-finder-block').fadeOut(50);
		
	}else if(scroll>=whychoodevippage && scroll<supportpage){
		  $(".main-nav li").removeClass("active");
		  $(".main-nav li.whyvip").addClass("active");
		  //$('.rate-finder-block').removeClass('fixed'); 
 		 
	}else if(scroll>=supportpage){
		 $(".main-nav li").removeClass("active");
		   $(".main-nav li.supptp").addClass("active");
		   //$('.rate-finder-block').removeClass('fixed'); 
	 } 
	 
	 else {
		 $('.get-started').slideUp();
		 $('.rate-finder-block').removeClass('fixed'); 
	  }
  });		
	
	
}	
	
 function cuntrySelect(){
  	$('[data-js="selectCuntry"]').bind('click',function(){
	if($(this).next('.search-list').is(':visible')){
		$(this).next('.search-list').slideUp();
	 }
	else{
		$(this).next('.search-list').slideDown();
		}
	});
 	$('[data-js="cuntryList"]  li a').bind('click',function(){
 		var thisHtl = $(this).html();
		
		$(this).parent().parent().prev().html(thisHtl);
	 });
 } 
 
function mobileMenu(){
	$('.mobile-menu, .main-nav-anchor').bind('click',function(){
		if($(window).width() <= 750)
		{
			if($('.main-nav').is(':visible')){
				$('.main-nav').slideUp();
				$(this).removeClass('selected');
				}
			else{
				$('.main-nav').slideDown();
				$(this).addClass('selected');
				}
		}
 	});
}


/*Not Calling For The US*/
function notcallingforus(){
	$('.jratelist').hide();	
	$('.jnotcolling').bind('click', function(){
			if($(this).next('.jratelist').is(':visible')){
				$(this).next('.jratelist').slideUp();
			}
			else{
				$(this).next('.jratelist').slideDown();								 
			}
	 });
}
/*Navigation Panel*/
function panelnavigation(){
	$('.panel-navigation > ul > li > ul').hide();
	$('.panel-navigation > ul > li > a').bind('click',function(){
		if($(this).next('ul').is(':visible')){
			$(this).parent('li').removeClass('selective');
			$(this).next('ul').slideUp('600');
		}
		else{
			$(this).next('ul').slideDown();
			$(this).parent('li').addClass('selective');
		}
		
	});
}

function plcholder(){
	$('input, textarea').placeholder();
}

function bslider(){
	$('.bxslider').bxSlider({
		  mode: 'horizontal',
		 controls: false
	});
}

function displayMainService(){
	$('#serviceList').show('slow');
}

	

	

	
	
	
	
	