<?php

// データを受け取る
// スーパーグローバル変数にデータが格納され、運ばれてくる。
// スーパーグローバル変数
    // $_POST POST送信を使った際に使用する
    // $_GET GET送信を使った際に使用する

    // イメージ：$_POST = ['nickname'=>'', 'email'=>'', 'content'=>''];

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    if($nickname == ''){
        $nickname_result = 'ニックネームが入力されておりません';
    }else{
        $nickname_result = $nickname;
    }
    if($email == ''){
        $email_result = 'メールアドレスが入力されておりません';
    }else{
        $email_result = $email;
    }
    if($content == ''){
        $content_result = 'お問い合わせ内容が入力されておりません';
    }else{
        $content_result = $content;
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>！入力内容をご確認ください！</h1>
        <p>nickname：<?php echo $nickname_result ?></p>
        <p>email：<?php echo $email_result ?></p>
        <p>お問い合わせ内容：<?php echo $content_result ?></p>

        <form action="thanks.php" method="POST">
            <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
            <input type="hidden" name="email" value="<?php  echo $email; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <input type="submit" value="送信OK">
        </form>
    </body>
    </html>

