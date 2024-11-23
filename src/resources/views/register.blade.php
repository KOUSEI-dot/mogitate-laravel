<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <header>

            <h1 class="logo">mogitate</h1>
        </header>
        <main>
            <h2 class="title">商品登録</h2>
           <form id="product-form">
    <!-- 商品名 -->
    <div class="form-group">
        <label for="product-name">商品名 <span class="required">必須</span></label>
        <input type="text" id="product-name" placeholder="商品名を入力" required>
        <small class="error-message" style="color: red; display: none;">商品名を入力してください。</small>
    </div>
    <!-- 値段 -->
    <div class="form-group">
        <label for="price">値段 <span class="required">必須</span></label>
        <input type="number" id="price" placeholder="値段を入力" required min="1">
        <small class="error-message" style="color: red; display: none;">値段を以上で入力してください。<p>数値で入力してください。</p><p>0-10000円以内で入力してください</p></small>
    </div>
    <!-- 商品画像 -->
    <div class="form-group">
        <label for="product-image">商品画像 <span class="required">必須</span></label>
        <input type="file" id="product-image" required>
        <small class="error-message" style="color: red; display: none;">商品画像を登録してください。<p>「.png」または「.jpeg」形式でアップロードしてください</p></small>
    </div>
    <!-- 季節 -->
    <div class="form-group">
        <label>季節 <span class="required">必須</span> <span class="hint">複数選択可</span></label>
        <div class="radio-group">
            <label><input type="checkbox" name="season" value="春"> 春</label>
            <label><input type="checkbox" name="season" value="夏"> 夏</label>
            <label><input type="checkbox" name="season" value="秋"> 秋</label>
            <label><input type="checkbox" name="season" value="冬"> 冬</label>
        </div>
        <small class="error-message" style="color: red; display: none;">季節を選択してください。</small>
    </div>
    <!-- 商品説明 -->
    <div class="form-group">
        <label for="description">商品説明 <span class="required">必須</span></label>
        <textarea id="description" placeholder="商品の説明を入力" required></textarea>
        <small class="error-message" style="color: red; display: none;">商品説明を入力してください。<p>120文字以内で入力してください</p></small>
    </div>
    <!-- ボタン -->
    <div class="form-buttons">
        <button type="button" class="back-btn">戻る</button>
        <button type="submit" class="submit-btn">登録</button>
    </div>
</form>

<script>
    document.getElementById('product-form').addEventListener('submit', function (event) {
        // バリデーションエラーをリセット
        document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');

        let isValid = true;

        // 商品名チェック
        const productName = document.getElementById('product-name');
        if (!productName.value.trim()) {
            productName.nextElementSibling.style.display = 'block';
            isValid = false;
        }

        // 値段チェック
        const price = document.getElementById('price');
        if (!price.value || price.value <= 0) {
            price.nextElementSibling.style.display = 'block';
            isValid = false;
        }

        // 商品画像チェック
        const productImage = document.getElementById('product-image');
        if (!productImage.value) {
            productImage.nextElementSibling.style.display = 'block';
            isValid = false;
        }

        // 季節チェック
        const seasons = document.querySelectorAll('input[name="season"]:checked');
        if (seasons.length === 0) {
            document.querySelector('.radio-group').nextElementSibling.style.display = 'block';
            isValid = false;
        }

        // 商品説明チェック
        const description = document.getElementById('description');
        if (!description.value.trim()) {
            description.nextElementSibling.style.display = 'block';
            isValid = false;
        }

        // フォーム送信を停止
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>
