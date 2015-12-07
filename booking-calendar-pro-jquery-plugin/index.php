<?php

  $request  = str_replace('', '', $_SERVER['REQUEST_URI']);
  $params = split('/', $request);
  
  $page = isset($_GET['page']) ? $_GET['page']:$params[2];
    
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

<?php include_once 'footer.php'; ?>