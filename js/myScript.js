	$(document).ready(function(){
		$('.soc_panel_wrapper').hover(function (){
			$(this).find('.soc_panel').css('opacity',1);
		}, function(){
			$(this).find('.soc_panel').css('opacity',0);
		});
	})