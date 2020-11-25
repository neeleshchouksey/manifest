<script>
	$('#portfolio a').css('background-color','#056ab2');
	$('#portfolio a').css('color','#FFF');
</script>

<section class="container-fluid page-cover portfolio-cover-img">
  <div class="container-fluid">
    <div class="container">
      <div class="page-heading">
        <h3><?php echo $category_data['category'];?> Portfolio</h3>
        <h4>We are Glaring and Prominent in our work</h4>
        <p> We showcase our work which are done with full dedication and hardwork. Our designer team make an effort to show our portfolio better than the best </p>
      </div>
    </div>
  </div>
</section>
<!--/page cover & testimonail section--> 
<!--Web design Start-->
<section class="page-section theme-bg-gray">
  <div class="container-fluid">
    <div class="container">
      <h4 class="doc_diman"><?php echo $category_data['category'];?></h4>
      <div class="container">
        <div class="span8 pull-left costumize_max_width">
          <div class="pagination portfolio-type"> </div>
          <ul class="thumbnails">
          <?php foreach($all_project_data as $project)
		  {
			$dashedProjectName = strtolower(str_replace(' ','-',$project['project_name']));
			$thumbPath="assets/images/portfolio/".$dashedProjectName;

		  ?>
            <li data-type="design" data-id="1" class="span4 view view-tenth"> <img src="<?php echo $thumbPath.'/'.$project['thumb'];?>"  alt="web desing">
              <div class="mask">
                <h2><?php echo strtoupper($project['project_name']);?></h2>
                <p> An app that allow patient to get appointment, take prescription, and pay online fee to the doctors. </p>
                <a href="<?php echo site_url('portfolio/project/'.$project['project_id'].'/'.$dashedProjectName);?>" class="btn-light">More</a> </div>
            </li>
		  <?php
		  }
		  ?>

          </ul>
        </div>
        
        <!--portfolio-detail-categories start -->
		<?php include "portfolio-detail-categories.php"; ?>
		<!--portfolio-detail-categories end -->

		<!--Recent Posts start -->
		<?php include "recent-post.php"; ?>
		<!--Recent Posts end -->

      </div>
    </div>
  </div>
  </div>
</section>
