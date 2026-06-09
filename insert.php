<?php 
mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:host=localhost;dbname=lesson01;charset=utf8mb4", "root","");

$sql ="INSERT INTO contactform(name, mail, age, comment) values(?,?,?,?)";
$stmt =$pdo->prepare($sql);

$stmt->bindValue(1, $_POST['userName']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']); 
$stmt->bindValue(4, $_POST['comments']);

$stmt->execute();
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">お問い合わせが完了しました</h1>

    <div class= "content">
        <div>お問い合わせありがとうございました。</div>
        <div>3営業日以内に担当者よりご連絡さし上げます。</div>
   </div>