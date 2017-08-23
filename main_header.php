<?php
ob_start();
include "admin/includes/config.php";
include "admin/includes/functions.php"; 
$getSiteSettingsData = getIndividualDetails('1',"site_settings","id"); 
?>
<?php 
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<?php
    if($page_name == 'about_us.php'){
        $getMetaData = getIndividualDetails(4,"content_pages","id");
    }  else{
       $id= isset($_GET['id']); 
       $getMetaData = getIndividualDetails($id,"services","id");
    }
?>

<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $getSiteSettingsData['admin_title']; ?></title>
        <meta name="title" content="<?php echo $getMetaData['meta_title'] ?>"></meta>
        <meta name="description" content="<?php echo $getMetaData['meta_desc'] ?>"></meta>
        <meta name="keywords" content="<?php echo $getMetaData['meta_keywords'] ?>"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">

        
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">



        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
    <div class="wrapper">
    <!-- Header Area Start Here -->
    <header>                
        <?php include_once 'header.php';?>
    </header>
    <!-- Header Area End Here -->