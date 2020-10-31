$(function() {
	$('.js-on-change-link').on('change.link', function() {
		location.href = this.value;
	});
});