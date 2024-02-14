<?php
// 楽天APIを使って商品情報を取得するロジックを記述

// ここにAPIリクエストを送信して商品情報を取得するコードを記述する

// 例: ダミーデータを使って表示する
$dummy_data = array(
    array('name' => '商品1', 'price' => 1000),
    array('name' => '商品2', 'price' => 2000),
    array('name' => '商品3', 'price' => 1500)
);

// 商品情報を表示
foreach ($dummy_data as $product) {
    echo "<div class='product'>";
    echo "<h3>{$product['name']}</h3>";
    echo "<p>価格: {$product['price']}円</p>";
    echo "</div>";
}
?>
