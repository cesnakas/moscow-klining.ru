$(document).ready(function () {
$('.poisk').on('click', function(e) {
       $('#title-search').addClass('active');
$('body').addClass('active-back');
    });
 $('.close-search').on('click', function(e) {
       $('#title-search').removeClass('active');
$('body').removeClass('active-back');
    });
    var touch = $('#touch-menu');
    var menu = $('#top_menu');
 
    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
  var touch3 = $('.strelka-267');

    $(touch3).on('click', function(e) {
        e.preventDefault();
        $(this).parents('.cena').toggleClass('active');
    });
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 990 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
 $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 0.7}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
$("#lightSlider").lightSlider({ item:1, thumbItem:3, gallery: true, thumbMargin: 15, loop:true });
	$('.plus').click(function() {

});
	$('.calc_razdel .knopka').click(function(){
var h1_name=$('.name_slid').text();

$('body').on('click', '#fb_close_FID2', function () {
		$('#USLUG_FID21').val($.trim(h1_name) +'\n Цена:'+ price +'руб.'+'\n Площадь:'+class_count+'кв.');
});
});
   $('.minus').click(function () {
        var $input = $(this).parents('.kol_tovar_plus_minus').find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parents('.kol_tovar_plus_minus').find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
	$('.form-control').change(function(){
total_sum=0;
class_count=$(this).val();
id_attr=$(this).attr('id');
if(id_attr=='compareid_108'){
	if(class_count<=500){
		cena=50;
	}
	if(500<=class_count && class_count<=1500){
		cena=40;
	}
	if(1500<=class_count && class_count<=3000){
		cena=35;
	}
	if(class_count>=3000){
		cena=30;
	}
}
if(id_attr=='compareid_109'){
	if(class_count<=500){
		cena=90;
	}
	if(500<=class_count && class_count<=1500){
		cena=80;
	}
	if(1500<=class_count && class_count<=3000){
		cena=60;
	}
	if(class_count>=3000){
		cena=40;
	}
}
if(id_attr=='compareid_110'){
	if(class_count<=500){
		cena=60;
	}
	if(500<=class_count && class_count<=1500){
		cena=50;
	}
	if(1500<=class_count && class_count<=3000){
		cena=45;
	}
	if(class_count>=3000){
		cena=40;
	}
}
if(id_attr=='compareid_111'){
	if(class_count<=500){
		cena=100;
	}
	if(500<=class_count && class_count<=1500){
		cena=90;
	}
	if(1500<=class_count && class_count<=3000){
		cena=70;
	}
	if(class_count>=3000){
		cena=50;
	}
}
if(id_attr=='compareid_112'){
	if(class_count<=500){
		cena=90;
	}
	if(500<=class_count && class_count<=1500){
		cena=70;
	}
	if(1500<=class_count && class_count<=3000){
		cena=50;
	}
	if(class_count>=3000){
		cena=40;
	}
}
if(id_attr=='compareid_113'){
	if(class_count<=500){
		cena=50;
	}
	if(500<=class_count && class_count<=1500){
		cena=40;
	}
	if(1500<=class_count && class_count<=3000){
		cena=30;
	}
	if(class_count>=3000){
		cena=20;
	}
}
if(id_attr=='compareid_114'){
	if(class_count<=100){
		cena=50;
	}
	if(100<=class_count && class_count<=500){
		cena=45;
	}
	if(500<=class_count && class_count<=3000){
		cena=40;
	}
	if(class_count>=3000){
		cena=35;
	}
}
if(id_attr=='compareid_115'){
	if(class_count<=100){
		cena=90;
	}
if(100<=class_count && class_count<=500){
		cena=70;
	}
	if(500<=class_count && class_count<=1000){
		cena=50;
	}
	if(class_count>=1000){
		cena=35;
	}

}
 price=class_count*cena;
		if (class_count==0){
$(this).parents('tr').find('.summ_ed').text("");

var uslug=$(this).parents('tr').find('.uslugi_name').removeClass('vibor');
		}else{
$(this).parents('tr').find('.summ_ed').text(price);
var razdel=(price+'').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
$(this).parents('.calc_razdel').find('.summ_ed').text(razdel);
var uslug=$(this).parents('tr').find('.uslugi_name').addClass('vibor');

$('.spisok').html("");
}
$('.summ_ed').each(function(){

      total_sum+=Number($(this).text());
  });
var car=(total_sum+'').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
$('#total_sum').text(car);
});
	$('#fb_close_FID4').click(function(){
$('#EMPTY_TEXTFID4').text("");
$('.vibor').each(function( index ) {
pr=$(this).parents('tr').find('.form-control').val();
sum1=$(this).parents('tr').find('.summ_ed').text();
  $('#EMPTY_TEXTFID4').append("Услуга: " + $( this ).text() + " <b>за</b> " + pr + "кв.м. (цена " + sum1 +" руб. )"+ '\n');
});
if($("#COMENT_FID41").val().length>0) {
$('.spisok').html("");
}else{
if($(".vibor").length>0) {
$('#EMPTY_TEXTFID4').append("<hr> Всего:"+ $('#total_sum').text()+" руб.");
}else{
	$('.spisok').html("<p style='color:#ff852a;text-align:center;border:1px solid #dddddd;padding:5px;'><b>Выберите услугу или заполните поле Ваш комментарий</b></p><br>")
return false;
}
}

});
	$('.owl-carousel2').owlCarousel({
	
		margin:20, //Отступ от картино если выводите больше 1
		nav:true,
navText:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
autoplayHoverPause:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
$('.carusel-say').owlCarousel({

		margin:20, //Отступ от картино если выводите больше 1
		nav:true,
navText:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
autoplayHoverPause:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});
$('.klineri').owlCarousel({
		margin:20, //Отступ от картино если выводите больше 1
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
autoplayHoverPause:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
});

