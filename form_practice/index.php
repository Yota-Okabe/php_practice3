<!-- 下記フォームを機能させよう -->
<!-- 送信ボタンをクリックすると、データをcheck.phpに送信し、
    　check.phpで送信されたデータを出力しましょう -->
<!-- GET送信を使用すること -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="GET">
        <div>
            <label for="">お名前</label>
            <input type="text" name="name">
        </div>
        <input type="submit" value="送信">
    </form>
</body>
</html>