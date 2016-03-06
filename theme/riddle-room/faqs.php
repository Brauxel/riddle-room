<?php
/*
Template Name: FAQs
*/
?>
<?php get_header(); ?>
		<section id="content">
            <div class="cat faq-cat">
                &nbsp;
                <!--<img src="images/home-page/cat.png" alt="Riddle Room" title="Riddle Room" />-->
            <!-- div.cat ENDS -->
            </div>
        	<div class="faq-container">
                <div class="faqs mCustomScrollbar">
		        	<h2>FAQs</h2>
                	<div class="accordion">
						<?php the_post(); the_content(); ?>
                    <!-- div.accordion ENDS -->
					</div>
                    
                    <h2>Booking FAQs</h2>
                    <div class="accordion">
                    	<?php the_field( 'booking_faq' ); ?>
                    </div>
                    
                </div>
            </div>
        <!--section#content ENDS -->
		</section>
<?php get_footer(); ?>