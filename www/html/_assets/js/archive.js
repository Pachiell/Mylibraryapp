$(document).ready(function () {
  $(".bookmark-btn").click(function () {
    var icon = $(this).find(".fa-star");
    const targetId = $(this).data("archive-id");
    const fetchData = {
      id: targetId || "",
    };
    if (icon.hasClass("icon-hidden")) {
      fetchBookmark("../bookmark/add_bookmark.php", fetchData);
      icon.removeClass("icon-hidden");
      icon.addClass("icon-shine");
      setTimeout(function () {
        icon.removeClass("icon-shine");
      }, 1000);
    } else {
      fetchBookmark("../bookmark/delete_bookmark.php", fetchData);
      icon.addClass("icon-hidden");
      icon.removeClass("icon-shine");
    }
  });
});

$(document).ready(function () {
  $("#fav-table").tablesorter({
    headers: {
      1: { sorter: false },
      7: { sorter: false },
      8: { sorter: false },
      9: { sorter: false },
    },
  });
});

const fetchBookmark = (path, fetchData) =>
  fetch(path, {
    method: "POST", // HTTP-メソッドを指定
    headers: { "Content-Type": "application/json" }, // jsonを指定
    body: JSON.stringify(fetchData),
  })
    .then((response) => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
    .then((res) => {
      alert("ブックマーク更新に成功しました。"); // やりたい処理
    })
    .catch((error) => {
      alert("ブックマーク更新に失敗しました。"); // エラー表示
    });
