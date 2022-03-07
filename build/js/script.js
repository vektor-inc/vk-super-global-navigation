;(function ($, document, window) {
	$(document).ready(function ($) {
			$(this).has('.vksgn-sub').toggleClass("open");
		$('.vksgn-navigation.is_mobile .vksgn-primary-item').click(function () {
			$(this).has('.vksgn-sub').toggleClass("open");
			$(this).siblings().removeClass("open");
		});
	});
})(jQuery, document, window);