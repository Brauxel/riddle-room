<?php
/*
Template Name: Lab Room
*/
?>
<?php get_header(); ?>
            <div class="main-container">
            
            	<div class="bunsen-burner">
                	<img src="<?php bloginfo( 'template_url' ); ?>/images/lab-room/burner-flame.png" alt="Riddle Room" title="Riddle Room" class="bunsen-flame" />
                	<div class="bubbles-container">
                	<div class="bubbles">
                    	<div class="bubble">&nbsp;</div>
                    </div>
                    </div>
                <!-- div.bunsen-burner ENDS -->
                </div>

				<a href="<?php bloginfo( 'url' ); ?>/home/" class="door-1 left"><p style="padding-left:39px;">Home</p></a>
                
                <!--<div class="coat-hanger">
                	<div class="coat">&nbsp;</div>
                </div>-->
                
                <section class="content">
                
                	<h1><?php the_title(); ?></h1>
                    
                	<article class="description mCustomScrollbar">
                    	<?php the_post(); the_content(); ?>
                    <!-- article.description ENDS -->
					</article>
                    
                    <a href="<?php bloginfo( 'url' ); ?>/lab-room-booking/" class="book-now"><span>Book Now</span></a>
                <!-- section.content ENDS -->    
                </section>
                
                <div class="spill">
                	<div class="drip-container">
                        <div class="drip">
                            &nbsp;
                        <!-- div.drip ENDS -->
                        </div>
                    <!-- div.drip-container ENDS -->    
					</div>
                    
                    <div class="puddle">&nbsp;
                    </div>
                <!-- div.spill ENDS -->
                </div>
			<!-- div.content-container ENDS -->
            </div>
<?php get_footer(); ?>