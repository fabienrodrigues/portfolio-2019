<?php
    include('config.php');
    include('functions.php');

    $projectName = filter_input(INPUT_GET, 'project', FILTER_SANITIZE_ENCODED);
    $projectData = getProjectData(getJsonFilenameFromSlug($projectName));

    if($projectData === false)
    {
        header("Location: " . baseUrl());
        exit();
    }

    $data = [
        'title' => $projectData->metaTitle,
        'description' => $projectData->metaDescription,
        'bodyClass' => 'project'
    ];    
    template('partials/start-body.php', $data);
?>
            
    <section id="content">
        
        <?php include('partials/project/intro.php'); ?>
        <?php include('partials/project/page-content.php'); ?>

        <svg version="1.1" class="side-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 717 2414" style="enable-background:new 0 0 717 2414;" xml:space="preserve"><polygon points="127.49,0 0,0 0,2414 717,1913.46 "/></svg>
    </section>
    <!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>