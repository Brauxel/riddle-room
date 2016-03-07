<?php
/*
Template Name: Archives
*/
get_header(); ?>
    <main>
    	<div class="wrap">
        	<p class="tagline">Tagline Comes Here</p>
            
            <h1>Riddle Room <br>Blog</h1>
            
            <ul class="archives">
            	<li><a href="#">Markup</a></li>
            	<li><a href="#">News &amp; Announcements</a></li>
            	<li><a href="#">Trends</a></li>
            	<li>
                	<a href="#">Archives</a>
                    <ul>
                    	<li><a href="#">Feburary 2016</a></li>
                    	<li><a href="#">January 2016</a></li>
                    	<li><a href="#">January 2016</a></li>
                    	<li><a href="#">January 2016</a></li>
                    </ul>
                </li>
                <div class="clear"></div>
            </ul>
            
            <?php $query = new WP_Query( array( 'post_type' => 'post' ) ); ?>
            <?php if ( $query->have_posts() ): ?>
            <div class="articles three-columns">
            	<?php while ( $query->have_posts() ): $query->the_post(); ?>
            	<article class="column">
                	<?php the_post_thumbnail('full'); ?>
                    <h5><?php the_title(); ?></h5>
                    <p class="author">BY <span><?php the_author(); ?></span>&nbsp; on <span><?php the_date('l, F j, Y'); ?></span></p>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="continue-reading">Continue Reading</a>
                </article>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <h5>We apologise but there are currently no posts. Please keep an eye out for future updates. Click <a href="http://riddleroom.in/">here</a> to return home.</h5>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </main>
<?php get_footer(); ?>