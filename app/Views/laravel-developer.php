<style type="text/css">
   .job-summery-table th
   {
      /*color: #2986E2;*/
      color: #056ab2;
      font-weight: normal;
      font-size: 18px;
   }
   .fa-circle-o{
      font-size: 10px;
   }
</style>
<script>
   $('#career a').css('background-color','#056ab2');
   $('#career a').css('color','#FFF');
</script>
<section class="page-cover career-cover-img">
   <div class="container-fluid">
      <div class="container">
         <div class="page-heading">
            <h3>CAREER</h3>
            <h4>We open the door of "HOPE"</h4>
            <p> Our career offerings make the way for the job seekers. Our career plan is to give opportunity for many people to expand our human resource base </p>
         </div>
      </div>
   </div>
</section>
<!--/page cover & career section-->
<section id="career" class="page-section theme-bg-gray">
   <div class="container-fluid">
      <div class="container">
         <div class="span8 pull-left margin-null txt-justify">
            <h1 class="heading-a border-theme-l">Career at Manifest</h1>
            <!-- <img src="assets/images/career/phpdeveloper.jpg" class="shadow-block" title="Career at our Company" />
            <div class="spacer-mini2"></div> -->
            <ul class="bullet_process check_right span border_box justify">
               <li class="bgcolor_jo">Job Summary</li>
               <!-- <li>Functional area - IT/ Web programming</li>
               <li>Industry - Computer/ IT</li>
               <li>Role Category - PHP Developer/Web Developer/PHP/HTML/WordPress/MySQL.</li>
               <li>Vacancy - 2</li>
               <li>Job Location - 105, Prakash Tower, Rani Sati Gate, YN Road Indore</li>
               <li>Job details -</li>
               <li>Candidate should have more than 1 year of experience in PHP development.</li>
               <li>Candidate should have good knowledge of Core PHP</li>
               <li>CodeIgniter, Drupal, Zend or Wordpress would be a plus point</li>
               <li>Skills Needed -</li>
               <li>Core PHP, Codeigniter, Drupal, or Wordpress, HTML, CSS, jQuery, Bootstrap, MVC, Payment Gateways, e-Commerce, Social media integrations etc.</li> -->

               <table class="table table-borderless job-summery-table" >
                  <tbody>
                     <tr>
                        <th scope="row" width="20%">Role</th>
                        <td width="80%">Laravel Developer</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Vacancy</th>
                        <td width="80%">6</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Job Location</th>
                        <td width="80%">Indore</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Job details</th>
                        <td width="80%">
                            <i class="fa fa-circle-o"></i> Develop and maintain web applications using Laravel framework<br/>
                            <i class="fa fa-circle-o"></i> Write clean, well-documented, and efficient code<br/>
                            <i class="fa fa-circle-o"></i> Implement backend functionality and APIs<br/>
                            <i class="fa fa-circle-o"></i> Collaborate with front-end developers to integrate user-facing elements<br/>
                            <i class="fa fa-circle-o"></i> Collaborate with UI/UX designers to implement visually appealing interfaces<br/>
                            <i class="fa fa-circle-o"></i> Troubleshoot and debug application issues<br/>
                            <i class="fa fa-circle-o"></i> Optimize application performance and scalability<br/>
                            <i class="fa fa-circle-o"></i> Stay up-to-date with the latest industry trends and technologies<br/>
                            <i class="fa fa-circle-o"></i> Collaborate with project managers to prioritize tasks and meet project deadlines<br/>
                            <i class="fa fa-circle-o"></i> Assist in defining project requirements and technical specifications
                        </td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Skills Needed</th>
                        <td width="80%">PHP, Laravel framework, MySQL or other relational databases, HTML/CSS, JavaScript, jQuery, AJAX, JSON, RESTful APIs, Git, Docker.</td>
                     </tr>
                  </tbody>
               </table>
            </ul>
         </div>
         <!---/left panel-->
       <?php //include "career-news.php"; ?>
	   <?php include "portfolio/recent-post.php"; ?>
      </div>
   </div>
</section>
<?php include "current-opportunity.php"; ?>
