//scroll animado a la posicion de un boton
$(function(){
  var suite = $(".form").offset().top - $(".menu").height();
   $(".link-4, .devis").click(function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: suite}, 600);
   })
   $(".logo").click(function() {
    $("html, body").animate({ scrollTop : 0 },600);
   })
}); 