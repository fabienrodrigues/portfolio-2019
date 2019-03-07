<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
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

    <title><?php echo(isset($title) ? $title : 'Fabien Rodrigues - Développeur Front-end &agrave; Lille'); ?></title>
    <meta name="description" content="Description du site">
    <meta name="author" content="Fabien Rodrigues">
    <meta name="theme-color" content="#282425">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-TileColor" content="#282425">
    <meta name="msapplication-TileImage" content="<?php echo baseUrl('medias/components/images/mstile-144x144.png'); ?>">


    <!-- FACEBOOK
    ================================================== -->
    <meta property="og:title"       content="Fabien Rodrigues, développeur Front-end. Mon portfolio" />
    <meta property="og:site_name"   content="Fabien Rodrigues, développeur Front-end, intégrateur HTML, CSS, Javascript à Lille" />
    <meta property="og:description" content="Fabien Rodrigues, développeur Front-end, intégrateur HTML, CSS, Javascript à Lille" />
    <meta property="og:type"        content="website" />
    <meta property="og:url"         content="http://www.fabienrodrigues.com/" />
    <meta property="og:image"       content="<?php echo baseUrl('/medias/images/teaser.jpg'); ?>" />
    <meta property="og:locale"      content="fr_FR" />


    <!-- TWITTER
    ================================================== -->
    <meta property="twitter:card"           content="summary_large_image">
    <meta property="twitter:title"          content="Fabien Rodrigues, développeur Front-end">
    <meta property="twitter:description"    content="Fabien Rodrigues, développeur Front-end, intégrateur HTML, CSS, Javascript à Lille">
    <meta property="twitter:creator"        content="@fabienRod59">
    <meta property="twitter:url"            content="http://www.fabienrodrigues.com">
    <meta property="twitter:image"          content="<?php echo baseUrl('/medias/images/teaser.jpg'); ?>" />
    

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <!-- FONTS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px|Yantramanav:300,400,700" rel="stylesheet">


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo baseUrl('/medias/components/styles/css/styles.css'); ?>">

    <?php
        if(isset($cssFiles))
        {
            foreach($cssFiles as $cssFile)
                echo('<link rel="stylesheet" href="' . $cssFile . '">');
        }
    ?>


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo baseUrl("medias/components/images/favicons/favicon.ico"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo baseUrl('medias/components/images/favicons/favicon-16x16.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo baseUrl('medias/components/images/favicons/favicon-32x32.png'); ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-icon-180x180.png'); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-320x460.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-640x920.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-640x1096.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-750x1294.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-1182x2208.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-1242x2148.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-748x1024.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-768x1004.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-1496x2048.png'); ?>">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="<?php echo baseUrl('medias/components/images/favicons/apple-touch-startup-image-1536x2008.png'); ?>">
    <link rel="icon" type="image/png" sizes="228x228" href="<?php echo baseUrl('medias/components/images/favicons/coast-228x228.png'); ?>">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="<?php echo baseUrl('medias/components/images/favicons/mstile-144x144.png'); ?>">
</head>

<body class="no-touch">
    <div id="container">
        <?php include('partials/header.php'); ?>
        <!-- /HEADER -->
    