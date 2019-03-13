M.AutoInit();

//Código para inicializar el carrusel del index
$(document).ready(function(){
	$('.carousel').carousel();
});

//Código para establecer el intervalo del carrusel en 3 segundos
setInterval(function() {
    $('.carousel').carousel('next');
}, 3000); // Cada 3 segundos

//Código para incializar el Slider del sitio de catalogo
$(document).ready(function(){
    $('.slider').slider();
});

//Código para establecer el intervalo del slider en 5 segundos
setInterval(function() {
    $('.slider').slider('next');
}, 5000); // Cada 5 segundos