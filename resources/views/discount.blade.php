<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Calculato Discount</h1>
<form action="/show" method="post">
    @csrf
    <input type="text" name="productDescription" placeholder="mo ta san pham"><br>
    <input type="number" name="listPrice" placeholder="gia san pham"><br>
    <input type="number" name="discountPercent" placeholder="chiet khau"><br>
    <button type="submit">Tinh</button>

</form>
</body>
</html>
