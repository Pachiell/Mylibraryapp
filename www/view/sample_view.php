<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>書籍情報</title>

	<!-- Bootstrap core CSS -->
	<?php include('../view/template/library.php'); ?>
	<script src="../assets/js/sample.js" type="text/javascript">
	</script>
</head>

<body>
	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="検索したい書籍情報を入力してちょん" value="" id="search-input">
		<button class="btn btn-outline-secondary" type="button" id="search-button">検索</button>
	</div>
	<div id="search-result-word">
	</div>
	<table class="table">
		<thead>
			<tr>
			<th scope="col"></th>
				<th scope="col">タイトル</th>
				<th scope="col">プロローグ</th>
				<th scope="col">発行日</th>
				<th scope="col">著者</th>
			</tr>
		</thead>
		<tbody id="library">
		</tbody>
	</table>

</body>

</html>
