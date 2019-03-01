<div id="intro">
    <h1><?php echo($projectData->title); ?></h1>
    <p><?php echo($projectData->intro); ?></p>
    <a href="<?php echo($projectData->websiteLink); ?>" class="button red"></a>

    <div class="project-logo">
        <img src="<?php echo baseUrl(($projectData->logo)); ?>" alt="">
    </div>
    <div class="project-first-screen"></div>
</div>