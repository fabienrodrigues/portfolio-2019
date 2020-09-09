<div id="page-content">
    <svg version="1.1" class="bottom-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 418.79 209.73" style="enable-background:new 0 0 418.79 209.73;" xml:space="preserve"><polygon points="0,129.02 0,209.73 418.79,209.73 418.79,0 "/></svg>

    <div class="section">        
        <div class="column left">
            <img src="<?php echo baseUrl(($projectData->iphone->src)); ?>" alt="<?php echo baseUrl(($projectData->iphone->alt)); ?>" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo baseUrl(($projectData->page2->src)); ?>" alt="<?php echo baseUrl(($projectData->page2->alt)); ?>" data-aos="fade-up" data-aos-delay="200">
        </div>

        <div class="column right">
            <img src="<?php echo baseUrl(($projectData->page1->src)); ?>" alt="<?php echo baseUrl(($projectData->page1->alt)); ?>" data-aos="fade-up" data-aos-delay="0">
            <img src="<?php echo baseUrl(($projectData->ipad->src)); ?>" alt="<?php echo baseUrl(($projectData->ipad->alt)); ?>" data-aos="fade-up" data-aos-delay="100">
        </div>        
    </div>

    <div class="section">
        <div class="content center">
            <div class="split"></div>

            <?php if($projectData->websiteLink) : ?>
                <a href="<?php echo($projectData->websiteLink); ?>" target="_blank" class="button magnetic white">
                    <span class="button-text">
                        <span class="button-inner">Voir le site</span>
                    </span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php include('partials/project/other-projects.php'); ?>