<div id="intro">
    <div class="section">
        <div class="content">
            <h1><?php echo($projectData->title); ?></h1>
            <p><?php echo($projectData->intro); ?></p>
            <?php if($projectData->websiteLink) : ?>
                <a href="<?php echo($projectData->websiteLink); ?>" target="_blank" class="button primary">Voir le site</a>
            <?php endif; ?>
        </div>


        <div class="grid-row">
            <div class="project-logo">
                <img src="<?php echo baseUrl(($projectData->logo->src)); ?>" width="<?php echo($projectData->logo->width); ?>" alt="">
            </div>
            <div class="project-first-screen">
                <img src="<?php echo baseUrl(($projectData->firstimg->src)); ?>" alt="<?php echo baseUrl(($projectData->firstimg->alt)); ?>">
            </div>
        </div>
    </div>
</div>