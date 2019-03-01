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
        'cssFiles' => [baseUrl('/medias/pages/styles/css/project.css')],
        'jsFiles' => [baseUrl('/medias/components/scripts/min/project.js')],
        'title' => $projectData->title
    ];    
    template('partials/start-body.php', $data);
?>

            
    <section id="content">
        
        <?php include('partials/project/intro.php'); ?>

    </section>
    <!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>