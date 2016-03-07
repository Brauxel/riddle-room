<?php get_header(); ?>
    <main>
    	<div class="wrap">
            <ul class="archives">
            	<li><a href="#">Markup</a></li>
            	<li><a href="#">News &amp; Announcements</a></li>
            	<li><a href="#">Trends</a></li>
            	<li>
                	<a href="#">Archives</a>
                    <ul>
                    	<li><a href="http://riddleroom.in/blog/">March 2016</a></li>
                    </ul>
                </li>
                <div class="clear"></div>
            </ul>
            
            <section class="blog-single">
            	<article>
                    <h1><?php the_title(); ?></h1>
                    <p class="author">BY <span>Admin</span>&nbsp; on <span>Feburary 06, 2016</span></p>
                	<?php the_post_thumbnail( 'full' ); ?>
                    <?php the_content(); ?>
                </article>
            </section>
        </div>
    </main>
<?php get_footer(); ?>