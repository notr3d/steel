<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title($sep = ''); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fullPage.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <header class="page-nav">
        <div class="container page-nav__wrapper">
            <nav class="container navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#page-nav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home"></a>
                    </div>
                    <div id="page-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home" class="page-nav__link">Company</a></li>
                            <li><a href="about" class="page-nav__link">Overview</a></li> 
							<li><a href="products" class="page-nav__link">Our Products</a></li>
                            <li><a href="contacts" class="page-nav__link">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <?php wp_head(); ?>
    </header>