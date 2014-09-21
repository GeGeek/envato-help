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
        <title>Bay Breeze - Online Booking PSD Template<?php echo $subtitle; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Bay Breeze is a clean and complete booking PSD template ideal for booking portals and more." />
        <meta name="keywords" content="availability, book, booking, calendar, cars, hotel, location, portal, rate, rent, reservation, room, schedule, travel, villa" />
        
        <?php include_once('../libraries/php/assets.php'); ?>
        <?php include_once('../libraries/php/google-analytics.php'); ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>Bay Breeze - Online Booking PSD Template</h1>
            </div>  