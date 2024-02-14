<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>左カラム サイトテンプレート</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="/rakuten_scr/assets/img/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="container">
        <?php include('sidebar.php'); ?>
        <div class="content">
            <h2>商品一覧</h2>
            <?php include('get_products.php'); ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
