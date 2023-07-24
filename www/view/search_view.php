<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>検索</title>

    <!-- Bootstrap core CSS -->
	<link href="./assets/css/search.css" rel="stylesheet">
    <?php include('../view/template/library.php'); ?>
    <script src="../assets/js/search.js" type="text/javascript">
	</script>
</head>

<body>
<div class="Navigator">
    <?php include('../view/template/navi.php'); ?>
  </div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">書籍に追加する本を検索</label>
  <input type="text" class="form-control inputarea" id="search-input" placeholder="ここに候補を入力してください">
  <button class="btn btn-warning btn-sm" type="button" id="search-button">検 索</button>
	</div>
	<div id="search-result-word">
	</div>
	<table class="table">
		<thead>
			<tr>
			<th scope="col">タイトル</th>
			<th scope="col">著者</th>
            <th scope="col">出版社</th>
			<th scope="col">発行日</th>
			<th scope="col">イメージ</th>
            <th scope="col">書庫へ追加</th>
			</tr>
		</thead>
		<tbody id="library">
		</tbody>
        <tfoot>
        <div id="container"></div>
        </tfoot>
	</table>

</body>

</html>
