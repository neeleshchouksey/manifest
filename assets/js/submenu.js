// JavaScript Document
$(document).ready(function(){
	$('.mobile-menu').click(function(){
            location.href = this.href;
            $("#mobile-social").removeClass('open'); 
			$(".mobile-drop").toggleClass('open'); 
        });
    /*$(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("slow");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                  
        });
		$('.dropdown > a').click(function(){
            location.href = this.href;
			$(this).toggleClass('open'); 
        });
		$('.mobile-menu > a').click(function(){
            location.href = this.href;
			$(this).toggleClass('open'); 
        });*/

});
$(document).ready(function(){
	$('.dropdown-toggle').click(function(){
		location.href = this.href;
		$(".mobile-drop").removeClass('open');
			$("#mobile-social").toggleClass('open'); 
        });
});

$(document).ready(function( ) {
					var offsetHeight =100;
					$('.nav-menu').scrollspy({
					offset: offsetHeight
					});
					$('.nav li a').click(function (event) {
					var scrollPos = $('body > #wrapper').find($(this).attr('href')).offset().top - offsetHeight;
					$('body,html').animate({
					scrollTop: scrollPos
					}, 700, function () {
					//$(".btn-navbar").click();
					});
					return false;
					});
					});
	
$(document).ready(function(){
		$('#banner').simpleSlider({ height: 400});
		});
		
function centerModal()
					{
					$(this).css('display', 'block');
					var $dialog = $(this).find(".modal-dialog");
					var offset = ($(window).height() - $dialog.height()) / 2;
					$dialog.css("margin-top", offset);
					}
					$('.modal').on('show.bs.modal', centerModal);
					$(window).on("resize", function () 
					{
					$('.modal:visible').each(centerModal);
					});

function gallery(){}
					var $itemsHolder = $('ul.thumbnails');
					var $itemsClone = $itemsHolder.clone(); 
					var $filterClass = "";
					$('ul.filter li').click(function(e) {
					e.preventDefault();
					$filterClass = $(this).attr('data-value');
					if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }
					else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
					$itemsHolder.quicksand(
					$filters,
					{ duration: 1000 },
					gallery
					);
					});
					$(document).ready(gallery);
			
$(window).scroll(function(){
					if ($(this).scrollTop() > 50) {
					$('.scrollup').fadeIn('slow');
					} else {
					$('.scrollup').fadeOut('slow');}
					});
					$('.scrollup').click(function()
					{
					$("html, body").animate({ scrollTop: 0 }, 500);
					return false;
					});
			
$(window).scroll(function(){
			if(window.innerWidth >= 1024 ) {
				if ($(this).scrollTop() > 200) {
					$('#upperheader').slideUp('slow');
					$('#navigation').css('height','80px');
					$('#mobile_hide').show('slow');
					$('#desktop-menu').hide('slow');
					$('.p-header').css('top','0');			
					//$(".logo").attr("src", "img/common-img/logo.png");
				}
				else {
					$('#mobile_hide').hide('slow');
					$('#desktop-menu').addClass('.scroll-menu-display');
					$('#desktop-menu').show('slow');
					$('#navigation').css('height','110px');
					//$(".logo").attr("src", "img/common-img/logo.png");				
					$('#upperheader').slideDown('slow');
					$('.p-header').css('top','29px');
					
					}
				}
		});			
			
			
			
