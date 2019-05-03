$(document).ready(function(){

	/*$('header .menuHamburgesa').click(function(){
		$('.menu').toggleClass('mostrar');
	});*/

	$('header .menuHamburgesa').click(function(){

		if ($('i').attr('class') == 'fas fa-bars'){
			$('i').removeClass('fas fa-bars').addClass('fas fa-times');
			$('.menu').addClass('mostrar');

		}else{
			$('i').removeClass('fas fa-times').addClass('fas fa-bars');
			$('.menu').removeClass('mostrar');
		}
	});

});
