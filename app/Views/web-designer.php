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
            <h1 class="heading-a border-theme-l"> Career at our Company</h1>
            <!-- <img src="assets/images/career/webdesiner.jpg" class="shadow-block" title="Career at our Company" />
            <div class="spacer-mini2"></div> -->
            <ul class="bullet_process justify border_box">
               <li class="bgcolor_jo">Job Summary</li>
               <!-- <li><strong>Functional area -</strong> IT/ Web programming</li>
               <li>Industry -</strong> Computer/ IT</li>
               <li><strong>Role Category -</strong> Web designer/ XHTML/CSS3<li>
               <li><strong>Vacancy -</strong> 2</li>
               <li><strong>Job Location -</strong> 105, Prakash Tower, Rani Sati Gate, YN Road Indore </li>
               <li><strong>Job details -</strong></li>
               <li>Candidate has experience of more than 1yr for the post of web designer </li>
               <li>Strong conceptual thinking with great attention to detail</li>
               <li>Ability to work on multiple projects under tight deadlines with solid organizational and time management skills </li>
               <li><strong>Skills Needed -</strong> fireworks & coreldraw </li> -->

               <table class="table table-borderless job-summery-table">
                  <tbody>
                     <tr>
                        <th class="job-para" width="20%">Functional area</th>
                        <td width="80%">IT/ Web programming</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Industry</th>
                        <td width="80%">Computer/ IT</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Role Category</th>
                        <td width="80%">Web designer/ XHTML/CSS3</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Vacancy</th>
                        <td width="80%">2</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Job Location</th>
                        <td width="80%">105, Prakash Tower, Rani Sati Gate, YN Road Indore</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Job details</th>
                        <td width="80%"><i class="fa fa-circle-o"></i>&nbsp; Candidate has experience of more than 1yr for the post of web designer. 
                           <br/><i class="fa fa-circle-o"></i>&nbsp; Strong conceptual thinking with great attention to detail.<br/><i class="fa fa-circle-o"></i>&nbsp; Ability to work on multiple projects under tight deadlines with solid <br/>&nbsp;&nbsp;&nbsp; organizational and time management skills.</td>
                     </tr>
                     <tr>
                        <th scope="row" width="20%">Skills Needed</th>
                        <td width="80%">fireworks & coreldraw</td>
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
