$(document).ready(function() {
    function popup() {
        $("#logindiv").css("display", "block");
    }


    $("button").click(function () {
        $("#popupL").toggle();
    });

    $("registerbtn").click(function() {
        £("#popupr").toggle();
    })
});