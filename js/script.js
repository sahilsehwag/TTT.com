$(document).ready(function(){

	$(".card").mouseenter(function(){
		$(this).removeClass('mdl-shadow--2dp').addClass('mdl-shadow--8dp')
	}).mouseleave(function() {
		$(this).removeClass('mdl-shadow--8dp').addClass('mdl-shadow--2dp')		
	});	



	$('.sub-items').toggle();
	$('.active > .sub-items').toggle();
	$('.active > .glyphicon').removeClass('glyphicon-triangle-right')
							 .addClass('glyphicon-triangle-bottom');



	$(".index-item").click(function(){
		var span = $(this).children('.glyphicon');

		if(span.hasClass('glyphicon-triangle-right')){
			$(span).removeClass('glyphicon-triangle-right')
				   .addClass('glyphicon-triangle-bottom');
		}else if(span.hasClass('glyphicon-triangle-bottom')){
			$(span).removeClass('glyphicon-triangle-bottom')
				   .addClass('glyphicon-triangle-right');
		}

		var check = $(this).children('.index-item-check');
		check.prop("checked", !check.prop("checked"));
			
		var subitems = $(this).parent().children('.sub-items');
		subitems.slideToggle('fast');	
			
		var checkboxes = subitems.find('input:checked');
		checkboxes.each(function (index) {
			$(this).removeAttr('checked');
		});
	});
});



function addMessage(selector, message, color){
	$(selector).text(message).css("color",color);
}
function addOutline(selector, value){
	$(selector).css('outline', value);
	$(selector).focusin(function(){
		$(this).css('outline','initial');
	});
	// $(selector).effect("shake", {times:7,distance:8}, 700 );
}