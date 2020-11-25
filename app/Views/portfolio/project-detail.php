<?php //echo '<pre>';print_r($project_data);die;?>
<div class="slideshow" id="slideshow">
    <ol class="slides">
        <li class="current">
            <div class="description">
                <div class="pro-title-bg">
                    <h2><?php echo $project_data['project_point1'];?> </h2>
                    <p><?php echo $project_data['project_point1_description'];?></p>
                    <a href="<?php echo $project_data['project_url'];?>"  target="_blank" class="p-btn pull-right">Launch website<i class="fa fa-chevron-right" style="margin-left:10px; font-size:14px;"></i></a>
                </div>
            </div>
            <div class="tiltview col">
                <a href="http://grovemade.com/">
                        <?php $imagePath="assets/images/portfolio/".strtolower(str_replace(' ','-',$project_data['project_name']));?>
                        <img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image1'];?>"/>
                </a>
            </div>
        </li>
        <li>
            <div class="description">
                <h2><?php echo $project_data['project_point2'];?> </h2>
                <p><?php echo $project_data['project_point2_description'];?></p>
                <a href="<?php echo $project_data['project_url'];?>" class="p-btn pull-left">Launch website<i class="fa fa-chevron-right" style="margin-left:10px; font-size:14px;"></i></a>
            </div>
            <div class="tiltview row">
                <a href="http://pexcil.com/">
                    <div class="ipad-frame">
                        <div class="ipad-frame-inner">
                            <img img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image5'];?>" />
                        </div>
                    </div>
                </a>
                <a href="http://foodsense.is/">
                    <div class="iphone-frame">
                        <div class="iphone-frame-inner">
                            <img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image6'];?>"/>
                        </div>
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div class="description">
                <h2><?php echo $project_data['project_point3'];?> </h2>
                <p><?php echo $project_data['project_point3_description'];?></p>
                <a href="<?php echo $project_data['project_url'];?>" class="p-btn pull-left">Launch website<i class="fa fa-chevron-right" style="margin-left:10px; font-size:14px;"></i></a>
            </div>
            <div class="tiltview col">
                <a href="http://minimalmonkey.com/">
                    <div class="web-frame">
                        <div class="web-dot dot-1"></div>
                        <div class="web-dot dot-2"></div>
                        <div class="web-dot dot-3"></div>
                        <img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image2'];?>"/>
                    </div>
                </a>
            </div>
        </li>
    </ol>
</div>
<section class="next-project-bar margin-t-80" style="margin-bottom:60px;">
    <div class="project-bar-inner">
        <?php
            //echo '<pre>'; print_r($project_data);exit;
            $prev_id = $project_data['project_id'] == 1 ? count($all_project_data):$project_data['project_id']-1;
            $next_id = $project_data['project_id'] == count($all_project_data) ? 1:$project_data['project_id']+1;
            ?>
        <?php if(isset($project_neighbour['prev'])) {?>
        <a href="<?php echo site_url('portfolio/project/'.$project_neighbour['prev']['project_slug']);?>" class="pull-left previous-project"><span><?php echo $project_neighbour['prev']['project_slug'];?></span></a>
        <?php } ?>
        <?php if(isset($project_neighbour['next'])) {?>
        <a href="<?php echo site_url('portfolio/project/'.$project_neighbour['next']['project_slug']);?>" class="pull-right next-project"><span><?php echo $project_neighbour['next']['project_slug'];?></span></a>
        <?php } ?>
    </div>
</section>
<section class="product-section section-space">
    <div class="product-container" >
        <div class="p-text-block-center">
            <h3 class="p-heading"><?php echo $project_data['project_heading1'];?></h3>
            <P class="p-text"><?php echo  $project_data['project_description1'];?></P>
        </div>
    </div>
</section>
<section class="product-section section-space scrollme product-desc-sec">
    <div class="product-container">
        <div class="product-block-text pull-left animateme" data-translatex="-100" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
            <div class="txt-left">
                <h3 ><?php echo $project_data['project_heading2'];?></h3>
                <P class="p-text"><?php echo  $project_data['project_description2'];?></P>
            </div>
        </div>
        <div class="product-block-img pull-right animateme" data-translatex="400" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
                <?php $imagePath="assets/images/portfolio/".strtolower(str_replace(' ','-',$project_data['project_name']));?>
                <img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image3'];?>" title="" alt="">
        </div>
    </div>
</section>
<section class="product-section section-space scrollme next-sec" style="text-align:center; padding:30px 0;">
    <div class="product-container animateme" data-translatey="-100" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
        <h3 class="p-heading"><?php echo $project_data['project_heading3'];?></h3>
    </div>
</section>
<section class="product-section scrollme next-to-next">
    <div class="product-container">
        <div class="product-block-img  p-leftslider-img animateme" data-translatex="-400" data-opacity="0" data-to="0" data-from="0.75" data-when="enter" >
            <div class="leftslider-img-block">
                <img src="<?php echo base_url().'/'.$imagePath.'/'.$project_data['image4'];?>" title="" alt="">
            </div>
        </div>
        <div class="product-block-text pull-right animateme" data-translatex="100" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
            <div class="txt-left">
                <h3 class="p-heading"><?php echo $project_data['project_heading4'];?></h3>
                <P class="p-text"><?php echo  $project_data['project_description3'];?></P>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br>
<!-- <section class="p-feature-section scrollme">
    <div class="feature-container">
        <div class="product-block-text p-feature-left animateme" data-translatey="300" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
            <h3 class="p-heading ">Features</h3>
        </div>
        <div class="p-feature-right animateme"  data-translatey="300" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
            <P id="features">
                <?php echo $project_data['features'];?>
            </P>
        </div>
    </div>
</section>

<section class="p-info-section scrollme">
    <div class="product-container">
        <div class="p-info-row">
            <div style="float:left; width:75%; margin-bottom:20px; display:inline-block;">
                <div class="p-col-1 pull-left">
                    <div class="p-col-2 pull-left">
                        <h3 class="col-heading txt-upper">COMPANY</h3>
                        <P><?php echo $project_data['project_company_name'];?></P>
                    </div>
                    <div class="p-col-2 pull-left">
                        <h3 class="col-heading txt-upper">SERVICES PROVIDED</h3>
                        <P><?php echo $project_data['project_service'];?></P>
                    </div>
                </div>
                <div class="p-col-1 pull-left">
                    <div class="p-col-2 pull-left">
                        <h3 class="col-heading txt-upper">SHARE</h3>
                        <ul class="p-share">
                            <li><a href="https://www.facebook.com/manifestinfotech" target="_blank" Title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/ManifestInfotec" target="_blank" Title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/+Manifestinfotech/about" target="_blank" Title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.linkedin.com/pub/manifest-infotech/6a/974/601" target="_blank" Title="Linkedin"><i class="fa  fa-linkedin"></i></a></li>
                            <li><a href="https://www.pinterest.com/archananchoukse/" target="_blank" Title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <P>
                            <a href="<?php echo $project_data['project_url'];?>" target="_blank" style="margin-top:10px;" class="p-btn pull-left">Launch website<i class="fa fa-chevron-right" style="margin-left:10px; font-size:14px;"></i></a>
                        </P>
                    </div>
                    <div class="p-col-2 pull-left">
                        <h3 class="col-heading txt-upper">TOOLS USED</h3>
                        <P><?php echo $project_data['project_technologies'];?></P>
                    </div>
                </div>
            </div>
            <div class="p-col-3 pull-right">
                <h3 class="col-heading txt-upper">Category</h3>
                <ul class="category-list">
                    <?php foreach($all_category_data as $category)
                        {
                        ?>
                    <li>
                        <a href="<?php echo site_url('portfolio/category/'.$category['category_id']);?>"><?php echo $category['category'];?></a>
                    </li>
                    <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!--project info section-->
<section class="next-project-bar scrollme">
    <div class="animateme project-bar-inner" data-translatey="0" data-opacity="0" data-to="0" data-from="0.75" data-when="enter">
        <?php
            //echo '<pre>'; print_r($project_data);exit;
            $prev_id = $project_data['project_id'] == 1 ? count($all_project_data):$project_data['project_id']-1;
            $next_id = $project_data['project_id'] == count($all_project_data) ? 1:$project_data['project_id']+1;
            ?>
        <?php if(isset($project_neighbour['prev'])) {?>
        <a href="<?php echo site_url('portfolio/project/'.$project_neighbour['prev']['project_slug']);?>" class="pull-left previous-project"><span><?php echo $project_neighbour['prev']['project_slug'];?></span></a>
        <?php } ?>
        <?php if(isset($project_neighbour['next'])) {?>
        <a href="<?php echo site_url('portfolio/project/'.$project_neighbour['next']['project_slug']);?>" class="pull-right next-project"><span><?php echo $project_neighbour['next']['project_slug'];?></span></a>
        <?php } ?>
    </div>
</section>
<!--next/previous project bar-->
