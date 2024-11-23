<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
    <link rel="stylesheet" href="kiwi.css">
</head>
<body>
    <header>
        <h1>mogitate</h1>
        <nav>
            <a href="index.html">商品一覧</a> ＞ キウイ
        </nav>
    </header>
    <main>
        <div class="product-detail">
            <div class="product-image">
                <img src="kiwi.jpg" alt="キウイ">
                <input type="file" id="fileUpload">
            </div>
            <form id="productForm">
                <label for="name">商品名</label>
                <input type="text" id="name" value="キウイ">

                <label for="price">値段</label>
                <input type="number" id="price" value="800">

                <label>季節</label>
                <div class="season-options">
                    <label><input type="checkbox" value="春" checked> 春</label>
                    <label><input type="checkbox" value="夏" checked> 夏</label>
                    <label><input type="checkbox" value="秋"> 秋</label>
                    <label><input type="checkbox" value="冬"> 冬</label>
                </div>

                <label for="description">商品説明</label>
                <textarea id="description">爽やかな香りと上品な甘みが特徴的なキウイは、大人から子どもまで人気のフルーツです。</textarea>

                <div class="actions">
                    <button type="button" id="saveBtn">変更を保存</button>
                    <button type="button" id="deleteBtn">削除</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
