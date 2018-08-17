$(function() {

	$(".js-photo-responsive").each(function() {
		var 
			th = $(this).height(),
			tw = $(this).width(),
			im = $(this).children('img'),
			ih = im.height(),
			iw = im.width();

		
		if ( ih < iw/2 ) {
			im.removeClass('wh').removeClass('ww');
			im.height('100%');
			// console.log(3);
		}
		else if ( ih > iw ) {
			im.addClass('ww').removeClass('wh').removeClass('www');
			// console.log(1);
		}
		else if ( ih < iw ) { 
			im.addClass('wh').removeClass('ww').removeClass('www');
			// console.log(2);
		}
		
		// console.log(iw);
		// console.log(ih);
		// console.log('-----');

		var 
			nh = im.height(),
	      nw = im.width(),
	      hd = (nh-th) / 2,
	      wd = (nw-tw) / 2;

		if ( nh < nw ) {
			im.css({
				marginLeft: ('-' + wd + 'px'), 
				marginTop: 0,
			});
		}
		else {
			im.css({
				//marginTop: '-' + 5 + '%',
				marginTop: 0,
				marginLeft: 0
			});
		}
	});

	$(".js-photo-gallery-init").simpleLightbox();


});