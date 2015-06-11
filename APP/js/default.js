(function ($) {
	
	setTimeout(function(){ 
		$(".preLoader").fadeOut(function (argument) {
			$(".myApplication").fadeIn();
		});
	}, 1300);


})(jQuery);