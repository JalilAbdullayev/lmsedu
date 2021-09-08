$(document).ready(function () {
    $(".blog").slice(0, 6).show();
    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".blog:hidden").slice(0, 6).slideDown();
        if ($(".blog:hidden").length == 0) {
            $("#loadMore").hide();
        }
    });
});

$(document).ready(function () {
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#blogs .blog").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});