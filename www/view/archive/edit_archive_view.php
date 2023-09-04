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
    <link href="../_assets/css/library.css" rel="stylesheet">
    <link href="../_assets/css/edit_library.css" rel="stylesheet">
    <div class="header">
        <img src="./images/library head.PNG" alt="" class="header-image">
        <p><?php echo $userName ?>さんのアーカイブ</p>
    </div>
</body>
<table class="table table-bordered border-dark" id="fav-table">
    <tbody>
        <script src="../_assets/js/edit_library.js" type="text/javascript"></script>
        <form method="POST" action="edit_archive.php" class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">作品名</label>
                <input type="text" class="form-control" name="title" value="<?php echo $archiveData["title"] ?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">著者</label>
                <input type="text" class="form-control" name="authors" value="<?php echo $archiveData["authors"] ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">出版社</label>
                <input type="text" class="form-control" name="publisher" value="<?php echo $archiveData["publisher"] ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">発行日</label>
                <input type="text" class="form-control" name="issue_date" value="<?php echo $archiveData["issue_date"] ?>">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">画像URL</label>
                <input type="text" class="form-control" name="image_url" value="<?php echo $archiveData["image_url"] ?>">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">カテゴリ</label>
                <input type="text" class="form-control" name="category" value="<?php echo $archiveData["category"] ?>">
            </div>
            <div class="col-12">
                <input class="btn btn-success" type="submit" value="変更">
                <input type="hidden" name="id" value=<?php echo $archiveData["id"] ?>>
                <input type="hidden" name="usecase" value="edit">
            </div>
        </form>
        <form method="POST" action="edit_archive.php">
            <input class="btn btn-danger" type="submit" value="削除">
            <input type="hidden" name="id" value=<?php echo $archiveData["id"] ?>>
            <input type="hidden" name="usecase" value="delete">
        </form>
    </tbody>
</table>