$(document).ready(function () {

    var browserHeight = $(window).height();
    var pageHeight = $(document).height();

    if (pageHeight == browserHeight) {
        $("html").css("height", "100%");
    } else {
        $("html").css("height", "auto");
    }


});