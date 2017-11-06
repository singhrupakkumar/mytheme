jQuery(function($){'use strict',//#main-slider
$(function(){$('#main-slider.carousel').carousel({interval:8000});});$('.accordion-toggle').on('click',function(){$(this).closest('.panel-group').children().each(function(){$(this).find('>.panel-heading').removeClass('active');});$(this).closest('.panel-heading').toggleClass('active');});new WOW().init();$(window).load(function(){'use strict';var $portfolio_selectors=$('.portfolio-filter >li>a');var $portfolio=$('.portfolio-items');$portfolio.isotope({itemSelector:'.portfolio-item',layoutMode:'fitRows'});$portfolio_selectors.on('click',function(){$portfolio_selectors.removeClass('active');$(this).addClass('active');var selector=$(this).attr('data-filter');$portfolio.isotope({filter:selector});return false;});});var form=$('#main-contact-form');form.submit(function(event){event.preventDefault();var form_status=$('<div class="form_status"></div>');$.ajax({url:$(this).attr('action'),beforeSend:function(){form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());}}).done(function(data){form_status.html('<p class="text-success">'+ data.message+'</p>').delay(3000).fadeOut();});});$('.gototop').click(function(event){event.preventDefault();$('html, body').animate({scrollTop:$("body").offset().top},500);});$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
$(window).scroll(function() {
if ($(this).scrollTop() > 170){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});
  $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(150).css({'overflow':'visible'});
});
$(".nav li a").filter(function(){
    return this.href == location.href.replace(/#.*/, "");
}).addClass("active1").closest('ul').parent().addClass('new');
});






   










