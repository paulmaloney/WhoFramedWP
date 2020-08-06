jQuery(document).ready(function( $ ) {
$('iframe').wrap('<div class="whoframed"/>');
$('.whoframed').css({
	'position' : 'relative',
	'padding-bottom' : '56.25%',
	'padding-top' : '25px',
	'height' : '0'
});
$('.whoframed iframe').css({
	'position' : 'absolute',
	'top' : '0',
	'left' :'0',
	'width' : '100%',
	'height' : '100%'
});
});
