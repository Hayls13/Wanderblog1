$(document).ready(function() {
    function popup() {
        $("#logindiv").css("display", "block");
    }


    $("button").click(function () {
        $("#popup").toggle();
    });
}