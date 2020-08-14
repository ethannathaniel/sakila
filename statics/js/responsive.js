$(function() {
    $(".toggle").on("click", function(){
        
        if($(".item").hasClass("activa")){
            $(".item").removeClass("activa");
        }
        else{
            $(".item").addClass("activa");
        }
    })
});