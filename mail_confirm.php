<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>問い合わせフォーム</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「登録する」ボタンを押して下さい。
        </p>

        <P>名前
            <br>
            <?php echo $_POST['name'];?>
        </P>

        <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
       </p>

       <P>年齢
        <br>
        <?php echo $_POST['age']."歳";?>
       </P>

       <p>コメント
        <br>
        <?php echo $_POST['comments'];?>
       </p>

       <form action="index.html">
        <input type="submit" class="button1" value="戻って修正する"/>
       </form>

       <form action="insert.php" method="post">
        <input type="submit" class="button2" value="登録する" />
        <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
       </form>

    </div>
</body>
</html>