//Create GLOBAL variable below here on line 2
var global_result;

$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result) {
				console.log('loaded', result);
				global_result = result;
				console.log('global_result', global_result);
				for (var i = 0; i < global_result.feed.entry.length; i++) {
					movie_picture = global_result.feed.entry[i]['im:image'][2]['label'];
			//		console.log("i", i, 'movie_picture', movie_picture);
					title = global_result.feed.entry[i]['im:name']['label'];
					director = global_result.feed.entry[i]['im:artist']['label'];
					console.log(i, title);

					var movie_info = $("<div>", {
					//	style: "border: 1px solid black;",
						class: "col-xs-8 col-md-4",
					});

					var movie_img = $("<img>", {
						src: movie_picture,
					});
					var movie_title = $("<p>",{
						html: title,
					});
					var movie_director = $("<p>",{
						html: director,
					});
					$(movie_info).append(movie_img, movie_title, movie_director);
					$('#main').append(movie_info);
				}
			}
		});
	});
});

