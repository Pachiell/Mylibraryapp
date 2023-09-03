<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>プロフィール</title>
	<?php include('../../view/_template/lib.php'); ?>
</head>

<body>
	<?php include('../../view/_template/navi.php'); ?>
	<form>
		<div class="mb-3">
			<label for="exampleInputname1" class="form-label">ユーザー名</label>
			<input type="name" class="form-control" id="exampleInputname1">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">登録パスワード</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">登録メールアドレス</label>
			<input type="email" class="form-control" id="exampleInputEmail1">
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check </label>
		</div>
		<button type="submit" class="btn btn-primary">変更する</button>
	</form>

</body>