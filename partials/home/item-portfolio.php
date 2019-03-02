<a href="<?php echo baseUrl('/projet/' . $projectData->slug); ?>" class="project-item">
    <div class="item-content imgLiquid">
        <img src="<?php echo baseUrl($projectData->thumbnail); ?>" alt="<?php echo $projectData->title; ?>">
    </div>
    <div class="more">
        <div class="more-text">
            <?php echo $projectData->title; ?>
        </div>
    </div>
    <div class="item-overlay">
        <img src="<?php echo baseUrl('medias/pages/images/home/portfolio/overlay.svg'); ?>" alt="">
    </div>
</a>