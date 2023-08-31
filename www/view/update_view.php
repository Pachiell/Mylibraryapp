<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>書庫-Library</title>
    <?php include('../view/template/library.php'); ?>
    <div class="Navigator">
        <?php include('../view/template/navi.php'); ?>
    </div>
</head>

<body>
    <link href="./assets/css/update.css" rel="stylesheet">
    <div class="header">
        <img src="./images/updatehome.PNG" alt="" class="header-image">
        <p>読了巻数更新</p>
    </div>

</body>
<br>
<br>
<div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">作品名</label>
    <select class="form-select" id="inputGroupSelect01">
        <option selected>選択して下さい</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <button type="button" class="btn btn-info">検索</button>
</div>
<br>
<div class="booklabel">
    <p><?php echo $userName ?>さんはこの作品を〇〇巻読んでいます</p>
</div>
<p class="box"> 〇〇巻のあらすじ </p>

<!-- 巻数あらすじを読み込む -->

<div class="update">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="更新巻数">
    <button type="button" class="btn btn-primary">更新</button>
</div>