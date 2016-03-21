/* 
	Core JavaScript Document for Riddle Room
	by Aakash Bhatia
	Email: akash.bhatia1184@gmail.com
	URI: http://thebrauxelcode.com/
*/

/* -- DROPDOWN MENU START --*/
var timeout = 500;
var flag_close_timer = 0;
var dropdown_item = 0;
var flag_close_timer_sub = 0;
var dropdown_item_sub = 0;
var sub_nav_open = false;
var window_height = $( window ).height();
var header_height = $('header').height();

function dropdown_open() {
	cancel_dropdown_timer();
	dropdown_close();
	dropdown_item = $(this).find('ul').first().css('visibility', 'visible');
	if($(this).find('ul').length != 0)
		$(this).addClass('active');
}

function dropdown_close() {
	if(dropdown_item) {
		dropdown_item.css('visibility', 'hidden');
		$('#nav > li.active').removeClass('active');
	}
}

function dropdown_timer() {
	flag_close_timer = window.setTimeout(dropdown_close, timeout);
}

function cancel_dropdown_timer() {
	if(flag_close_timer) {
		window.clearTimeout(flag_close_timer);
		flag_close_timer = null;
	}
}

function dropdown_open_sub() {
	cancel_dropdown_timer_sub();
	dropdown_close_sub();
	if($(this).find('ul').length != 0)
		$(this).addClass('active');
	dropdown_item_sub = $(this).find('ul').css('visibility', 'visible');
	sub_nav_open = true;
}

function dropdown_close_sub() {
	if(dropdown_item_sub) {
		$('#nav li li.active').removeClass('active');
		dropdown_item_sub.css('visibility', 'hidden');
		sub_nav_open = false;
	}
}

function dropdown_timer_sub() {
	if(!sub_nav_open)
		flag_close_timer_sub = window.setTimeout(dropdown_close_sub, timeout);
}

function dropdown_timer_sub_leave() {
	sub_nav_open = false;
	flag_close_timer_sub = window.setTimeout(dropdown_close_sub, timeout);
}

function cancel_dropdown_timer_sub() {
	if(flag_close_timer_sub) {
		window.clearTimeout(flag_close_timer_sub);
		flag_close_timer_sub = null;
	}
}

function light_fireplace() {
	$('.fire').fadeIn("slow");
	window.setTimeout(light_fireplace, 3000);
}

function unlight_fireplace() {
	$('.fire').fadeOut("slow");
	window.setTimeout(unlight_fireplace, 4500);
}

function light_flame_1() {
	$('.flame-1').fadeIn("slow");
	window.setTimeout(light_flame_1, 50);
}

function unlight_flame_1() {
	$('.flame-1').fadeOut("slow");
	window.setTimeout(unlight_flame_1, 100);
}

function light_flame_2() {
	$('.flame-2').fadeIn("slow");
	window.setTimeout(light_flame_2, 50);
}

function unlight_flame_2() {
	$('.flame-2').fadeOut("slow");
	window.setTimeout(unlight_flame_2, 100);
}

function light_flame_3() {
	$('.flame-3').fadeIn("slow");
	window.setTimeout(light_flame_3, 50);
}

function unlight_flame_3() {
	$('.flame-3').fadeOut("slow");
	window.setTimeout(unlight_flame_3, 100);
}

function light_bunsen_flame() {
	$('.bunsen-flame').fadeIn("slow");
	window.setTimeout(light_bunsen_flame, 50);
}

function unlight_bunsen_flame() {
	$('.bunsen-flame').fadeOut("slow");
	window.setTimeout(unlight_bunsen_flame, 100);
}

function cat_eyes_closed() {
	$('.cat').css('background-position','0px -79px');
	window.setTimeout(cat_eyes_closed, 1000);
}

function cat_eyes_open() {
	$('.cat').css('background-position','0px 0px');
	window.setTimeout(cat_eyes_open, 1000);
}

function cat_eyes_closed() {
	$('.cat').css('background-position','0px -79px');
	window.setTimeout(cat_eyes_closed, 1500);
}

function number_lock_1() {
	$('.number-lock-1 .first').delay(22000).slideUp("slow");
	$('.number-lock-1 .second').delay(23200).slideUp("slow");
	$('.number-lock-1 .third').delay(24400).slideUp("slow");
}
function number_lock_2() {
	$('.number-lock-2 .first').delay(22200).slideUp("slow");
	$('.number-lock-2 .second').delay(23400).slideUp("slow");
	$('.number-lock-2 .third').delay(24600).slideUp("slow");
}
function number_lock_3() {
	$('.number-lock-3 .first').delay(22400).slideUp("slow");
	$('.number-lock-3 .second').delay(23600).slideUp("slow");
	$('.number-lock-3 .third').delay(24800).slideUp("slow");
}
function number_lock_4() {
	$('.number-lock-4 .first').delay(22600).slideUp("slow");
	$('.number-lock-4 .second').delay(23800).slideUp("slow");
	$('.number-lock-4 .third').delay(25000).slideUp("slow");
	$('.landing-page .book-now').delay(25000).fadeIn("slow");
	$('#landing-logo').delay(25000).fadeIn("slow");
	$('.landing-page .poem').delay(24500).css('padding-top','25px');
	$('.landing-page .poem').delay(24500).height(200);
}

function door_1_light() {
	$('.door-1').css('background-position','0px -360px');
	window.setTimeout(door_1_light, 1000);
}

function door_1_unlight() {
	$('.door-1').css('background-position','0px 0px');
	window.setTimeout(door_1_unlight, 1500);
}

$('#nav > li').bind('mouseover', dropdown_open);
$('#nav > li').bind('mouseout',  dropdown_timer);

$('#nav > li > ul li').bind('mouseover', dropdown_open_sub);
$('#nav > li > ul li').bind('mouseout',  dropdown_timer_sub);
$('#nav li > ul, #nav li ul li ul').bind('mouseleave',  dropdown_timer_sub_leave);
/* -- DROPDOWN MENU END --*/