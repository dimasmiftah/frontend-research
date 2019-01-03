jQuery(document).ready(function($) {
	$('.container').sortable();
	$('ul').sortable();
	$('ul').droppable();
	// $('li').draggable();
	
	
	$('button').click(function(event) {
		var li = document.createElement('li');
		li.textContent = $('input').val();
		event.target.previousElementSibling.before(li);
		$('input').val('');
	});
});