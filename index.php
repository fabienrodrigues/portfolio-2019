
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

    <div id="about-section" class="section">
        <div class="content">
            <?php include('partials/home/services.php'); ?>
            <?php include('partials/home/knowledges.php'); ?>
            <?php include('partials/home/about.php'); ?>
        </div>        

        <svg version="1.1" class="side-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>
        <svg version="1.1" class="side-right-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>
        <svg version="1.1" class="side-right-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 518.4 1383.46" xml:space="preserve"><polygon points="92.18,0 0,0 0,1383.46 518.4,1383.46 "/></svg>
    </div>

    <?php include('partials/home/projects.php'); ?>
</section>
<!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>