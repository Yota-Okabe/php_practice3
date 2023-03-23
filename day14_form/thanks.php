<?php 

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

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