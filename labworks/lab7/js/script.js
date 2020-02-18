var interval = 0;
$(document).ready(function(){
	$('button').click(function(){
		// $('#title').css('color', 'red'); single css
		// $('#title').css({'color':'red', 'opacity':'0.5'}); // multiple css
		// $('.content').html('This is my life and this is my choice');

		$('#title').css('opacity', 1);
		interval = setInterval(function(){
			var oldOpacity = $('#title').css('opacity');

			if(oldOpacity == 0){
				clearInterval(interval);
			}
			else{
				$('#title').css('opacity', oldOpacity - 0.01);
			}
		}, 100);

	});
});