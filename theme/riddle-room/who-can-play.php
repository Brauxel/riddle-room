<?php
/*
Template Name: Who Can Play
*/
?>
<?php get_header(); ?>
            <div class="main-container">
            	<div class="container-3">
                	<article>
                    	<img src="<?php the_field( 'image_1' ); ?>" alt="Corporates" title="Corporates" />
                        <?php the_field( 'text_1' ); ?>
                    </article>
                    
                	<article>
                    	<img src="<?php the_field( 'image_2' ); ?>" alt="Gamers" title="Gamers" style="margin-top:14px;" />
                        <?php the_field( 'text_2' ); ?>
                    </article>
                    
                	<article>
                    	<img src="<?php the_field( 'image_3' ); ?>" alt="Family" title="Family" style="margin-top:11px;" />
                        <?php the_field( 'text_3' ); ?>
                    </article>
                    
                	<article>
                    	<img src="<?php the_field( 'image_4' ); ?>" alt="Students" title="Students" style="margin-top:11px;"  />
                        <?php the_field( 'text_4' ); ?>
                    </article>
                    <div class="clear"></div>
				</div>
                
			<!-- div.content-container ENDS -->
            </div>
<?php get_footer(); ?>