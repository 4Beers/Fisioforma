$(document).ready(function() {
var $subfixed = $(".subfixed"),
    $clone = $subfixed.before($subfixed.clone().addClass("clone"));

 $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('body').toggleClass("down", (fromTop > 55));
	});
});
