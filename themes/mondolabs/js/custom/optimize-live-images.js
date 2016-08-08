// Optimize images on live site only
$("img[src*='http://live-mondolabs.pantheon.io']").each(function () {
	var oldsrc = 'http://live-mondolabs.pantheon.io';
	var newsrc = 'http://i1.wp.com/live-mondolabs.pantheon.io';

	$(this).prop('src', function () { 
		return this.src.replace(oldsrc, newsrc); 
	});

});

$("img[src*='https://live-mondolabs.pantheon.io']").each(function () {
	var oldsrc = 'https://live-mondolabs.pantheon.io';
	var newsrc = 'http://i1.wp.com/live-mondolabs.pantheon.io';

	$(this).prop('src', function () { 
		return this.src.replace(oldsrc, newsrc); 
	});

});

$("img[src*='http://mondolabs.com']").each(function () {
	var oldsrc = 'http://mondolabs.com';
	var newsrc = 'http://i1.wp.com/mondolabs.com';

	$(this).prop('src', function () { 
		return this.src.replace(oldsrc, newsrc); 
	});

});

$("img[src*='http://www.mondolabs.com']").each(function () {
	var oldsrc = 'http://www.mondolabs.com';
	var newsrc = 'http://i1.wp.com/www.mondolabs.com';

	$(this).prop('src', function () { 
		return this.src.replace(oldsrc, newsrc); 
	});

});
