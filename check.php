<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">お問い合わせ内容確認</h1>

    <div class= "content">
        
    <div>お問い合わせ内容はこちらで宜しいでしょうか？</div>
    <div>よろしければ「送信する」ボタンを押してください。</div>

    <div class= "show-data">
        <div>ユーザー名</div>
        <p><?php echo $_POST['userName']; ?></p>

        <div>メールアドレス</div>
        <p><?php echo $_POST['mail']; ?></p>

        <div>年齢</div>
        <p><?php echo $_POST['age']; ?></p>

        <div>コメント</div>
        <p><?php echo $_POST['comment']; ?></p>
    </div>
       <div class= "button-group">
        <form action= "index.html" method="post">
            <input type="submit" class="button button-back" value="戻って修正する">
        </form>
       
        <form action ="insert.php" method="post">
            <input type= "submit" class="button button-next" value="送信する">
            <input type="hidden" name="userName" value="<?php echo $_POST['userName']; ?>">
            <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
            <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
            <input type="hidden" name="comments" value="<?php echo $_POST['comment']; ?>">
        </form>
       </div>      
    </div>

    </body>
</html>