/**
 * Created by Hayley on 21/05/2016.
 */

function popup() {
    $("#logindiv").css("display", "block");
}
$("#login #cancel").click(function() {
    $(this).parent().parent().hide();
});
$("#onclick").click(function() {
    $("#contactdiv").css("display", "block");
});
$("#contact #cancel").click(function() {
    $(this).parent().parent().hide();
});
