$(document).ready(function () {
    $(".bookmark-btn").click(function () {
        var icon = $(this).find(".fa-star");
        if (icon.hasClass("icon-hidden")) {
            icon.removeClass("icon-hidden");
            icon.addClass("icon-shine");
            setTimeout(function () {
                icon.removeClass("icon-shine");
            }, 1000);
        } else {
            icon.addClass("icon-hidden");
            icon.removeClass("icon-shine");
        }
    });
});

$(document).ready(function () {
    $('#fav-table').tablesorter({
        headers: {
            1: { sorter: false },
            7: { sorter: false },
            8: { sorter: false },
        }
    });
});
