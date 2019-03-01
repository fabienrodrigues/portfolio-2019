
<?php
    include('config.php');
    include('functions.php');

    $data = [
        'cssFiles' => [baseUrl('/medias/pages/styles/css/home.css')],
        'jsFiles' => [baseUrl('/medias/pages/scripts/min/home.js')]
    ];    
    template('partials/start-body.php', $data);
?>

            
<section id="content">
    <?php include('partials/home/intro.php'); ?>
    <?php include('partials/home/portfolio.php'); ?>
    <?php include('partials/home/about.php'); ?>
    <?php include('partials/home/hobbies.php'); ?>
</section>
<!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>