$(document).ready(function(){

//скролл страницы + следящее меню 
$('.menu__link').mPageScroll2id({
	offset: 80,
	Scrollspeed: 1000
});


//открытие модальннных окон


(function(){

	$('#ktcn').on('click',function(e){
	e.preventDefault();
	$('#kitchen').removeClass('close');	
	});

	$('#cbd').on('click',function(e){
	e.preventDefault();
	$('#cupboard').removeClass('close');
	});

	$('#kds').on('click',function(e){
	e.preventDefault();
	$('#kids').removeClass('close');
	});

	$('#hl').on('click',function(e){
		e.preventDefault();
		$('#hall').removeClass('close');
	});
	
	$('.call_me_btn').on('click',function(e){
		e.preventDefault();
		$('#feedback').removeClass('close');
	});		
	
	
})();

	
///вызов модального окна для вывода сообщений


	 var _modalMessage = function(message) {
			
	 	var modal = $('#win'),
	 			modal_mes = modal.find('.popup_message');

	     modal.removeClass('close');
	     modal_mes.empty().text(message);      	
 
		};
//закрытие модальннных окон

(function(){
	$('.btn_close').on('click',function(e){
	e.preventDefault();

	var popup = $(this),
			modal = popup.closest('.modal');

	modal.addClass('close');

});	
	


$('.feedback_form').submit(function() { 
		var th = $(this);
		$.ajax({
			type: 'POST',
			url: 'mail.php', 
			data: th.serialize()
		}).done(function() {
			_modalMessage('Спасибо за заявку! Мы перезвоним Вам в ближайшее время');
			
		});
		return false;
	});


})();	
});