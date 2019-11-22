
<?php
    include('config.php');
    include('functions.php');

    $data = [
        'bodyClass' => 'page-404',
        'description' => 'Fabien Rodrigues, développeur Front-end, intégrateur HTML, CSS, Javascript &agrave; Lons-le-Saunier'
    ];    
    template('partials/start-body.php', $data);
?>

            
<section id="content">
    <div class="section">
        <div class="content">
            <span class="title-404">
                <img src="https://media.giphy.com/media/g01ZnwAUvutuK8GIQn/giphy.gif" alt="Oups, la page que vous cherchez n'existe pas.">
            </span>
            <h1>Oups, la page que vous cherchez n'existe pas.</h1>
            <h2>C'est pas grave, il y en a d'autres</h2>

            <a href="<?php echo baseUrl('/'); ?>" class="button primary">Par ici</a>
        </div>
    </div>
</section>
<!-- /SECTION -->

<?php template('partials/end-body.php', $data); ?>