$( document ).ready(function(){
	$('.sidenav').sidenav();
	$('.collapsible').collapsible();
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

    $('#reg-content').hide();
    $('#register').on('click',function(){
    	$('#log-content').hide();
    	$('#reg-content').show();
    	
    });
    
    $('.dropdown-trigger').dropdown();

    
});