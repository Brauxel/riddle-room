<?php
/*
Template Name: Egypt Room
*/
?>
<?php get_header(); ?>
            <div class="main-container">
            
            	<div class="fire-holder-1"></div>
                
				<div class="flame-1"></div>                
            

            	<div class="fire-holder-2"></div>
                
				<div class="flame-2"></div>

            	<div class="fire-holder-3"></div>
                
				<div class="flame-3"></div>

				<section class="content">
                
                	<h1><?php the_title(); ?></h1>
                    
                	<article class="description mCustomScrollbar">
                    	<?php the_post(); the_content(); ?>
                    <!-- article.description ENDS -->
					</article>
                    
                    <a href="<?php bloginfo( 'url' ); ?>/egypt-room-booking/" class="book-now"><span>Book Now</span></a>
                <!-- section.content ENDS -->    
				</section>
                
                <a href="<?php bloginfo( 'url' ); ?>/home/" class="door-1 right"><p style="padding-left:30px;">Home</p></a>
                
			<!-- div.content-container ENDS -->
            </div>
<?php get_footer(); ?>