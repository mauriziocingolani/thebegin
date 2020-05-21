$(window).on('load', function () {
    if (!getCookie('covid')) {
        $('#covid-modal').modal('show');
    }
});
$(function () {
    $('#covid-dismiss').click(function (event) {
        setCookie('covid', true, 7);
        $('#covid-modal').modal('hide');
    });
    $('#covid-view').click(function (event) {
        setCookie('covid', true, 7);
        $('#covid-modal').modal('hide');
        window.open("https://www.seeporthotel.com/it-IT/covid19");
    });
});
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}