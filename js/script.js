$( document ).ready(function() {

	$('#switchRus').click(function() {
		$.cookie('lang', 'rus', { path: '/'});
		location.reload();
	});

	$('#switchEng').click(function() {
		$.cookie('lang', 'eng', { path: '/'});
		location.reload();
	});
});