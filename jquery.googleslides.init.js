$j=jQuery.noConflict();

$j('.googleslides').each(function(idx, item){
	var opt_random = $j(item).attr('random') === 'true';
	var opt_caption = $j(item).attr('caption') === 'true';
	var opt_albumlink = $j(item).attr('albumlink') === 'true';

	 $j(item).googleslides({ 	
		userid: $j(item).attr('uid'), 
		albumid: $j(item).attr('aid'),
		authkey: $j(item).attr('authkey'),
		imgmax: $j(item).attr('imgmax'),
		maxresults: $j(item).attr('maxresults'),
		random: opt_random,
		caption: opt_caption,
		albumlink: opt_albumlink,
		time: $j(item).attr('time'),
		fadespeed: $j(item).attr('fadespeed')
	});
});
