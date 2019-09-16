<div id="page-content">
    <svg version="1.1" class="bottom-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 418.79 209.73" style="enable-background:new 0 0 418.79 209.73;" xml:space="preserve"><polygon points="0,129.02 0,209.73 418.79,209.73 418.79,0 "/></svg>

    <div class="section">        
        <div class="column left">
            <img src="<?php echo baseUrl(($projectData->iphone->src)); ?>" alt="<?php echo baseUrl(($projectData->iphone->alt)); ?>" data-scroll-speed="10">
            <img src="<?php echo baseUrl(($projectData->page2->src)); ?>" alt="<?php echo baseUrl(($projectData->page2->alt)); ?>" data-scroll-speed="15">
        </div>

        <div class="column right">
            <img src="<?php echo baseUrl(($projectData->page1->src)); ?>" alt="<?php echo baseUrl(($projectData->page1->alt)); ?>" data-scroll-speed="5">
            <img src="<?php echo baseUrl(($projectData->ipad->src)); ?>" alt="<?php echo baseUrl(($projectData->ipad->alt)); ?>" data-scroll-speed="10">
        </div>        
    </div>

    <div class="section">
        <div class="content center">
            <div class="split"></div>

            <?php if($projectData->websiteLink) : ?>
                <a href="<?php echo($projectData->websiteLink); ?>" target="_blank" class="button white">Voir le site</a>
            <?php endif; ?>
        </div>
    </div>
</div>


<div id="portfolio" class="section">
    <div class="content">
        <h3 id="portfolio-intro">Les derniers projets développés</h3>
    
        <div id="portfolio-content">
            <?php
                $folder = __DIR__ . '/../../data/projects';
                $files = scandir($folder, SCANDIR_SORT_ASCENDING); // SCANDIR_SORT_ASCENDING pour un tri alphanumérique croissant
    
                if($files) :
                    foreach ($files as $fileName) :
                        $matches = [];
                        // recupere le nom du fichier json
                        if(preg_match("/^([\w-]+)\.json$/", $fileName, $matches) == 1) :
                            $projectName = $matches[1];
                            $projectData = getProjectData($projectName);

                            include('partials/home/item-portfolio.php'); 
                        endif;
                    endforeach;
                endif;
            ?>
        </div>
    </div>

    <svg version="1.1" class="side-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" style="enable-background:new 0 0 518.4 1383.46;" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>

    <svg version="1.1" class="side-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" style="enable-background:new 0 0 518.4 1383.46;" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>
</div>