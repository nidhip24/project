$( document ).ready(function(){
	$('.sidenav').sidenav();
	$('.modal').modal();
	$('.dropdown-trigger').dropdown();
	$('.parallax').parallax();
	$('.pushpin-demo-nav').each(function() {
		var $this = $(this);
		var $target = $('#' + $(this).attr('data-target'));
		$this.pushpin({
			top: $target.offset().top,
			bottom: $target.offset().top + $target.outerHeight() - $this.height()
		});
	});
	$(".city").on('click', function(){
        var bb = $("#c1").val();
        alert(bb+"   hha");
    });
});