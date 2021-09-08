$(document).ready(function () {
    $(".btn").click(function () {
        var name = $(this).attr("data-filter");
        if (name == "all") {
            $(".course").show();
        }
        else {
            $(".course").not("." + name).hide();
            $(".course").filter("." + name).show();
        };
    });
});