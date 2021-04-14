var modalElement=$("#modal");
var modalContentElement=$("#modal .my-modal-content");
var close-modal=$()
$(".gg-box > img").click(function(event){
    console.log(event.target.src);
    var imageSource=event.target.src;
    modalContentElement.append("<img style='width:100%' src='" + imageSource + "' />");
    modalElement.show();
});

$("#modal #close-modal").click(function(event){
    alert("jestem tutaj");
    modalContentElement.html("");
});