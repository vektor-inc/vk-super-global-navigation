;(function ($, document, window) {
	$(document).ready(function ($) {
		$('.vksgn-navigation.is_mobile .vksgn-primary-item').click(function () {
			$(this).has('.vksgn-sub').toggleClass("open");
			$(this).siblings().removeClass("open");
		});
	});
})(jQuery, document, window);