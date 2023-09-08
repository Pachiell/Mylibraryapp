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
				<th scope="col">編集</th>
			</tr>
		</thead>
		<tbody>
		<tbody>
			<script src="../_assets/js/archive.js" type="text/javascript"></script>
			<?php foreach ($bookmarks as $bookmark) : ?>
				<tr class="table-secondary">
					<td><?php echo $bookmark["archive_id"] ?></td>
					<td><?php echo $bookmark["review"] ?>点</td>
					<td><?php echo $bookmark["title"] ?></td>
					<td><?php echo $bookmark["authors"] ?></td>
					<td><?php echo $bookmark["publisher"] ?></td>
					<td><?php echo $bookmark["issue_date"] ?></td>
					<td><?php echo $bookmark["category"] ?></td>
					<td><img src=<?php echo $bookmark["image_url"] ?>></td>
					<td><?php echo $bookmark["comment"] ?></td>
					<td>
						<form method="GET" action="edit_bookmark.php">
							<input class="btn btn-success" type="submit" value="編集">
							<input type="hidden" name="archive_id" value=<?php echo $bookmark["archive_id"] ?>>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>