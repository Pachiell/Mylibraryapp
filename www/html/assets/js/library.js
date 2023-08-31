$(document).ready(function () {
    $(".bookmark-btn").click(function () {
        var icon = $(this).find(".fa-star");
        const targetId = $(this).data("archive-id");
        const fetchData = {
            id: targetId || "",
        }
        if (icon.hasClass("icon-hidden")) {
            fetchId("add_bookmark.php", fetchData)
            icon.removeClass("icon-hidden");
            icon.addClass("icon-shine");
            setTimeout(function () {
                icon.removeClass("icon-shine");
            }, 1000);
        } else {
            fetchId("delete_bookmark.php", fetchData)
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

const fetchId = (path, fetchData) => fetch(path,
    {
        method: 'POST', // HTTP-メソッドを指定
        headers: { 'Content-Type': 'application/json' }, // jsonを指定
        body: JSON.stringify(fetchData),
    }
).then(response => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
    .then(res => {
        console.log(res); // やりたい処理
    })
    .catch(error => {
        console.log(error); // エラー表示
    });


