(function($) {
	$('#requestButton').live('click', function() {
		$('#response').html('Loading...');
		$.ajax({
			url: 'receiver.php',
			data: { 
				url: encodeURIComponent($('#url').val()),
				data: encodeURIComponent($('#request').val().split("\n").join("&")),
				method: $('input[name="method"]:checked').val()
			},
			success: function(data) {
				$('#response').html(data);
			},
			error: function() {
				console.log('error');
			}
		});
	});
})(jQuery);