<?php

    $page = $_GET['page'];
    
?>

<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>

<?php 
    
    if (file_exists('page-'.$page.'.php')){
        include_once 'page-'.$page.'.php';
    }
    else{
        include_once 'page-home.php';
    }
    
?>

<?php include_once 'footer.php';