<?php if(is_page_template( 'archive.php' )): ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Riddel Room</title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/riddle-room-blog.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>
<body>
	<header>
    	<div class="wrap">
	    	<a id="logo" href="#">Riddle Room</a>
            
            <nav>
            	<ul>
                	<li><a href="#">About Us</a></li>
                	<li><a href="#">Game Room</a></li>
                	<li><a href="#">Who Can Play</a></li>
                	<li><a href="#">Book Now</a></li>
                	<li><a href="#">FAQs</a></li>
                	<li><a href="#">Contact</a></li>
                	<li><a href="#">Blog</a></li>
                    <div class="clear"></div>
                </ul>
            </nav>
			<div class="clear"></div>
            
		</div>
    </header>
<?php else: ?>
<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<!--[if lt IE 9]>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/html5-ie.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/jquery-ui.min.css">
    <?php if( is_page_template( 'landing-page.php' ) ):  ?>
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/riddle-room-landing.css">
    <?php endif; ?>
    <?php if( is_page_template( 'faqs.php' ) || is_page_template( 'contact-us.php' ) ):  ?>
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/riddle-room-faq.css">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/riddle-room.css" rel="stylesheet" media="all">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    
    <title>Riddle Room</title>
    
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <?php wp_head(); ?>
</head>
<body<?php if( is_page_template( 'landing-page.php' ) || is_page_template( 'faqs.php' ) || is_page_template( 'contact-us.php' ) ):  ?> style="background-color:transparent;"<?php endif; ?><?php if( is_page_template( 'who-can-play.php' ) || is_page_template( 'booking-form.php' ) || is_page_template( 'about-us.php' ) ):  ?> class="who-can-play"<?php endif; ?><?php if( is_page_template( 'lab-room.php' ) ):  ?>  class="lab-room-body"<?php endif; ?><?php if( is_page_template( 'egypt-room.php' ) ):  ?>  class="lab-room-body"<?php endif; ?>>
	<?php if( !is_page_template( 'who-can-play.php' ) && !is_page_template( 'booking-form.php' ) && !is_page_template( 'about-us.php' ) ):  ?>
	<div class="wrap">
    <?php endif; ?>
    
    	<?php if( !is_page_template( 'landing-page.php' ) ):  ?>
        <section id="content"<?php if( is_page_template( 'home-page.php' ) ): ?> class="home-page"<?php endif; ?><?php if( is_page_template( 'lab-room.php' ) ): ?> class="lab-room"<?php endif; ?><?php if( is_page_template( 'egypt-room.php' ) ): ?> class="egypt-room"<?php endif; ?>>
            <header<?php if( is_page_template( 'who-can-play.php' ) || is_page_template( 'booking-form.php' ) || is_page_template( 'about-us.php' ) ):  ?> style="padding-left:20px; padding-right:20px;"<?php endif; ?>>
            
                <a id="logo" href="<?php bloginfo( 'url' ); ?>/home/">Riddle Room</a>
                
                <nav>
                    <ul id="nav">
                        <li><a href="<?php bloginfo( 'url' ); ?>/about-us/">About Us</a></li>
                        <li>
                            <a href="<?php bloginfo( 'url' ); ?>/home/">Game Room</a>
                            <ul>
                                <li><a href="<?php bloginfo( 'url' ); ?>/lab-room/">The Lab<hr></a></li>
                                <li><a href="<?php bloginfo( 'url' ); ?>/egypt-room/">The Tomb<hr></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php bloginfo( 'url' ); ?>/who-can-play/">Who Can Play</a></li>
                        <li><a href="<?php bloginfo( 'url' ); ?>/booking/">Book Now</a></li>
                        <li><a href="<?php bloginfo( 'url' ); ?>/faqs/">FAQs</a></li>
                        <li><a href="<?php bloginfo( 'url' ); ?>/contact-us/">Contact</a></li>
                    </ul>
                    <div class="clear"></div>
                    
                </nav>

                <div class="clear"></div>
            </header>
            
            <header class="responsive-header">
            	<a id="logo" href="<?php bloginfo( 'url' ); ?>">Riddle Room</a>
                
                <div class="clear"></div>
            <!-- header.responsive-header ENDS -->
            </header>
            <?php endif; ?>
<?php endif; ?>
