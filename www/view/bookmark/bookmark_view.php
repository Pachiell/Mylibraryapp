<!doctype html>
<html lang="ja">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ブックマーク</title>
	<?php include('../../view/_template/lib.php'); ?>
	<div class="Navigator">
		<?php include('../../view/_template/navi.php'); ?>
	</div>
</head>

<body>
	<table class="table table-bordered border-dark" id="fav-table">
		<thead class="table-dark">
			<tr>
				<th scope="col">No.</th>
				<th scope="col">レビュー</th>
				<th scope="col">作品名</th>
				<th scope="col">著者</th>
				<th scope="col">出版社</th>
				<th scope="col">発行日</th>
				<th scope="col">カテゴリ</th>
				<th scope="col">イメージ</th>
				<th scope="col">コメント</th>
			</tr>
		</thead>
		<tbody>