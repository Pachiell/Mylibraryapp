const getBooksInfo = async (searcText) => {
  const res = await axios
    .get(`https://www.googleapis.com/books/v1/volumes?q=${searcText}`)
    .catch((err) => {
      alert("書籍情報の読み込みに失敗しました");
    });
  return res.data.items;
};
// async = 非同期
// await = 非同期処理の完了を待つ　async関数内でしか使えない
// `${}`　文字列内に変数を埋め込む書き方
// 1､html（入れる場所）　2､要素の取得（ルート）　3､取得した要素の処理
//axios　ライブラリ fetch関数を簡単にしたやーつ

const createBookslist = async (searcText) => {
  const libraryElement = $("#library");
  // # = cssのid ユニーク（1個）であり他で使用しないこと
  const searchTextResultElement = $("#search-result-word");
  libraryElement.children().remove();
  // children()はlibraryElementの子（例えばtrに対してのth,theadに対してのtr,div内のdiv　下にある階層全て）を指す
  searchTextResultElement.children().remove();
  searchTextResultElement.append(`<h1>「${searcText}」の検索結果</h1>`);
  // append 要素の中に要素を追加する
  const booksInfo = await getBooksInfo(searcText);
  // 対象の検証（コンソール）でデータの中身を見たい時にconsole.warn(引数);
  console.warn(booksInfo);
  if (!booksInfo) {
    alert("書籍情報が見つかりませんでした");
    return;
  }
  booksInfo.forEach((bookInfo) => {
    libraryElement.append(`
        <tr>
          <td><img src="${
            bookInfo?.volumeInfo?.imageLinks?.smallThumbnail
          }" alt=""></td>
            <td>${bookInfo?.volumeInfo?.title} ${
      bookInfo?.volumeInfo?.subtitle || ""
    }</td>
          <td>${bookInfo?.searchInfo?.textSnippet || ""}</td>
          <td>${bookInfo?.volumeInfo?.publishedDate || ""}</td>
          <td>${bookInfo?.volumeInfo?.authors[0] || ""}</td>
        </tr>
      `);
  });
};
// $(function () { 上記だけでは要素を引き取らずに処理を行おうとする為、待つために以下を書く
// on(第一引数のclickのアクション、第二引数で処理)
// $("#search-input")　　　.val();で値が#search-inputにはめ込まれる
$(function () {
  $("#search-button").on("click", function () {
    const searcText = $("#search-input").val();
    if (!searcText) {
      alert("検索ワードの入力してください");
      return;
    }
    createBookslist(searcText);
  });
});
