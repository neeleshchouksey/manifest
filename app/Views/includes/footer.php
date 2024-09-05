
<section class="page-section background_color_footer">
<div class="container-fluid">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">

				<div class="span2 footer_grid pull-left">
					<ul class="unstyled">
					  <li class="mar_bootum bac_image2"><h4 class="section-footer-heading">Technologies</h4></li>
						<li><a href="<?php echo base_url('blog/python-technology');?>">Python</a></li>
						<li><a href="<?php echo base_url('blog/php-technology');?>">PHP</a></li>
						<li><a href="<?php echo base_url('blog/asp-net-technology');?>">ASP.Net</a></li>
						<li><a href="<?php echo base_url('blog/android-app-development');?>">Android</a></li>
						<li><a href="<?php echo base_url('blog/ios-app-development');?>">iOS</a></li>
						<li><a href="<?php echo base_url('blog/web-design/');?>">Web Design</a></li>
					</ul>
				</div>

				<div class="span2 footer_grid pull-left">
					<ul class="unstyled">
						<li class="mar_bootum bac_image"><h4 class="section-footer-heading">Open Source</h4></li>
						<li><a href="<?php echo base_url('blog/laravel-web-development-framework');?>">Laravel</a></li>
						<li><a href="<?php echo base_url('blog/codeigniter-web-development-framework');?>">Codeigniter</a></li>
						<!-- <li><a href="<?php echo base_url('blog/yii-development');?>">Yii</a></li> -->
						<li><a href="<?php echo base_url('blog/zend-web-development-framework');?>">Zend</a></li>
						<li><a href="<?php echo base_url('blog/cakephp-web-development-framework');?>">CakePHP</a></li>
						<li><a href="<?php echo base_url('blog/wordpress-cms-customization');?>">Wordpress</a></li>
						<li><a href="<?php echo base_url('blog/drupal-cms-customization');?>">Drupal</a></li>
						
					</ul>
				</div>
				<div class="span2 footer_grid pull-left">
					<ul class="unstyled">
						<li class="mar_bootum bac_image1"><h4 class="section-footer-heading">Strategies</h4></li>
						<li><a href="<?php echo site_url('mi/analysis-and-planning');?>">Analyse & Planning</a></li>
						<li><a href="<?php echo site_url('mi/design-and-html');?>">Design & Html</a></li>
						<li><a href="<?php echo site_url('mi/development-and-implimentation');?>">Development & Implementation</a></li>
						<li><a href="<?php echo site_url('mi/qa-and-deploy');?>">QA & Deploy</a></li>
					</ul>
				</div>
				<div class="span2 footer_grid pull-left">
					<ul class="unstyled font_color">
						<li class="mar_bootum bac_image3"><h4 class="section-footer-heading">Manifest</h4></li>
						<li><a href="<?php echo site_url('aboutus');?>">Overview</a></li>
						<li><a href="<?php echo site_url('mi/process');?>">Process</a></li>
						<li><a href="<?php echo site_url('services');?>">Services</a></li>
						<li><a href="<?php echo site_url('solutions');?>">Solutions</a></li>
						<li><a href="<?php echo site_url('mi/experties');?>">Experties</a></li>

						<!--<li><a href="<?php echo site_url('mi/what-we-do');?>">what we do</a></li>
						<li><a href="<?php echo site_url('mi/offering');?>">offerings</a></li>-->
					</ul>
				</div>
				<div class="span4 footer_grid pull-left" style="width: 380px;">
					<ul class="unstyled font_color">
						<li class="mar_bootum" style="padding: 7px 0px;"><h4>Contact Us</h4></li>
						<li><a href="JavaScript:void(0)"><i class="fa fa-map-marker ic-contact"></i>
						B-319, near Iglookids school, Tulsi Nagar, Indore, M.P., India</a></li>
						
						<li><a href="mailto:info@manifestinfotech.com"><i class="fa fa-envelope ic-contact"></i> nchouksey@manifestinfotech.com, info@manifestinfotech.com</a></li>
						<li><a href="JavaScript:void(0)"><i class="fa fa-phone ic-contact"></i> +91 731 3582993, +91 9111444776 </a></li>
						<!--<li><a href="JavaScript:void(0)"><i class="fa fa-skype ic-contact"></i> live:76bad32bff24d30d</a>-->
						<!--</li>-->
						
						<li>
                          <a href="skype:live:76bad32bff24d30d?chat">
                            <i class="fa fa-skype ic-contact"></i> live:76bad32bff24d30d
                          </a>
                        </li>
						<li>
							<hr>
							<ul class="p-share">
								<li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa fa-facebook footer-social"></i></a></li>
								<li><a href="https://twitter.com/Manifest_info" target="_blank" Title="Twitter"><i class="fa fa-twitter footer-social"></i></a></li>
								<!--<li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus footer-social"></i></a></li>-->
								<li><a href="https://in.linkedin.com/company/manifest-infotech" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin footer-social"></i></a></li>
								<li><a href="https://www.instagram.com/manifestinfotech/" target="_blank" Title="Instagram"><i class="fa  fa-instagram footer-social"></i></a></li>
								<li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest footer-social"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
</div>
<div id="myModal" class="modal fade popup_padding" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" id="toggle" class="close cutumize_close" data-dismiss="modal" aria-hidden="true"> &times; </button>
    <div class="span6 padd_top_action">
        <div class="page-heading margin-bottom-20">
            <h3 class="">Send Us Message !</h3>
        </div>
        <!-- <div class="spacer-mini"> -->
			<p id="popupsuccessmsg" class="successmsg"></p>
		<!-- </div> -->
        <form class="">
            <div class="controls controls-row">
                <input type="text" name='fname' id='fullname' onBlur='checkFnameValidation("fullname",1)' class="span3" placeholder="Full Name">
                <input type="text" name='mail' id='email' value='' onBlur='checkEmailValidation("email",1)' class="span3" placeholder="Email Address">
                <input type="text" name='phone' id='telphone' onBlur='checkPhoneValidation("telphone",1)' class="span3 " placeholder="Phone Number">
                <input type="text" name='subject' id='subject' class="span3" placeholder="Subject">
            </div>
            <div class="controls">
                <textarea id="message" name="msg" class="span6 colr_chage_all_field no_resize no_resize" placeholder="Your Message" rows="5"></textarea>
            </div>
            <div class="controls">
                <button id="contact-submit" onclick="send_msg('fullname','email','telphone','subject','message',1,'popupsuccessmsg')" type="button" class="color_back_button btn   pull-right">Send Now</button>
                <button id="loading-btn" type="button" class="color_back_button btn pull-right d-none" disabled>Loading...</button>
            </div>
        </form>
    </div>
</div>

<section class="contacts"> </section>
<section class="p-footer scrollme">
	<div class="product-container animateme" data-translatey="-500" data-to="0" data-from="1" data-when="enter">
		<!-- <div class="p-info-row">
			<h3 class="p-heading" style="text-align:center;">Contact Us</h3>
		</div>
		<div class="p-info-row">
		<div class="p-contact-info">
			<ul>
				<li class="align-center"><a href="mailto:info@manifestinfotech.com"><i class="fa fa-envelope ic-contact"></i>info@manifestinfotech.com </a></li>
				<li class="align-center"><a href="JavaScript:void(0)"><i class="fa fa-phone ic-contact"></i>+91 9111444776</a></li>
				<li class="align-center"><a href="<?php echo site_url('mi/sitemap');?>"><i class="fa fa-map-marker ic-contact"></i> Site Map</a></li>
            </ul>
		</div>
		</div>
		<div class="p-info-row">
			<div class="p-contact-info">
				<ul class="p-share">
					<li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa fa-facebook footer-social"></i></a></li>
					<li><a href="https://twitter.com/ManifestInfotec" target="_blank" Title="Twitter"><i class="fa fa-twitter footer-social"></i></a></li>
					<li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus footer-social"></i></a></li>
					<li><a href="https://www.linkedin.com/pub/manifest-infotech/6a/974/601" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin footer-social"></i></a></li>
					<li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest footer-social"></i></a></li>
				</ul>
			</div>
		</div> -->
		<div class="p-info-row">
			<div class="p-contact-info">
				<p class="p-copyright"><span class="display-res">© 2023 Manifest Infotech Pvt. Ltd.</span> <span class="divider display-none">|</span> <span class="display-res">All rights reserved.</p>
			</div>
		</div>
	</div>
</section>

<!--wrapper closed here-->
<!-- <div ><a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a> </div> -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.quicksand.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/submenu.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery_003.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>/assets/js/classie.js"></script>
<script src="<?php echo base_url();?>/assets/js/jQuery.scrollSpeed.js"></script>

<script>
$(function() {
    jQuery.scrollSpeed(100, 800);
});
</script>
<!-- <script src="assets/js/tiltSlider.js"></script> -->
<script>
new TiltSlider( document.getElementById( 'slideshow' ) );
</script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
<script>
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
</script>
<!---map api script-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAo1Fedo-w_WP4ie4kAu3DdKacKFe_jOyY&amp;sensor=false"></script>
<script>
var myCenter=new google.maps.LatLng(22.727009,75.880990);

function initialize()
{
	var mapProp = {
	center:myCenter,
	zoom:10,
	scrollwheel:false,

	mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });
	marker.setMap(map);
	var infowindow = new google.maps.InfoWindow({
	content:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4>Manifest Infotech</h4>'+
      '<div id="bodyContent">'+
      '<p><b>Address</b>105 Prakash Tower,YN Road Near <br /> Rani Sati Gate, Indore, INDIA</p>'+
	  '<p><b>Office</b> (+91)7771983222</p>'+
      '</div>'+
      '</div>'
  });
	infowindow.open(map,marker);
	google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
});

}
google.maps.event.addDomListener(window, 'load', initialize);
//window.onload = loadScript;
</script>
<style>
    .left-float{
         right: auto !important;
         left: 0 !important;
    }
    .d-none{
        display:none !important;
    }
    #loading-btn{
        margin-top:9px;
    }
</style>
<script>
 $(window).scroll(function(){

        if ($(this).scrollTop() > 50) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
</script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58518073-1', 'auto');
  ga('send', 'pageview');
  
  function send_msg(e,r,a,l,t,s,o){
      console.log("calling contact")

	$("#"+o).text("");
	var n=checkFnameValidation(e,s);
	var c=checkEmailValidation(r,s);
	var d=checkPhoneValidation(a,s);
	var i=$.trim($("#"+l).val());
	var h=$.trim($("#"+t).val());
	console.log(n,c,d,i,h)
	if(n==0&&c==0&&d==0){
    	$("#contact-submit").addClass('d-none');
    	$("#loading-btn").removeClass('d-none');
	    console.log("in if");
	    var data="fname="+fname+"&email="+email+"&phone="+phone+"&subject="+i+"&msg="+h;
    	$.ajax({
    		type:"POST",
    		url:site_url+"/mi/emailsender",
    		data:data,
    		success:function(s){
    			$("#popupsuccessmsg").css("display","block");
            	$("#contact-submit").removeClass('d-none');
            	$("#loading-btn").addClass('d-none');
    			$("#"+e).val("");
    			$("#"+r).val("");
    			$("#"+a).val("");
    			$("#"+l).val("");
    			$("#"+t).val("");
    			$("#"+o).text(s);
    			setTimeout(function(){
    				$("#"+o).css("display","none")},5000),
    				"popupsuccessmsg"==o&&setTimeout(function(){
    					$("#toggle").trigger("click")},5000)
    				}
    			})
    	}else{
    	    console.log("in else");
        $("#contact-submit").removeClass('d-none');
    	$("#loading-btn").addClass('d-none');
    	}
	}
	
	function checkPhoneValidation(e,r)
	{
		$("#"+e).css("border",""),strRegExp="[^0-9]";
		var a=$.trim($("#"+e).val());
		return this.phone=a,0==a.length?($("#"+e).attr("placeholder","Phone Number"),0):10==a.length?(charpos=a.search(strRegExp),charpos>=0?($("#"+e).css("border",r+"px solid red"),$("#"+e).attr("placeholder","Invalid phone no."),err1=1):0):($("#"+e).css("border",r+"px solid red"),$("#"+e).val(""),$("#"+e).attr("placeholder","Invalid phone no."),err1=1)
	}
	function checkEmailValidation(e,r){
		$("#"+e).css("border","");
		var a=$.trim($("#"+e).val());
		this.email=a;
		var l=a.indexOf("@"),t=a.lastIndexOf(".");
		return a.length<=0?($("#"+e).css("border",r+"px solid red"),$("#"+e).attr("placeholder","Please enter email."),err1=1):1>l||l+2>t||t+2>=a.length?($("#"+e).css("border",r+"px solid red"),$("#"+e).val(""),$("#"+e).attr("placeholder","Invalid email."),err1=1):0
	}

	function checkFnameValidation(e,r){
		$("#"+e).css("border",""),strRegExp="[^A-Za-z ]";
		var a=$.trim($("#"+e).val());
		return this.fname=a,a.length>=3?(charpos=a.search(strRegExp),charpos>=0?($("#"+e).css("border",r+"px solid red"),$("#"+e).addClass("intro"),$("#"+e).val(""),$("#"+e).attr("placeholder","Only alphabets are allow"),err1=1):0):0==a.length?($("#"+e).css("border",r+"px solid red"),$("#"+e).val(""),$("#"+e).attr("placeholder","Please enter name"),err1=1):(charpos=a.search(strRegExp),charpos>=0?($("#"+e).css("border",r+"px solid red"),$("#"+e).addClass("intro"),$("#"+e).val(""),$("#"+e).attr("placeholder","Only alphabets are allow"),err1=1):($("#"+e).css("border",r+"px solid red"),$("#"+e).val(""),$("#"+e).attr("placeholder","Enter atleast 3 characters."),err1=1))
	}
</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-827e131f-f731-4fa1-b263-aa482a662d27"></div>
</body>
</html>
