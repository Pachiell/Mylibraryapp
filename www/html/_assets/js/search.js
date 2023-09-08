let booksInfo;

const getBooksInfo = async (searcText) => {
  const res = await axios
    .get(`https://www.googleapis.com/books/v1/volumes?q=${searcText}`)
    .catch((err) => {
      alert("書籍情報の読み込みに失敗しました");
      console.warn(err);
    });
    
  return res.data.items;
};

const createBookslist = async (searcText) => {
  const libraryElement = $("#library");
  const searchTextResultElement = $("#search-result-word");
  libraryElement.children().remove();
  searchTextResultElement.children().remove();
  searchTextResultElement.append(`<h1>「${searcText}」の検索結果</h1>`);
  booksInfo = await getBooksInfo(searcText);
  console.warn(booksInfo);
  if (!booksInfo) {
    alert("書籍情報が見つかりませんでした");
    return;
  }
  booksInfo.forEach((bookInfo) => {
    libraryElement.append(`
          <tr id=${bookInfo?.id}>
            <td>${bookInfo?.volumeInfo?.title} ${
      bookInfo?.volumeInfo?.subtitle || ""
    }</td>
            <td>${bookInfo?.volumeInfo?.authors[0] || ""}</td>
            <td>${bookInfo?.volumeInfo?.publisher || ""}</td>
            <td>${bookInfo?.volumeInfo?.publishedDate || ""}</td>
            <td><img src="${
              bookInfo?.volumeInfo?.imageLinks?.smallThumbnail
            }" alt=""></td>
            <td><input type="button" id="add-archive" value="追加" class="btn"></td>
          </tr>
        `);
  });
};

$(function () {
  $("#search-button").on("click", function () {
    const searcText = $("#search-input").val();
    if (!searcText) {
      alert("検索ワードの入力してください");
      return;
    }
    createBookslist(searcText);
  });

  $(document).on("click", "#add-archive", function () {
    const targetId = $(this).parent().parent().attr("id");
    const targetBookInfo = booksInfo.find(
      (bookInfo) => bookInfo.id === targetId
    );

    const fetchData = {
      title: `${targetBookInfo?.volumeInfo?.title} ${
        targetBookInfo?.volumeInfo?.subtitle || ""
      }`,
      authors: targetBookInfo?.volumeInfo?.authors[0] || "",
      publisher: targetBookInfo?.volumeInfo?.publisher || "",
      issue_date: targetBookInfo?.volumeInfo?.publishedDate || "",
      image_url:
        targetBookInfo?.volumeInfo?.imageLinks?.smallThumbnail ||
        targetBookInfo?.volumeInfo?.imageLinks?.thumbnail ||
        "(Not Found)",
      id: targetBookInfo?.id || "",
      purchase_url: targetBookInfo?.volumeInfo?.infoLink || "",
    };

    fetch("../archive/add_archive.php", {
      method: "POST", // HTTP-メソッドを指定
      headers: { "Content-Type": "application/json" }, // jsonを指定
      body: JSON.stringify(fetchData),
    })
      .then((response) => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
      .then((res) => {
        alert("アーカイブ保存に成功しました。"); // やりたい処理
      })
      .catch((error) => {
        alert("アーカイブ保存に失敗しました。"); // エラー表示
      });
  });
});
