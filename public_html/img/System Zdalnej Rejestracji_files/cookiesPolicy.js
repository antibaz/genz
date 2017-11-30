function getCookie(c_name) {
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1) {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1) {
        c_value = null;
    }
    else {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1) {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}

function setCookie(c_name, value, exdays, domain) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);

    if (domain != null && domain != "")
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString() + "; domain=" + domain + "; path=/");
    else
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString() + "; path=/");

    document.cookie = c_name + "=" + c_value;
}