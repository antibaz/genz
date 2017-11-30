function are_cookies_enabled() {
    var cookieEnabled = (navigator.cookieEnabled) ? true : false;

    if (typeof (navigator.cookieEnabled) == "undefined" && !cookieEnabled) {
        document.cookie = "MSZcookietest";
        cookieEnabled = (document.cookie.indexOf("MSZcookietest") != -1) ? true : false;
    }
    return (cookieEnabled);
}