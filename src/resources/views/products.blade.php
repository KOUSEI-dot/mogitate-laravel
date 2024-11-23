<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品アプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>

<body>
  <h1>
    <em><div class="header">mogitate</div></em>
  </h1>
  <h2><div class="header2">商品一覧</div></h2>
  
  <form action="/register" method="post">
    @csrf
    <div class="add">
      <button class="add__button-submit" type="submit">+商品を追加</button>
    </div>
  </form>

  <div class="container">
    <div class="sidebar">
      <form action="/find" method="post">
        @csrf
        <input type="text" name="search" placeholder="商品名で検索">
        <button class="find_button-submit" type="submit">検索</button>
      </form>
      <label for="sort">価格順で表示</label>
      <select id="sort" name="sort">
        <option value="">価格で並べ替え</option>
        <option value="asc">低い順</option>
        <option value="desc">高い順</option>
      </select>
    </div>

    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格</th>
          <th>画像</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
      <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>
              <img src="{{ asset("fruits-img/{$product->image_path}") }}"
                  alt="{{ $product->name }}"
                  onerror="this.onerror=null; this.src='/images/default.png';" />
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
