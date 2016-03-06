<?php
/*
Template Name: Contact Us
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
		        	<h2>Contact Us</h2>
                	<div class="accordion">
						<?php the_post(); the_content(); ?>
                    <!-- div.accordion ENDS -->
					</div>
                    
                </div>
            </div>
        <!--section#content ENDS -->
		</section>
<?php get_footer(); ?>