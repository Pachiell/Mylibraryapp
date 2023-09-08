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
	<form method="POST" action="edit_user.php">
		<div class="mb-3">
			<label class="form-label">ユーザー名</label>
			<input type="text" class="form-control" name="name" value="<?php echo $userData["name"]?>">
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">登録メールアドレス</label>
			<input type="text" class="form-control" name="email" value="<?php echo $userData["email"]?>" >
		</div>
		<input class="btn btn-success" type="submit" value="変更する">
		<input type="hidden" name="usecase" value="edit" >
	</form>

</body>