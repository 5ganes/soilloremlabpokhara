<?php require_once('clientobjects.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  	<title>Soil Lab Pokhara - Home</title>
    <?php require_once('baselocation.php'); ?>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:780px)">

</head>
<body>
<div class="main-bg">
    <!-- Header -->
    <header>
    	<div class="inner container_24">
            <div class="logo">
                <a href="<?php echo $SITE_URL;?>"></a>
            </div>
            <div id="header-title">
                <h5>नेपाल सरकार</h5>
                <h5>कृषि विकास मन्त्रालय</h5>
                <h5>कृषि विभाग</h5>
                <h5>पश्चिमान्चल क्षेत्रीय कृषि निर्देशनालय</h5>
                <h3>माटो प्रयोगशाला कार्यालय, पोखरा</h3>
            </div>
            <div id="header-flag">
                <img src="images/flag.gif" />
            </div>
            <div style="clear: both;"></div>
        </div>
        <nav class="container_24">
            <ul class="sf-menu sf-js-enabled">
                <?php createMenu(0, 'Header'); ?>
            </ul>
        </nav>
        <div class="clear"></div>

        <?php if(empty($pageLinkType) and !isset($_GET['action'])){?>
            <div class="slider-container container_24">
                <div class="chief">
                    <article class="indent-bot-1" style="text-align: center;padding: 0 0 5px 0">
                        <?php
                        $chief=$groups->getById(OFFICER); $chief=$conn->fetchArray($chief);
                        ?>
                        <h2 class="heading-1"><?php echo $chief['name'];?></h2>
                        <img src="<?php echo CMS_GROUPS_DIR.$chief['image'] ?>" >
                        <p class="hr-border-1 article-content">
                            <?php echo $chief['shortcontents'];?>
                        </p>
                        <div class="alignright">
                            <a href="<?php echo $chief['urlname'];?>" class="button">Read more</a>
                        </div>
                    </article>
                </div>
                <div class="slider">
                    <?php require_once('slider/slider.php'); ?>
                </div>
                <div style="clear: both"></div>
            </div>
        <?php }?>

    </header>
    <div style="clear: both;"></div>
    <!-- Content -->
    <section id="content">
        <!-- <div class="ic">More Website Templates @ TemplateMonster.com. July 16, 2012!</div> -->
        <div class="container_24">
            <div class="wrapper">
            	<div class="content-bg">
                	<div class="wrapper">