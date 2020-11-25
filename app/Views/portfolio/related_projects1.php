<section class="page-section">
  <div class="container-fluid">
    <div class="container">
      <div class="page-heading">
        <h3>Featured Projects </h3>
        <h4>We are Glaring and Prominent in our work</h4>
      </div>
      
      <!--page heading-->

					<div id="related-p"  class="well">
						<div id="myCarousel" class="carousel slide hidden-phone">
							<ol class="carousel-indicators">
							<?php
								$count=0;
								$total_projects=count($all_project_data);
								$total_bullets=ceil($total_projects/4);
								for($i=0; $i<$total_bullets;$i++)
								{
									if($i==0)
									echo '<li data-target="#myCarousel" data-slide-to='.$i.' class="active"></li>';
									else
										echo '<li data-target="#myCarousel" data-slide-to='.$i.' ></li>';
								}?>
							</ol>
          
		 
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row-fluid">
                <div class="testimonial-thumb-group">
				  <?php 
				  $count=0;
				  foreach($all_project_data as $project)
				  {
					$thumbPath="assets/images/portfolio/".strtolower(str_replace(' ','-',$project['project_name']));
					$count++;
				  ?>
                  <div class="span3 border"> <a href="<?php echo site_url('portfolio/project/'.$project['project_id']);?>" class="thumbnail shadow">
                    <div class="rp-dec"><?php echo $project['project_name'];?></div>
					<img src="<?php echo $thumbPath.'/'.$project['thumb'];?>" border="0"/></a> 
				  </div>
                  <?php
					if($count%4 == 0)
					{
						echo '</div>
                <div class="spacer-mini2"></div>
              </div> 
            </div>';
						if($count != count($all_project_data))
						{
	   echo '<div class="item">
              <div class="row-fluid">
                <div class="testimonial-thumb-group">';
						}	
					}
					if($count == count($all_project_data))
					{
						echo '</div>
                <div class="spacer-mini2"></div>
              </div> 
            </div>';
					}
				  }	
				  ?>
          </div>  
          <!--/carousel-inner--> 
          <a class="left carousel-control" data-slide="prev" href="#myCarousel"><i class="fa fa-chevron-left"></i></a> <a class="right carousel-control" data-slide="next" href="#myCarousel"><i class="fa fa-chevron-right"></i></a> 
		</div>
        <!--/myCarousel-->
        
        <div id="myCarouselPhone" class="carousel slide visible-phone"> 
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="span3 border"> <a href="JavaScript:Void(0)" class="thumbnail shadow">
                <div class="rp-dec"> Web4 Design</div>
                <img src="assets/images/thumb/webdesign.jpg" border="0"/></a> </div>
            </div>
            <div class="item">
              <div class="span3 border"> <a href="JavaScript:Void(0)" class="thumbnail shadow">
                <div class="rp-dec"> Web Development</div>
                <img src="assets/images/thumb/development.jpg" border="0"/></a> </div>
            </div>
            <div class="item">
              <div class="span3 border"><a href="JavaScript:Void(0)" class="thumbnail shadow">
                <div class="rp-dec"> SEO(Search Engine Optimizations)</div>
                <img src="assets/images/thumb/seo.jpg" border="0"/> </a> </div>
            </div>
            <div class="item">
              <div class="span3 border"><a href="JavaScript:Void(0)" class="thumbnail shadow">
                <div class="rp-dec"> Web Design</div>
                <img src="assets/images/thumb/webdesign.jpg" border="0"/></a> </div>
            </div>
          </div>
          <!--/carousel-inner--> <a class="left carousel-control" href="#myCarouselPhone" data-slide="prev">‹</a> <a class="right carousel-control" href="#myCarouselPhone" data-slide="next">›</a> </div>
        <!--/myCarouselPhone--> 
      </div>
      <!--/well--> 
    </div>
  </div>
</section>