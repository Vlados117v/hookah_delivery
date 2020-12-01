jQuery(function () {

 var wrap3 = $('#warning-win'),
 modal3 = $('.cover-warning, .win-warning-content');
 if (!$.cookie('was5') ) {
 modal3.fadeIn();
 }
$('#b_yes').click(function () {
 $.cookie('was5', true, {
 expires: 365,
 path: '/'
 });
 $(modal3).fadeOut();
});
$('#b_no').click(function () {
 $('.text-warning').css("visibility", "visible").fadeIn(2200);
 $.removeCookie('was5');
});
 
});