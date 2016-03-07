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
            
            <div class="featured-links">
            	<p class="title">Featured On</p>
                
                <a href="http://www.deccanchronicle.com/151209/lifestyle-offbeat/article/mystery-room-phew/" target="_blank" class="deccan-chronicle">Deccan Chronicle</a>
                <a href="http://www.thehindu.com/todays-paper/tp-features/tp-metroplus/riddle-room/article8141488.ece" class="the-hindu" target="_blank">The Hindu</a>
                <a href="http://indulge.newindianexpress.com/riddle-me-this/bangalore/41334" target="_blank" class="indulge">Indulge</a>
                <a href="https://lbb.in/bangalore/fulfil-your-dreams-of-being-on-crystal-maze-at-the-riddle-room/" target="_blank" class="llb">LLB</a>
                <a href="http://www.officechai.com/startups/riddle-room-escape-room-bangalore/" target="_blank" class="office-chai">Office Chai</a>
                <a href="http://www.polkacafe.com/fun-and-adventurous-places-in-bangalore-2157.html" target="_blank" class="polka">Polka</a>
                <a href="http://epaperbeta.timesofindia.com/Article.aspx?eid=31806&articlexml=When-adventure-comes-to-a-mall-near-you-19122015008024" target="_blank" class="times last">The Times of India</a>
            </div>
<?php get_footer(); ?>