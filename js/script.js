$(document).ready(function(){
   $('.sidenav').sidenav();
   $('.modal').modal();
   $('.parallax').parallax();
   $('.dropdown-trigger').dropdown({coverTrigger:false});
   $('.carousel').carousel();
   $('select').formSelect();
 });


function copyToClipboard(text) {
   const elem = document.createElement('textarea');
   elem.value = text;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
   document.body.removeChild(elem);
};

$(function() {
    $('#btns').removeClass('hide');
    $(window).scroll(function() {
        console.log('scrolling ', $(window).scrollTop(), $(document).height());
        if($(window).scrollTop() >= 2 && $(window).scrollTop() <= ($(document).height() - 500)) {
        	$('#btns').addClass('hide');
        }
        else if($(window).scrollTop() <= 2 && $(window).scrollTop() <= ($(document).height() - 500)) {
        	$('#btns').removeClass('hide');
        }
    });
});

$('#contact').click(function(){
  $('#btns').addClass('hide');
})
