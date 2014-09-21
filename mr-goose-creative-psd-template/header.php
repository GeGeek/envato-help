<?php

    switch ($page){
        case 'psd-files':
            $subtitle = ' - PSD files included';
            break;
        case 'changelog':
            $subtitle = ' - Changelog';
            break;
        case 'assets':
            $subtitle = ' - Assets';
            break;
        default:
            $subtitle = '';
    }
    
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Mr Goose - Creative PSD Template<?php echo $subtitle; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Mr Goose is a clean PSD template created for creative and portfolio websites and blogs." />
        <meta name="keywords" content="art, bird, blog, clean, coming soon, creative, design, fly, gallery, photograph, portfolio, responsive, template, textures, unique" />

        <?php include_once('../libraries/php/assets.php'); ?>
        <?php include_once('../libraries/php/google-analytics.php'); ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>Mr Goose - Creative PSD Template</h1>
            </div>