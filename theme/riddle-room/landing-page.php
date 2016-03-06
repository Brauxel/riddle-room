<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>
		<section id="content" class="landing-page">

        	<div class="poem">
            	<div class="poem-content">
                    <p>
                        <span class="line-1">Among four walls you are let loose to play.</span><br>
                        <span class="line-2">Lost and astray, you have got to find the way.</span><br>
                        <span class="line-3">A team game with you and a pair of few.</span><br>
                        <span class="line-4">Listen carefully for you can’t miss a clue.</span>
                        <br><br>
                        <span class="line-5">A full circle to the clock is all you’ve got,</span><br>
                        <span class="line-6">Work in unity so each door you unlock.</span><br>
                        <span class="line-7">What looks right might not be so.</span><br>
                        <span class="line-8">Underneath it all, there’s more for you to know.</span>
                        <br><br>
                        <span class="line-9">Questions and answers, truth mixed with lies.</span><br>
                        <span class="line-10">You’ll make your way through if each one tries.</span><br>
                        <span class="line-11">The clues, the puzzles, the riddles will throw you off.</span><br>
                        <span class="line-12">But put your mind to it, and its nothing you can’t solve.</span>
						<br><br>
                        <span class="line-13">Use your five senses; let the last one be common.</span><br>
                        <span class="line-14">There maybe places unexplored every so often.</span><br>
                        <span class="line-15">A mystery, a story, a connection you have to make.</span><br>
                        <span class="line-16">It is after all your freedom that’s at stake.</span>
                    </p>
                    
                    <p style="height:50px;">&nbsp;</p>
                <!-- div.poem-content ENDS -->    
				</div>
                
                <a href="<?php bloginfo( 'url' ); ?>/home/" id="landing-logo" style="display:none;">Riddle Room</a>
                <a href="<?php bloginfo( 'url' ); ?>/home/" class="book-now" style="height:30px; line-height:22px; display:none; margin-top:15px; margin-left:217px;"><span>Enter Now</span></a>

            <!-- div.poem ENDS -->    
            </div>
                        
            <div class="lock-holder" style="margin:0 auto; width:228px; margin-top:50px; padding-left:30px;">
                <div class="number-lock number-lock-1">
                    <div class="spin">
                        <p class="first"><span>1</span><br><span>2</span><br><span>3</span></p>
                        <p class="second"><span>2</span><br><span>3</span><br><span>4</span></p>
                        <p class="third"><span>4</span><br><span>5</span><br><span>6</span></p>
                        <p class="fourth"><span>4</span><br><span>5</span><br><span>6</span></p>
                    <!-- div.spin ENDS -->
                    </div>
                <!-- div.number-lock ENDS -->
                </div>
    
                <div class="number-lock number-lock-2">
                    <div class="spin">
                        <p class="first"><span>3</span><br><span>4</span><br><span>5</span></p>
                        <p class="second"><span>5</span><br><span>6</span><br><span>7</span></p>
                        <p class="third"><span>7</span><br><span>8</span><br><span>9</span></p>
                        <p class="fourth"><span>9</span><br><span>0</span><br><span>1</span></p>
                    <!-- div.spin ENDS -->
                    </div>
                <!-- div.number-lock ENDS -->
                </div>
    
                <div class="number-lock number-lock-3">
                    <div class="spin">
                        <p class="first"><span>7</span><br><span>8</span><br><span>9</span></p>
                        <p class="second"><span>9</span><br><span>0</span><br><span>1</span></p>
                        <p class="third"><span>1</span><br><span>2</span><br><span>3</span></p>
                        <p class="fourth"><span>4</span><br><span>5</span><br><span>6</span></p>
                    <!-- div.spin ENDS -->
                    </div>
                <!-- div.number-lock ENDS -->
                </div>
    
                <div class="number-lock number-lock-4">
                    <div class="spin">
                        <p class="first"><span>1</span><br><span>2</span><br><span>3</span></p>
                        <p class="second"><span>2</span><br><span>3</span><br><span>4</span></p>
                        <p class="third"><span>4</span><br><span>5</span><br><span>6</span></p>
                        <p class="fourth"><span>4</span><br><span>5</span><br><span>6</span></p>
                    <!-- div.spin ENDS -->
                    </div>
                <!-- div.number-lock ENDS -->
                </div>
                <div class="clear"></div>
                
	            <a href="<?php bloginfo( 'url' ); ?>/home/" class="skip-intro">Skip Intro</a>
            <!-- div.lock-holder ENDS -->
            </div>
            
        <!--section#content ENDS -->
		</section>
        
        <section id="responsive-content">
        	<div class="responsive-header">
            	<a id="logo" class="responsive-logo" href="#">Riddle Room</a>
                
                <div class="clear"></div>
                
                <a class="responsive-menu-show" href="#" style="display:none;">
                	&#9776; Menu
                </a>
                
                <a class="book-now" href="#" style="margin-top:20px;"><span>Read More</span></a>
                <div class="clear"></div>
                
                <ul id="responsive-nav">
                	<li><a href="#" rel="lab-room">Lab Room</a></li>
                	<li><a href="#" rel="egypt-room">Egypt Room</a></li>
                    <li><a href="#" rel="who-can-play">Who Can Play</a></li>
                    <li><a href="#" rel="contact-us">Contact Us</a></li>
                </ul>
            <!-- div.responsive-header ENDS -->
            </div>
            
            <div class="about-us" style="margin-top:280px;">
            	<?php the_field( 'about_us' ); ?>
            </div>
            
            <?php if (get_field( 'lab_room_show' ) == true || get_field( 'egypt_room_show' ) == true): ?>
            <div class="games-on-offer" style="padding-top:40px;">
            	<h2 style="text-align:center;">Games on Offer</h2>

				<?php if (get_field( 'lab_room_show' ) == true): ?>
                <div class="lab-room" style="background-image:none; padding-top:20px;">
                    <?php the_field( 'lab_room_responsive' ); ?>
                    
                    <a class="book-now" href="http://riddleroom.in/lab-room-booking/" style="margin-top:20px;">
                        <span>Book Now</span>
                    </a>
                <!-- div.lab-room ENDS -->
                </div>
                <?php endif; ?>
    
                <?php if (get_field( 'egypt_room_show' ) == true): ?>
                <div class="egypt-room" style="background-image:none; padding-top:20px;">
                    <?php the_field( 'egypt_room_responsive' ); ?>
                    <a class="book-now" href="http://riddleroom.in/egypt-room-booking/" style="margin-top:20px;">
                        <span>Book Now</span>
                    </a>
                <!-- div.egypt-room ENDS -->
                </div>
                <?php endif; ?>   
            <!-- div.games-on-offer ENDS -->
            </div>
            <?php endif; ?>
            
            <div class="faqs" style="width:1000px; margin:0 auto; padding-top:40px; display:none;">
            	<h2 style="text-align:center;">FAQs</h2>
                
				<div class="accordion">
                	<h3 style="font-weight:normal;">How many of us can play the game at a time?</h3>
                    <p style="padding-left:2.8em; font-size:16px;">Starting with a minimum of 2 players, each game room has a capacity of up to 7 players.</p>

                	<h3 style="font-weight:normal;">Is there an age restriction on who can play?</h3>
                    <p style="padding-left:2.8em; font-size:16px;">The game is not recommended for children below 9 years of age. An adult must accompany children in the age group of 9-16 years in order to play the game.</p>
                    
                    <h3 style="font-weight:normal;">If I come with a small team, will I have to share the game room with other teams?</h3>
                    <p style="padding-left:2.8em; font-size:16px;">At the riddle room, we want the mysteries and the clues to keep you on edge rather than the experience of playing with strangers. You will not have to share your game room with other teams provided you meet the minimum requirement of 2 players.</p>
                <!-- div.accordion ENDS -->   
				</div>
			<!-- div.faqs ENDS -->
			</div>

            <?php if (get_field( 'who_can_play_show' ) == true): ?>
                <div class="who-can-play" style="background-image:none; padding-top:40px;">
                	<?php the_field( 'who_can_play_content' ); ?>
                    <div class="clear"></div>
                <!-- div.who-can-play ENDS -->
                </div>
                <?php endif; ?>
                
                <?php if (get_field( 'contact_us_show' ) == true): ?>
                <div class="contact-us" style="padding-top:40px;">
                	<?php the_field( 'contact_us_responsive' ); ?>
               	<!-- div.contact-us ENDS -->
                </div>
                <?php endif; ?>
                
            </div>
        <!-- section.responsive-content ENDS -->
        </section>
<?php get_footer(); ?>        