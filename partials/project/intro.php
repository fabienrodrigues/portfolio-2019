<div id="intro">
    <div class="section">
        <div class="content">
            <h1 data-aos="fade-up" data-aos-delay="0"><?php echo($projectData->title); ?></h1>
            <p data-aos="fade-up" data-aos-delay="100"><?php echo($projectData->intro); ?></p>
            <?php if($projectData->websiteLink) : ?>
                <div data-aos="fade-up" data-aos-delay="150">
                    <a href="<?php echo($projectData->websiteLink); ?>" target="_blank" title="Voir le site <?php echo($projectData->title); ?>" class="button primary hover-dark">Voir le site</a>
                </div>
            <?php endif; ?>
        </div>


        <div class="grid-row">
            <div class="project-logo" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo baseUrl(($projectData->logo->src)); ?>" width="<?php echo($projectData->logo->width); ?>" alt="">
            </div>
            <div class="project-first-screen" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo baseUrl(($projectData->firstimg->src)); ?>" alt="<?php echo baseUrl(($projectData->firstimg->alt)); ?>">
            </div>
        </div>
    </div>
</div>