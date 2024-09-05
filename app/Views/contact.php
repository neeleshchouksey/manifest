<script>
    if("<?php echo $title; ?>"=="Contact | Manifest Infotech")
    {
    	$('#contact-us a').css('background-color','#056ab2');
    	$('#contact-us a').css('color','#FFF');
    }
</script>
<section class="page-cover About-cover-img">
    <div class="container-fluid">
        <div class="container">
            <div class="page-heading">
                <h3>CONTACT US</h3>
                <h4>Keep In Touch</h4>
                <p>Get in touch with Manifest Infotech with all your queries, Our team will get back to you with 6 hrs of turnaround time :)</p>
            </div>
        </div>
    </div>
</section>
<section id="contact-home" class="page-section">
    <div class="container margin-t-50">
        <div class="<?php echo ($mobile == 4)? 'row-fluid':'row'?>">
            <div class="col-md-8 address-col-1">
                <div class="span4">
                    <h3> INDORE</h3>
                    <address>
                        B-319, near Iglookids school<br>
                        Tulsi Nagar, Indore, M.P.<br>
                        India
                    </address>
                </div>
    			<div class="span4">
                    <h3> DELHI</h3>
                    <address>
    					​Corp. Office – Plot No 429, <br>Metro Pillor No-795
    					Dwarka Mor Metro Station, <br>New Delhi-110078, India
                    </address>
                </div>
    			<div class="span4">
                    <h3> CANADA</h3>
                    <address>
    					3295 University Heights Blvd
    					Peterborough, <br>ON
    					Canada<br>
    					K9L 1T3
                    </address>
                </div>
            </div>
            <div class="col-md-4 address-col-2">
                <h3>Contact Information</h3>
                <address>
                    <span><i class="fa fa-phone"></i> &nbsp;+91 9111444776</span>
                    <span><i class="fa fa-skype"></i> &nbsp;live:76bad32bff24d30d</span>
                    <span><i class="fa fa-envelope"></i> &nbsp;nchouksey@manifestinfotech.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@manifestinfotech.com</span>
                </address>

                <h3>Stay Touch</h3>
                <address>
                    <ul class="stay-touch">
                        <li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa  fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/Manifest_info" target="_blank" Title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <!--<li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus"></i></a></li>-->
                        <li><a href="https://www.linkedin.com/company/manifestinfotech" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/manifestinfotech/" target="_blank" Title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest" Title="Pinterest"></i></a></li>
                    </ul>
                </address>
            </div>
        </div>
    </div>

    <div class="container-fluid contact-container">
        <div class="row-fluid">
            <div class="col-md-6 send-message-bg" id="send-magssage">
                <div class="contact1">
                    <div class="spacer-mini2"></div>
                    <div class="page-heading">
                        <h3 class="theme-txt-w">Send Us Message !</h3>
                    </div>
                    <div class="spacer-mini"></div>
                    <div class="row send-message">
                        <div class="span6 margin-null manifestform">
                            <input type="text" name='fname' id='fname' onBlur='checkFnameValidation("fname",2)' class="input-block-level" placeholder="Full Name (Only alphabets are allow)">
                        </div>
                        <div class="span6 manifestform">
                            <input type="text" name='mail' id='mail' value='' onBlur='checkEmailValidation("mail",2)' class="input-block-level" placeholder="Email Address">
                        </div>
                        <div class="span6 margin-null manifestform">
                            <input type="text" name='phone' id='phone' onBlur='checkPhoneValidation("phone",2)' class="input-block-level" placeholder="Phone Number ( blank or numeric )">
                        </div>
                        <div class="span6 manifestform">
                            <input type="text" name='subject' id='sub-ject' class="input-block-level" placeholder="Subject">
                        </div>
                    </div>
                    <div class="row custome-msg">
                        <div class="span12">
                            <textarea name='msg' id='msg' class="input-block-level custome-textarea"  rows="3"  placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row"> <a href="javascript:void(0)" onclick="send_msg('fname','mail','phone','sub-ject','msg',2,'successmsg')" class="btn-light pull-right">Send Now</a> </div>
                </div>
            </div>
            <div class="col-md-6 contact-map">
                 <div id="googleMap" class="map-home"></div>
            </div>
        </div>
    </div>
</section>
