<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ブックアーカイブ</title>
  <?php include('../view/template/library.php'); ?>

  <!-- Custom styles for this template -->
  <link href="../html/assets/css/blog.css" rel="stylesheet">

  <script>
    var res = await fetch('https://www.googleapis.com/books/v1/volumes?q=鬼滅');
    var data = await res.json();

    console.log(data); // "鬼滅" と付く本のデータが表示される
  </script>
  <link href="./assets/css/index.css" rel="stylesheet">
</head>

<body>
  <?php include('../view/template/navi.php'); ?>
  <div class="header">
    <img src="./images/dksjfioajoigajsgoi.PNG" alt="" class="header-image">
    <p><?php echo $userName ?>さんのアーカイブ</p>
  </div>
  <div class="center">
    <p>最新トピックス</p>
    <div class="center-topics">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action list-group-item-info">The current button</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-light">A second item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-info">A third button item</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-light">A fourth button item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A five button item</a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-light">A six button item</a>
      </div>
    </div>
    <div class="center-topics">
      <img src="./images/ddsgkos@cxvjasd.PNG" class="rounded float-start" alt="...">
      <img src="./images/f,ldspgiosdgoiz00z.PNG" class="rounded float-end" alt="...">
    </div>
</body>

</html>