<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ステップ４　フォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<section class="form-aria">
<h1>フォーム入力</h1>

<div class="form-container">
<form action="confirm.php" method="post">
<p>お名前：<br><input type="text" name="name" pattern="^[ぁ-んァ-ン一-龥]+$"></p>
<p>年齢：<br><input type="text" name="age" min="0" max="150" required></p>
<p>電話番号：<br><input type="text" name="phone"></p>
<p>メールアドレス：<br><input type="text" name="email"></p>
<p>住所：<br><input type="text" name="address" pattern="^[ぁ-んァ-ン一-龥a-zA-Z0-9\s\-]+$"></p>
<p>質問：<br><input type="text" name="agreement"></p>
<p>性別：<br><select name="gender" id="gender">
<option>男性</option>
<option>女性</option>
<option>その他</option></select></p>
<button type="submit">送信</button>
</form>
</div>

</section>
</main>


</body>
</html>