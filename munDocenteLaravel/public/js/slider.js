$(document).ready(function(){
	//$('#slider div:first-child').fadeOut(0)
	//	.next('div').fadeIn(2000)
	//	.end().appendTo('#slider');}, 5000);
    // Activate Carousel
    $("#slider").carousel({
    	interval: 4000
    });
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#slider").carousel(0);
    });
    $(".item2").click(function(){
        $("#slider").carousel(1);
    });
    $(".item3").click(function(){
        $("#slider").carousel(2);
    });
    $(".item4").click(function(){
        $("#slider").carousel(3);
    });
    $(".item5").click(function(){
        $("#slider").carousel(4);
    });
    $(".item6").click(function(){
        $("#slider").carousel(5);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#slider").carousel("prev");
    });
    $(".right").click(function(){
        $("#slider").carousel("next");
    });
});