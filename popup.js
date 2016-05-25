$(document).ready(function() {
    function popup() {
        $("#logindiv").css("display", "block");
    }


    $("#close").click(function () {
        $("img").show();
    });

    $("#login").click(function() {
        $("button").hide();
    })
});