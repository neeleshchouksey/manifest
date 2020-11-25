<script>
    $('#mi-home a').css('background-color','#056ab2');
    $('#mi-home a').css('color','#FFF');
</script>
<section id="home" class="home-slider">
    <div id="wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="simpleSlider">
                    <div id="banner">
                        <section id="first-slide">
                            <div class="mainSlider" rel="one">
                                <div class="sliderItem"> <a href="<?php echo site_url('services/web-design');?>"><img src="assets/images/home-slider-img/web-design.png" rel="one" class="monitor" alt="Web Design"></a></div>
                            </div>
                            <div class="subSlider">
                                <div  class="sliderItem">
                                    <h3 class="envatoHeader animate0 rollOut"> Web Design </h3>
                                    <p class="envatoText animate1 rollOut"> Great design is all about making other person feel good and impressive </p>
                                    <p class="envatoText animate1 rollOut"><a href="<?php echo site_url('services/web-design');?>" class="btn-light btn-large"> More<i class="fa fa-arrow-right space-l"></i> </a></p>
                                </div>
                            </div>
                        </section>
                        <section id="second-slide">
                            <div class="mainSlider" rel="one">
                                <div class="sliderItem"> <a href="<?php echo site_url('services/web-development');?>"><img src="assets/images/home-slider-img/web-development.png" rel="one" class="monitor" alt="Web Development"></a></div>
                            </div>
                            <div class="subSlider">
                                <div class="sliderItem">
                                    <h3 class="envatoHeader animate0 rollOut"> Web Development</h3>
                                    <p class="envatoText animate1 rollOut"> We are not just build a website we are building dreams </p>
                                    <p class="envatoText animate1 rollOut"><a href="<?php echo site_url('services/web-development');?>" class="btn-light btn-large"> More <i class="fa fa-arrow-right space-l"></i></a></p>
                                </div>
                            </div>
                        </section>
                        <section id="third-slide">
                            <div class="mainSlider" rel="one">
                                <div class="sliderItem"> <a href="<?php echo site_url('services/seo');?>"><img src="assets/images/home-slider-img/monitor.png" rel="one" class="monitor" alt="Search Engine Optimazation"></a></div>
                            </div>
                            <div class="subSlider">
                                <div class="sliderItem">
                                    <h3 class="envatoHeader animate0 rollOut"> SEO </h3>
                                    <p class="envatoText animate1 rollOut"> We convert our visitors into a clients </p>
                                    <p class="envatoText animate1 rollOut"><a href="<?php echo site_url('services/seo');?>" class="btn-light btn-large"> More<i class="fa fa-arrow-right space-l"></i> </a></p>
                                </div>
                            </div>
                        </section>
                        <section id="Fourth-slide">
                            <div class="mainSlider" rel="one">
                                <div class="sliderItem"> <a href="<?php echo site_url('services/digital-marketing');?>"><img src="assets/images/home-slider-img/Digital.fw.png" rel="one" class="monitor" alt="Digital Marketing"></a></div>
                            </div>
                            <div class="subSlider">
                                <div  class="sliderItem">
                                    <h3 class="envatoHeader animate0 rollOut"> Digital Marketing </h3>
                                    <p class="envatoText animate1 rollOut"> It is boundless and vast area for promoting business</p>
                                    <p class="envatoText animate1 rollOut"><a href="<?php echo site_url('services/digital-marketing');?>" class="btn-light btn-large"> More<i class="fa fa-arrow-right space-l"></i> </a></p>
                                </div>
                            </div>
                        </section>
                        <div style="opacity:1;" class="arrowButton">
                            <div class="prevArrow"></div>
                            <div class="nextArrow"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home section closed -->

<section id="opportunity" class="page-section bac_color_career">
    <div class="container-fluid ">
        <div id="curent_oppt"  class="container">
            <h1 class="heading-a border-theme-l">Portfolio</h1>

        </div>
    </div>
</section>
<!-- Portfolio -->
<section id="portfolio-home" class="portfolio-section">
    <div class="container-fluid">
        <div class="container">
            <div class="page-heading">
                <a href="<?php echo site_url('portfolio');?>">
                    <h3>FEATURED PORTFOLIO</h3>
                </a>
                <h4>We are Glaring and Prominent in our work</h4>
                <p> We showcase our work which are done with full dedication and hardwork. Our designer team make an effort to show our portfolio better than the best </p>
            </div>
        </div>
        <!-- page heading closed -->
        <div class="container">
            <div class="pagination portfolio-type">
                <ul class="filter nav nav-pills">
                    <li class="" data-value="all"><a href="javascript:void(0)">All</a></li>
                    <li data-value="1"><a href="javascript:void(0)">Design</a></li>
                    <li data-value="2"><a href="javascript:void(0)">Development</a></li>
                    <li data-value="3"><a href="javascript:void(0)">SEO</a></li>
                    <!-- <li data-value="Digital"><a href="javascript:void(0)">Digital Marketing</a></li>-->
                </ul>
            </div>

            <ul class="thumbnails grid cs-style-1">
                <?php
                $count = 0;
                foreach($all_project_data as $project)
                {
                $count++;
                $dashedProjectName = strtolower(str_replace(' ','-',$project['project_name']));
                $thumbPath="assets/images/portfolio/".$dashedProjectName;
                ?>
                <li data-type="<?php echo $project['category_id'];?>" data-id="<?php echo $count;?>"  class="span4">
                    <figure>
                        <img src="<?php echo $thumbPath.'/'.$project['thumb'];?>" alt="<?php echo strtolower($project['project_name']);?>">
                        <figcaption>
                            <h3><?php echo strtoupper($project['project_name']);?></h3>
                            <span><?php echo $project['project_one_liner'];?></span>
                            <a href="<?php echo site_url('portfolio/project/'.$dashedProjectName);?>">More <i class="fa fa-arrow-right space-l"></i></a>
                        </figcaption>
                    </figure>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<!-- Portfolio -->

<!-- Testimonial carusel start -->
<?php //include 'Testimonials-carousel.php'; ?>
<!-- Testimonial section closed -->
