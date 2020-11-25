<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US">
<head>
<link rel="shortcut icon" type="image/ico" href="assets/images/common-img/favicon.ico"/>
<link href="https://plus.google.com/113088163173614486012" rel="publisher" />
<meta charset="utf-8">
<meta name="google-site-verification" content="y-PG92XlhmaCo30eRv7HWY_isSVtDTtsLqTQwzqT-6A" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="application-name" content="Software development company">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php if($description!="")echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="Manifest Infotech Pvt. Ltd.">

<base href="<?php echo base_url();?>">

<!-- CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/box-animation.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css"/>
<link rel="stylesheet" href="assets/css/manifest.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/product-detail.css" />
<link rel="stylesheet" href="assets/icon-font/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/responsive.css"/>
<link rel="stylesheet" href="assets/css/style_common.css"/>
<link rel="stylesheet" href="assets/css/style10.css"/>
<link rel="stylesheet" href="assets/css/simpleslider.css"/>
<link rel="stylesheet" href="assets/css/slider.css"/>
<link rel="stylesheet" href="assets/css/flexslider.css">
<link rel="stylesheet" href="assets/css/submenu.css"/>
<link rel="stylesheet" href="assets/css/custom.css"/>
<link rel="stylesheet" href="assets/css/sky-tabs.css"/>
<!--<link rel="stylesheet" href="assets/css/footernavigation.css">-->
<link rel="stylesheet" href="assets/css/developer.css">
<link rel="stylesheet" href="assets/css/manifest_new.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/css/component_portfolio.css" />
<!-- End CSS Files -->

<script src="assets/js/modernizr.custom_portfolio.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/submenu.js"></script> -->
<script type="text/javascript" src="assets/js/function.js"></script>
<!-- <script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery_003.js"></script> -->
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/jquery.scrollme.min.js"></script>
<script src="assets/js/analytics.js"></script>
<script type="text/javascript">
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 100) {
        $(".second-header").show();
        $(".first-header").hide();
        $(".p-header").css({'background':'rgba(255,555,255,1)','box-shadow':'0 1px 5px rgba(0, 0, 0, 0.5)'});
        $(".first-header").css({'position':'absolute', 'top':'-100px','opacity':'0'});
        $(".second-header").css({'position':'relative', 'top':'0','opacity':'1', 'width':'410px'});
        $(".p-logo").addClass('no-responsive');
        } else {
        $(".first-header").show();
        $(".second-header").hide();
        $(".p-header").css({'background':'rgba(255,255,255,1)','box-shadow':'none'});
        $(".first-header").css({'position':'relative', 'top':'0','opacity':'1'});
        $(".second-header").css({'position':'absolute', 'top':'-100px','opacity':'0'});
        $(".p-logo").removeClass('no-responsive');
     }
    });

    (function($){
      // Menu Functions
      $(document).ready(function(){
      $('.menuToggle').click(function(e){
        var $parent = $(this).parent('.r-slide-bar');
        $parent.toggleClass("open");

        var navState = $parent.hasClass('open') ? "hide" : "show";
        if ($parent.hasClass('open')){
            $('#menuToggle').css('right','105px');
        }
        else{
            $('#menuToggle').css('right','100px');
        }
        $(this).attr("title", navState + " navigation");
          // Set the timeout to the animation length in the CSS.
          setTimeout(function(){
            console.log("timeout set");
            $('.menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
          }, 200);
        e.preventDefault();
      });
      });
    })(jQuery);
</script>
<script>
$( document ).ready(function() {
    var is_mobile = false;
    if( $('.no-responsive').css('display')=='none') {
        is_mobile = true;
    }
    if (is_mobile == true) {

    }
});
</script>
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
	site_url="<?php echo site_url(); ?>";
</script>

<script type="text/javascript">
  var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};
  var d=document;
  s=d.createElement("script"); s.type="text/javascript"; s.defer=true; s.src="https://salesiq.zoho.com/manifestinfotech/float.ls?embedname=manifestinfotech"; t=d.getElementsByTagName("script")[0]; t.parentNode.insertBefore(s,t);
</script>
<script>
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
</script>
<!-- New Portfolio Design -->
<link rel="stylesheet" href="assets/plugin/portfolio/css/layout.css">
<!-- New Portfolio -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugin/portfolio/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
			init: function () {
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'
    		  },
    		  load: {
      		  filter: '.design, .dev, .seo'
      		}
				});
			}
		};
		// Run the show!
		filterList.init();
	});
</script>
<!-- New Portfolio -->
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PTRCDB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PTRCDB');</script>
<!-- End Google Tag Manager -->

<!--facebook share start -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<!--facebook share end-->
<div class="body-page">
<header class="top-fixed" id="navigation">
<div class="container-fluid top-social-block" id="upperheader">
    <div class="container">
        <div class="pagetop visible-tablet visible-desktop">
            <ul class="pull-right">
                <li><a href="JavaScript:void(0)"><i class="fa fa-phone"></i>&nbsp;+91 731 4966337</a></li>
                <li><a href="JavaScript:void(0)"><i class="fa fa-phone"></i>&nbsp;+91 7771983222</a></li>
                <!-- <li><a href="<?php echo site_url('mi/sitemap');?>">Site Map</a></li> -->
                 <li class="hailight"><a id="call-to-action" class="" data-target="#myModal" data-toggle="modal" href="javascript:void(0)">Get a Quote</a>
                </li>
            </ul>
            <ul class="pull-left social-icon">
                <li><a href="mailto:info@manifestinfotech.com"><i class="fa fa-envelope"></i>&nbsp;info@manifestinfotech.com</a></li>

                <!-- <li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa  fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/ManifestInfotec" target="_blank" Title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/pub/manifest-infotech/6a/974/601" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin"></i></a></li>
                <li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest" Title="Pinterest"></i></a></li>
                <li>&nbsp;&nbsp;<div class="fb-like log_foooter" data-href="https://www.facebook.com/manifestinfotech" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li> -->
            </ul>
        </div>
        <!--tablet and desktop view-->
        <div class="dropdown visible-phone" id="mobile-social"><a class="dropdown-toggle"  role="button" data-toggle="dropdown" data-target="javascript: void main(0);" href="javascript:void(0);"> <small>Social</small> <b class="caret"></b> </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="mailto:info@manifestinfotech.com"><i class="fa fa-envelope"></i>&nbsp;info@manifestinfotech.com</a></li>
                <li><a href="JavaScript:void(0)"><i class="fa fa-phone"></i>&nbsp;+91 7771983222</a></li>
                <li class="divider"><a href="JavaScript:void(0)">Site Map</a></li>
                <li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa  fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/ManifestInfotec" target="_blank" Title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/pub/manifest-infotech/6a/974/601" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin"></i></a></li>
                <li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest"  Title="Pinterest"></i></a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="fb-like log_foooter" data-href="https://www.facebook.com/manifestinfotech" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
            </ul>
        </div>
    <!--mobile social block-->
    </div>
</div>
<!--top social icon bar closed-->
<div class="inner navigation fixed-header"></div>
</header>
<section class="p-header">
  <div class="inner navigation fixed-header">
    <div class="p-logo">
        <a class="scroll" id="themify-logo img" href="<?php echo site_url();?>">
          <img src="assets/images/common-img/logo.png" class="logo log_foooter" alt="Manifest Infotech" title="Manifest Infotech">
        </a>
    </div>
    <div class="p-menu-nav first-header no-responsive">
      <ul>
        <!--<li class="navigation_menu"><a class="scroll navi_menu" href="index.php">HOME</a></li>-->
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('aboutus');?>">Overview</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('services');?>">Services</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('solutions');?>">Solutions</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('portfolio');?>">Portfolio</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url();?>blog">Blog</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('mi/testimonial');?>">Testimonial</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('mi/career');?>">Career</a></li>
        <li class="navigation_menu"><a class="scroll navi_menu" href="<?php echo site_url('mi/contact');?>">Contact Us</a></li>
      </ul>
    </div>

    <div class="p-menu-nav second-header">
      <ul>
          <li><a href="<?php echo site_url('portfolio');?>">Portfolio</a></li>
          <li><a href="<?php echo site_url('mi/contact');?>" >Contact Us</a></li>
        <!--<li> <a class="btn-call-action" style="color:#333 !important; border-color:#333;" href="#0"><i class="fa fa-bars"></i></a></li>-->
      </ul>
      <div class="r-slide-bar">
        <a href="" id="menuToggle" class="menuToggle" title="show menu"><span class="navClosed"><i></i></span></a>
       <!-- <a  href="index.php">Home</a>-->
        <a  href="<?php echo site_url('aboutus');?>">OVERVIEW</a>
        <a  href="<?php echo site_url('services');?>">SERVICES</a>
        <a  href="<?php echo site_url('solutions');?>">SOLUTIONS</a>
        <a  href="<?php echo site_url('portfolio');?>">PORTFOLIO</a>
        <a  href="<?php echo site_url();?>blog">BLOG</a>
        <a  href="<?php echo site_url('mi/testimonial');?>">TESTIMONIAL</a>
        <a  href="<?php echo site_url('mi/career');?>">CAREER</a>
        <a  href="<?php echo site_url('mi/contact');?>">CONTACT US</a>
        <hr>
      </div>
    </div>

    <div class="p-menu-nav mobile-view">
        <div class="r-slide-bar">
            <a href="" id="menuToggle" class="menuToggle" title="show menu"><span class="navClosed"><i></i></span></a>
            <!-- <a  href="index.php">Home</a>-->
            <a  href="<?php echo site_url('aboutus');?>">OVERVIEW</a>
            <a  href="<?php echo site_url('services');?>">SERVICES</a>
            <a  href="<?php echo site_url('solutions');?>">SOLUTIONS</a>
            <a  href="<?php echo site_url('portfolio');?>">PORTFOLIO</a>
            <a  href="<?php echo site_url();?>blog">BLOG</a>
            <a  href="<?php echo site_url('mi/testimonial');?>">TESTIMONIAL</a>
            <a  href="<?php echo site_url('mi/career');?>">CAREER</a>
            <a  href="<?php echo site_url('mi/contact');?>">CONTACT US</a>
        </div>
    </div>

  </div>
</section>
