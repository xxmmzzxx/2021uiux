$(document).ready(function(){
     

    //menu
    $(".mainmenu > li").mouseover(function(){
        $(".submenu").stop().slideDown(400);
    });
    $(".mainmenu > li").mouseout(function(){
        $(".submenu").stop().slideUp(400);
    });
})
  
