<!DOCTYPE html>
<html>
    <head>
        <title>Hack Sample Site</title>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" type="image/vnd.microsoft.icon">
        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../docs-assets/js/html5shiv.js"></script>
          <script src="../../docs-assets/js/respond.min.js"></script>
        <![endif]-->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sass-bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fittext.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
            <link href='http://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">        
            <div class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<!--           <a class="navbar-brand" href="/">American Tea Experience</a>
 -->        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            <li <?php if ( is_page('about')) { echo ' class="current"'; } ?>><a href="/about">About</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Services <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="/tea-lovers">Tea Lovers</a></li>
                    <li><a href="/retailers">Retailers</a></li>
                    <li><a href="/restaurant">Restaurant Peoples</a></li>
                    <li><a href="/experts">Experts</a></li>
                </ul>
            </li>
            <li class="<?php (is_page('contact')) ? $current : '' ?>"><a href="/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
            </div><!--header-->
        </div><!--container-->
