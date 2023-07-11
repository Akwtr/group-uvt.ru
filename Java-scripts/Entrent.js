$(document).ready(function(){
    $(".button").click(function(){
        $(".menu").toggle( 500, "linear", function(){
        console.log("toggle completed");
        });
    });
});