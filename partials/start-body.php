<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- GOOGLE ANALYTICS
    ================================================== -->
    <script>
		window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
		ga('create', 'UA-53024416-1', 'auto');
		ga('send', 'pageview');
	</script>
	<script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo(isset($title) ? $title : 'Développeur Front-end, intégrateur Web indépendant dans le Jura &agrave; Lons-le-Saunier. Fabien Rodrigues'); ?></title>
    <meta name="description" content="<?php echo(isset($description) ? $description : 'Découvrez mon portfolio, mes prestations de développeur Front-end, intégrateur Web freelance dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>">
    <meta name="author" content="Fabien Rodrigues">
    <meta name="robots" content="all" />
    <meta name="googlebot" content="all" />
    <meta name="theme-color" content="#282424">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-TileColor" content="#282424">


    <!-- FACEBOOK
    ================================================== -->
    <meta property="og:title"       content="<?php echo(isset($title) ? $title : 'Fabien Rodrigues, développeur Front-end, intégrateur Web, HTML, CSS, Javascript, Wordpress, Dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>" />
    <meta property="og:site_name"   content="<?php echo(isset($title) ? $title : 'Fabien Rodrigues, développeur Front-end, intégrateur Web, HTML, CSS, Javascript, Wordpress, Dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>" />
    <meta property="og:description" content="<?php echo(isset($description) ? $description : 'Fabien Rodrigues, développeur Front-end, intégrateur Web, HTML, CSS, Javascript, Wordpress, Dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>" />
    <meta property="og:type"        content="website" />
    <meta property="og:url"         content="https://www.fabienrodrigues.com/" />
    <meta property="og:image"       content="<?php echo baseUrl('/dist/images/teaser.jpg'); ?>" />
    <meta property="og:locale"      content="fr_FR" />


    <!-- TWITTER
    ================================================== -->
    <meta property="twitter:card"           content="summary_large_image">
    <meta property="twitter:title"          content="<?php echo(isset($title) ? $title : 'Fabien Rodrigues, développeur Front-end, intégrateur Web, HTML, CSS, Javascript, Wordpress, Dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>">
    <meta property="twitter:description"    content="<?php echo(isset($description) ? $description : 'Fabien Rodrigues, développeur Front-end, intégrateur Web, HTML, CSS, Javascript, Wordpress, Dans le Jura &agrave; Lons-le-Saunier, Besançon, Dijon'); ?>">
    <meta property="twitter:creator"        content="@fabienRod59">
    <meta property="twitter:url"            content="https://www.fabienrodrigues.com">
    <meta property="twitter:image"          content="<?php echo baseUrl('/dist/images/teaser.jpg'); ?>" />
    

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <!-- FONTS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px|Yantramanav:300,400,700" rel="stylesheet">


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo baseUrl('dist/main.css'); ?>">


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo baseUrl("dist/images/components/favicons/favicon.ico"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo baseUrl('dist/images/components/favicons/favicon-16x16.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo baseUrl('dist/images/components/favicons/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo baseUrl('dist/images/components/favicons/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo baseUrl('dist/images/components/favicons/favicon-96x96.png'); ?>">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo baseUrl('dist/images/components/favicons/apple-touch-icon-180x180.png'); ?>">
    
    <link rel="manifest" href="<?php echo baseUrl('dist/images/components/favicons/manifest.json'); ?>">
    <meta name="msapplication-TileImage" content="<?php echo baseUrl('dist/images/components/favicons/mstile-144x144.png'); ?>">


    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
            "background": "#282425"
            },
            "button": {
            "background": "#e82d43"
            }
        },
        "content": {
            "message": "Ce site utilise des cookies pour améliorer votre expérience de navigation et vous offrir un service plus personnalisé. En poursuivant votre navigation sur ce site, vous acceptez l’utilisation des cookies.",
            "dismiss": "Accepter",
            "link": "Informations",
            "href": "http://www.google.com/policies/technologies/cookies"
        }
    })});
    </script>
</head>

<body class="no-touch <?php if(isset($bodyClass)) echo $bodyClass; ?>">
    <div id="container">
        <?php include('partials/header.php'); ?>
        <!-- /HEADER -->
    