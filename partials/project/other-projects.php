<div id="projects" class="section">
    <div class="content">
        <h3 id="projects-intro" data-aos="fade-up" data-aos-delay="0">Les derniers projets développés</h3>
    
        <div id="projects-content">
            <?php
                $folder = __DIR__ . '/../../data/projects';
                $files = scandir($folder, SCANDIR_SORT_ASCENDING); // SCANDIR_SORT_ASCENDING pour un tri alphanumérique croissant
    
                if($files) :
                    $count = 1;

                    foreach ($files as $fileName) :
                        $matches = [];
                        // recupere le nom du fichier json
                        if(preg_match("/^([\w-]+)\.json$/", $fileName, $matches) == 1) :
                            $projectName = $matches[1];
                            $projectData = getProjectData($projectName);

                            include('partials/item-project.php'); 
                        endif;
                        
                        $count++;
                    endforeach;
                endif;
            ?>
        </div>
    </div>

    <svg version="1.1" class="side-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" style="enable-background:new 0 0 518.4 1383.46;" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>

    <svg version="1.1" class="side-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" style="enable-background:new 0 0 518.4 1383.46;" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>
</div>