$(function() {
	
	// Collapse for nav
	$('.collapse').collapse('hide');

	// Tooltips
	$('[rel="tooltip"]').tooltip();

	// Dropdowns
	$('.dropdown-toggle').dropdown()
	
	// Comment Controls (show on hover)
	$('.comment .controls, .comment .comment-meta').animate({
		"opacity": "0"
	},0);
	$('.comment').mouseenter(function(){
		$(this).find('.controls, .comment-meta').animate({
			"opacity": "1.0"
		});
	});
	$('.comment').mouseleave(function(){
		$(this).find('.controls, .comment-meta').animate({
			"opacity": "0.0"
		});
	});	

	// Toggle Comments Popover
	


	$("#comments-toggle").click(function() {
		$("#comments-popover").fadeToggle("slow", "linear");
	});

});