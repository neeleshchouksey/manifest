<script>
	$('#portfolio a').css('background-color','#056ab2');
	$('#portfolio a').css('color','#FFF');
</script>
<section class="container-fluid page-cover portfolio-cover-img">
  <div class="container-fluid">
    <div class="container">
      <div class="page-heading">
        <h3>Featured Portfolio</h3>
        <h4>We are Glaring and Prominent in our work</h4>
        <p> We showcase our work which are done with full dedication and hardwork. Our designer team make an effort to show our portfolio better than the best </p>
      </div>
    </div>
  </div>
</section>
<!--/page cover & testimonail section-->

<section  class="page-section theme-bg-gray">
  <div class="container-fluid">
    <div class="container">
      <div class="page-heading">
      </div>
    </div>
    <!--page heading closed-->
    <div class="container">
      <div class="pagination portfolio-type">
        <ul class="filter nav nav-pills">
          <li class="" data-value="all"><a href="javascript:void(0)">All</a></li>
          <li data-value="1"><a href="javascript:void(0)">Design</a></li>
          <li data-value="2"><a href="javascript:void(0)">Development</a></li>
          <li data-value="3"><a href="javascript:void(0)">SEO</a></li>
         <!-- <li data-value="3"><a href="javascript:void(0)">Digital Marketing</a></li>-->
        </ul>
      </div>

	  <ul class="thumbnails">
		<?php 
    $count = 0;
    foreach($all_project_data as $project)
		{
      $count++;
			$dashedProjectName = strtolower(str_replace(' ','-',$project['project_name']));
			$thumbPath="assets/images/portfolio/".$dashedProjectName;

		?>
        <li data-type="<?php echo $project['category_id'];?>" data-id="<?php echo $count;?>" class="span4 view view-tenth"> 
			<img src="<?php echo $thumbPath.'/'.$project['thumb'];?>"  alt="<?php echo strtolower($project['project_name']);?>">
			<div class="mask">
				<h2><?php echo strtoupper($project['project_name']);?></h2>
				<p> <?php echo $project['project_one_liner'];?> </p>
				<a href="<?php echo site_url('portfolio/project/'.$dashedProjectName);?>" class="btn-light">More<i class="fa fa-arrow-right space-l"></i></a> 
			</div>
        </li>
		<?php
		}
		?>
      </ul>
  </div>
    <!--portfolio style end here--> 
  </div>
</section>

