$(function(){
   $(".close-btn").click(function(){
      $(".menu").toggleClass("menu-open");
	   $(this).toggleClass("open-btn");
   });

}); 

$(function(){
	$(".inImg").click(function(){
	.load()	
	});
});




//------------------------------------------------------------------
$("#father").hover(function(){
	$(this).find("#son").show(500);
},function(){
	$(this).find("#son").hide(500);						
						
});

