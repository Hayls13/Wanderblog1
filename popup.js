$(document).ready(function() {
    function popup() {
        $("#logindiv").css("display", "block");
    }


    $("loginbtn").click(function () {
        $("#popupL").toggle();
    });

    $("registerbtn").click(function() {
        £("#popupr").toggle();
    })
});