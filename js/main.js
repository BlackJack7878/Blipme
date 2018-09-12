jQuery(document).ready(function($) {
	
	var s2 = '2s';
	var s3 = '3s';

	if ($(window).width() < 770) {
		s2 = '1.2s';
		s3 = '1.6s';
	}

	$('.anim-left').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Left ' + s2 + ' forwards');
		});
	}, {offset: '90%'});
	$('.anim-right').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Right ' + s2 + ' forwards');
		});
	}, {offset: '90%'});

	$('.anim-left-slow').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Left ' + s3 + ' forwards');
		});
	}, {offset: '90%'});
	$('.anim-right-slow').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Right ' + s3 + ' forwards');
		});
	}, {offset: '90%'});

	$('.anim-rotate').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Rotate ' + s2 + ' forwards');
		});
	}, {offset: '90%'});
	$('.anim-spin').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Spin ' + s2 + ' forwards');
		});
	}, {offset: '90%'});

	$('.anim-spin-right').waypoint(function(e, direction){
		$(this['element']).each(function(index, el) {
			$(this).css('animation', 'Spin-Right ' + s2 + ' forwards');
		});
	}, {offset: '90%'});

});