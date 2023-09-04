<!doctype html>
<html lang="ja">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>書庫-Library</title>
	<?php include('../../view/_template/lib.php'); ?>
	<div class="Navigator">
		<?php include('../../view/_template/navi.php'); ?>
	</div>
</head>

<body>
	<link href="../_assets/css/archive.css" rel="stylesheet">
	<div class="header">
		<img src="../_assets/images/library head.PNG" alt="" class="header-image">
		<p><?php echo $userName ?>さんのアーカイブ</p>
	</div>
</body>
<table class="table table-bordered border-dark" id="fav-table">
	<thead class="table-dark">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">ブックマーク</th>
			<th scope="col">作品名</th>
			<th scope="col">著者</th>
			<th scope="col">出版社</th>
			<th scope="col">発行日</th>
			<th scope="col">カテゴリ</th>
			<th scope="col">イメージ</th>
			<th scope="col">購入画面</th>
			<th scope="col">編集</th>
		</tr>
	</thead>
	<tbody>
		<script src="../_assets/js/archive.js" type="text/javascript"></script>
		<?php foreach ($archives as $archive) : ?>
			<tr class="table-secondary">
				<td><?php echo $archive["id"] ?></td>
				<td><button class="btn bookmark-btn" id="save-archive" data-archive-id=<?php echo $archive["id"] ?>> <i class="fa fa-star <?php echo $archive["archive_id"] == null ? 'icon-hidden' : 'icon-shine' ?>"></i></td>
				<td><?php echo $archive["title"] ?></td>
				<td><?php echo $archive["authors"] ?></td>
				<td><?php echo $archive["publisher"] ?></td>
				<td><?php echo $archive["issue_date"] ?></td>
				<td><?php echo $archive["category"] ?></td>
				<td><img src=<?php echo $archive["image_url"] ?>></td>
				<td><a class="icon-link" href=<?php echo $archive["purchase_url"] ?>>移動する</a></td>
				<td>
					<form method="GET" action="edit_archive.php">
						<input class="btn btn-success" type="submit" value="編集" >
						<input type="hidden" name="id" value=<?php echo $archive["id"] ?>>
					</form>
				</td>

			</tr>
		<?php endforeach ?>
	</tbody>
</table>