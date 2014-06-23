
<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>

<?php 
    
    if (file_exists('page-'.$_GET['page'].'.php')){
//        include_once 'page-'.$_GET['page'].'.php';
    }
    else{
//        include_once 'page-home.php';
    }
    
    include_once 'page-changelog.php';
    
?>

<?php include_once 'footer.php'; ?>