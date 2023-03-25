<?php 
// 復習
// SQL文
// insert文　挿入
// select文　選択
// delete文　削除
// update文　更新

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // step1:データベース接続
        // phpmyadmin の phpkiso へ接続する
        // アカウント名
        // パスワード
        // phpからデータベースへアクセスするために使う、phpが用意した技
    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // step2:SQL文の実行
    $sql = 'INSERT INTO `survey`(`nickname`, `email`, `content`) VALUES ("'.$nickname.'", "'.$email.'", "'.$content.'")';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

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
    <h1>お問い合わせありがとうございました！</h1>
    <div>
        <h3>お問い合わせ情報</h3>
        <p>nickname：<?php echo $nickname; ?></p>
        <p>email：<?php echo $email; ?></p>
        <p>お問い合わせ内容：<?php echo $content; ?></p>
    </div>
</body>
</html>