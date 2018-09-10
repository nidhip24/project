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
	$('[id=city1]').on('click', function(){
        var bb = $('[id=city1]').val();
        alert(bb+"   hha");
    });

    $('#reg-content').hide();
    $('#register').on('click',function(){
    	$('#log-content').hide();
    	$('#reg-content').show();
    	
    });
    $('#aluser').on('click',function(){
    	$('#reg-content').hide();
    	$('#log-content').show();
    	
    });

    $(window).on("load", function() {
        preloaderFadeOutTime = 2000;
        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
    });
});