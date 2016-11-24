(function ($) {
	$(document).ready(function () {
		$('a[data-lightbox]').map(function () {
			$(this).colorbox({
				// Put custom options here
				loop: false,
				inline: true,
				rel: 'nofollow',
				maxWidth: '95%',
				maxHeight: '95%',
				onClosed: function () {
					$('.embed-container iframe').remove();
				},
				'innerWidth': (($(this).data('width') !== undefined) ? $(this).data('width') : false),
				'innerHeight': (($(this).data('height') !== undefined) ? $(this).data('height') : false)
			});
		});
		$(".video-open").click(function () {
			var $this = $(this);
			var $iframe = '<iframe class="video-frame" src="https://player.vimeo.com/video/' + $this.data("videoid") + '?autoplay=1&badge=0&autopause=0&player_id=0" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
			if (!$("#vimeo_" + $this.data("videoid") + " .embed-container iframe").length) {
				$("#vimeo_" + $this.data("videoid") + " .embed-container").append($iframe);
			}
		});
	});
})(jQuery);