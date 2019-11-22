<a href="<?php echo baseUrl('/projet/' . $projectData->slug); ?>" class="project-item" data-aos="fade-in" data-aos-delay="<?php echo($count * 100); ?>">
    <div class="item-content imgLiquid">
        <img src="<?php echo baseUrl($projectData->thumbnail); ?>" alt="<?php echo $projectData->title; ?>">
    </div>
    <div class="more">
        <div class="more-text">
            <?php echo $projectData->title; ?>
        </div>
    </div>
    <div class="item-overlay">
        <img src="<?php echo baseUrl('dist/images/pages/home/portfolio/overlay.svg'); ?>" alt="">
    </div>
</a>