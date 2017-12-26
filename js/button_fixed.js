$(document).ready(function () {
	var origOffsetY = $('#priseRDV').offset().top;
    
        function scroll() {
            if ($(window).scrollTop() >= origOffsetY) {
                $('#priseRDV').css("position", "fixed");
                $('#priseRDV').css("top", "0px");
                $('#priseRDV').css("margin-top", "0");
            }
            else {
                $('#priseRDV').css("position", "absolute");
                $('#priseRDV').css("top", "auto");
                $('#priseRDV').css("margin-top", "0px");
            }
        }
    
	document.onscroll = scroll;
});
