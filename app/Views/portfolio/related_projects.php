<style>
    .demo-2 {
        margin: 0px;
        position: relative;
        width: 100%;
        height: 171px;
        overflow: hidden;
        float: left;
        margin-right: 20px;
        background-color: #e1564c;
    }
    .demo-2 p,
    .demo-2 h2 {
        color: #fff;
        /*padding:10px;
    left:-20px;
    top:20px;*/

        position: relative
    }
    .demo-2 p {
        font-family: 'Lato';
        font-size: 12px;
        line-height: 18px;
        margin: 0
    }
    .demo-2 h2 {
        text-transform: uppercase;
        font-size: 12.5px;
        font-weight: 500;
        line-height: 20px;
        margin: 0;
        padding: 10px!important;
        font-family: inherit;
    }
    .effect img {
        position: absolute;
        left: 0;
        bottom: 0;
        cursor: pointer;
        margin: -12px 0;
        -webkit-transition: bottom .3s ease-in-out;
        -moz-transition: bottom .3s ease-in-out;
        -o-transition: bottom .3s ease-in-out;
        transition: bottom .3s ease-in-out
    }
    .effect img.top:hover {
        bottom: -40px;
        padding-top: 100px
    }
    h2.zero,
    p.zero {
        margin: 0;
        padding: 0
    }
</style>
<section class="page-section feature-section xxx">
    <div class="container-fluid">
        <div class="container">
            <div class="page-heading text-center">
                <h3> Projects </h3>
                <h4 style="color:#fff;">We are Glaring and Prominent in our work</h4>
            </div>

            <!--page heading-->
            <div id="related-p" class="well">
                <div id="myCarousel" class="carousel slide ">
                    <ol class="carousel-indicators">
                        <?php $count=0; $total_projects=count($all_project_data); $total_bullets=ceil($total_projects/4); for($i=0; $i<$total_bullets;$i++) { if($i==0) echo '<li data-target="#myCarousel" data-slide-to='.$i. ' class="active"></li>'; else echo '<li data-target="#myCarousel" data-slide-to='.$i. ' ></li>'; }?>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row-fluid">
                                <div class="testimonial-thumb-group">
                                    <?php $count=0; foreach($all_project_data as $project) { $dashedProjectName=strtolower(str_replace( ' ', '-',$project[ 'project_name']));
                                    $thumbPath=strtolower(str_replace( ' ', '-',$project[ 'project_name'])); $count++; ?>
                                    <div class="col-md-3 border">
                                        <ul class="demo-2 effect">
                                            <li><h2 class="zero"><?php echo $project['project_name'];?></h2></li>
                                            <li>
                                                <a href="<?php echo site_url('portfolio/project/'.$dashedProjectName);?>">
                                                    <img class="top" src="<?php echo base_url();?>/assets/images/portfolio/<?php echo $thumbPath.'/'.$project['thumb'];?>" alt=""/>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                    if($count % $mobile==0 )
                                    {?>
                                </div>
            			    </div>
            			</div>
                        <div class="item">
                            <div class="row-fluid">
                                <div class="testimonial-thumb-group">
                                    <?php } } ?>
                                </div>
                                <div class="spacer-mini2"></div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" data-slide="prev" href="#myCarousel"><i class="fa fa-chevron-left"></i></a> <a class="right carousel-control" data-slide="next" href="#myCarousel"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
