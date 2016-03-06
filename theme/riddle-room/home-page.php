<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
            <div class="content-container">
                <div class="table-set">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/home-page/table-set.png" alt="Riddle Room" title="Riddle Room" />
                <!-- div.table-set ENDS -->
                </div>
        
                <a href="<?php bloginfo( 'url' ); ?>/lab-room/" class="door-1 left"><p><?php the_field( 'door_left_title' ); ?></p></a>
                
                <div class="cat">
                    &nbsp;
                    <!--<img src="images/home-page/cat.png" alt="Riddle Room" title="Riddle Room" />-->
                <!-- div.cat ENDS -->
                </div>
            
                <div class="fireplace">
                    <div class="fire">
                    <!-- div.fire ENDS -->
                    </div>
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/home-page/fireplace-rail.png" class="rail">
                <!-- div.fireplace ENDS -->
                </div>
                
                <a href="<?php bloginfo( 'url' ); ?>/egypt-room/" class="door-1 right"><p><?php the_field( 'door_right_title' ); ?></p></a>
                
                <div class="couch-divan">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/home-page/couch-divan.png" alt="Riddle Room" title="Riddle Room" />
                <!-- div.couch-divan ENDS -->
                </div>
			<!-- div.content-container ENDS -->
            </div>
            
<?php get_footer(); ?>