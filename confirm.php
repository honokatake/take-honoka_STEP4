<?php
$name = $_POST['name'];
if (!preg_match("/^[ぁ-んァ-ン一-龥]+$/u", $name)){
        echo "名前はひらがな、カタカナ、漢字のみ使用できます。";
        exit;
}
$age = $_POST['age'];
if (!is_numeric($age) || $age < 0 || $age > 150){
        echo "年齢は0から150の間で入力してください。";
        exit;
}

$phone = $_POST['phone'];
if(!preg_match("/^[0-9\-]+$/", $phone)){
    echo "電話番号は半角数字とハイフンのみ使用できます。";
    exit;
}

$email = $_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "メールアドレスの形式が正しくありません。";
    exit;
}

$address = $_POST['address'];
if(!preg_match("/^[ぁ-んァ-ン一-龥a-zA-Z0-9\s\-]+$",$address)){
    echo "住所はひらがな、カタカナ、漢字、英字のみ使用できます。";
    exit;
}

$agreement = $_POST['agreement'];
$gender = $_POST['gender'];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
<meta charset="UTF-8">
<title>確認画面</title>
</head>

<body>

<h1>入力内容確認</h1>

<p>お名前：<?php each $name;?></p>
<p>年齢：<?php each $age;?></p>
<p>住所：<?php each $address?></p>
<p>質問：<?php each $agreement?></p>
<p>性別：<?php each $gender?></p>


</body>
</html>