<script>
    $('#portfolio a').css('background-color', '#056ab2');
    $('#portfolio a').css('color', '#FFF');
</script>
<section class="container-fluid page-cover portfolio-cover-img">
    <div class="container-fluid">
        <div class="container">
            <div class="page-heading">
                <h3>Featured Portfolio</h3>
                <h4>We are Glaring and Prominent in our work</h4>
                <p> We showcase our work which are done with full dedication and hardwork. Our designer team make an
                    effort to show our portfolio better than the best </p>
            </div>
        </div>
    </div>
</section>
<!--/page cover & testimonail section-->

<section class="page-section theme-bg-gray">
    <div class="container-fluid">
        <div class="container">
            <div class="page-heading">
            </div>
        </div>
        <!--page heading closed-->
        <div class="container">
            <ul id="filters" class="clearfix">
                <li><span class="filter active" data-filter=".design, .dev, .seo">ALL</span></li>
                <li><span class="filter" data-filter=".design">DESIGN</span></li>
                <li><span class="filter" data-filter=".dev">DEVELOPMENT</span></li>
                <li><span class="filter" data-filter=".seo">SEO</span></li>
            </ul>

            <div id="portfoliolist">
                <?php
                $count = 0;
                foreach ($all_project_data as $project) {
                    $count++;
                    $dashedProjectName = strtolower(str_replace(' ', '-', $project['project_name']));
                    $thumbPath = "assets/images/portfolio/" . $dashedProjectName;
                    $gId = $project['category_id'];
                    ?>
                    <div class="portfolio <?php if ($gId == 1) {
                        echo 'design';
                    } elseif ($gId == 2) {
                        echo 'dev';
                    } else {
                        echo 'seo';
                    } ?>" data-cat="<?php if ($gId == 1) {
                        echo 'design';
                    } elseif ($gId == 2) {
                        echo 'dev';
                    } else {
                        echo 'seo';
                    } ?>">
                        <div class="portfolio-wrapper">
                            <a href="<?php echo site_url('portfolio/project/' . $dashedProjectName); ?>">
                                <img
                                        src="<?php echo base_url().'/'.$thumbPath . '/' . $project['thumb']; ?>"
                                        alt="<?php echo strtolower($project['project_name']); ?>"/></a>
                            <div class="label">
                                <div class="label-text">
                                    <a href="<?php echo site_url('portfolio/project/' . $dashedProjectName); ?>"
                                       class="text-title"><?php echo strtoupper($project['project_name']); ?></a>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <!--portfolio style end here-->
    </div>
</section>
