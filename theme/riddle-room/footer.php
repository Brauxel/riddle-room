		<?php if( !is_page_template( 'landing-page.php' ) ):  ?>
        <!--section#content ENDS -->
        </section>
        <?php endif; ?>
	<?php if( !is_page_template( 'who-can-play.php' ) || !is_page_template( 'booking-form.php' ) ):  ?>
    <!-- div.wrap ENDS -->
	</div>
    <?php endif; ?>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/core.js"></script>
    
<style type="text/css">
.ab-next-step, .ab-mobile-next-step, .ab-mobile-prev-step, li.ab-step-tabs.active div, .picker__frame, .ab-first-step .ab-week-days li label, .ab-columnizer .ab-available-hour:hover .ab-hour-icon span, .ab-time-next, .ab-time-prev, .ab-to-first-step, .bookly-btn-submit, .btn-apply-coupon, .ab-to-third-step, .ab-final-step, a.ab-to-second-step, .ab-to-second-step, .ab-to-fourth-step, a.ab-to-fourth-step, .ab-columnizer .ab-available-hour:hover .ab-hour-icon span, .ab-time-next, .ab-time-prev, .ab-to-first-step, .bookly-btn-submit, .btn-apply-coupon, .ab-to-third-step, .ab-final-step, a.ab-to-second-step, .ab-to-second-step, .ab-to-fourth-step, a.ab-to-fourth-step {
	background-color:#527D99 !important;
}

.ab-bold, .ab-desc {
	color:#fff !important;
}

.ab-columnizer .ab-available-day {
	color:#333 !important;
}
.ab-columnizer .ab-available-hour:hover {
	background-color:#527D99 !important;
}
</style>
    

    <?php wp_footer(); ?>
</body>
</html>
