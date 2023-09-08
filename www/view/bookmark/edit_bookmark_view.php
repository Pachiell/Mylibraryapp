<!doctype html>
<html lang="ja">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../_assets/css/edit_bookmark.css" rel="stylesheet">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>レビュー</title>
	<?php include('../../view/_template/lib.php'); ?>
	<div class="Navigator">
		<?php include('../../view/_template/navi.php'); ?>
	</div>

	<p></p>
	<form method="post" action="edit_bookmark.php">
		<input class="btn btn-secondary btn-sm" type="submit" value="削除する">
		<input type="hidden" name="archive_id" value=<?php echo $bookmarkData["archive_id"] ?>>
		<input type="hidden" name="usecase" value="delete">
	</form>
	<p>
		<※ブックマークリストからこの項目を削除します>
	</p>

</head>
<tbody>
	<div class="review">
		<h2>この本をレビュー
			<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
				<path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
			</svg>
		</h2>
		<div class="reviewData">
			<img src=<?php echo $bookmarkData["image_url"] ?>>
			<h4><?php echo $bookmarkData["title"] ?></h4>
		</div>
		<form method="POST" action="edit_bookmark.php">
			<h2>評価点
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
					<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
				</svg>
			</h2>
			<div class="row g-3 align-items-center">
				<div class="col-auto">
					<input type="text" class="form-control" name="review">
				</div>
				<div class="col-auto">
					<span>
						<h3>/5点</h3>
					</span>
				</div>
			</div>
			<p></p>
			<h2>コメント
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
					<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
				</svg>
			</h2>
			<div class="mb-3">
				<textarea class="form-control" name="comment" rows="3"></textarea>
			</div>

			<input class="btn btn-success" type="submit" value="編集完了">
			<input type="hidden" name="archive_id" value=<?php echo $bookmarkData["archive_id"] ?>>
			<input type="hidden" name="usecase" value="edit">
		</form>

	</div>

</tbody>