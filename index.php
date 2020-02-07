
<?php
    include('config.php');
    include('functions.php');

    $data = [
        'bodyClass' => 'home',
        'description' => 'Découvrez mon portfolio, mes prestations de développeur Front-end, intégrateur Web freelance dans le Jura &agrave; Lons-le-Saunier'
    ];    
    template('partials/start-body.php', $data);
?>

            
<section id="content">
    <?php include('partials/home/intro.php'); ?>
    <?php include('partials/home/about.php'); ?>
    <?php include('partials/home/portfolio.php'); ?>
    <?php //include('partials/home/hobbies.php'); ?>
</section>
<!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>