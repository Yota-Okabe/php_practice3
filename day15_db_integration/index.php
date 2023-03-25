<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- actionとmethodを定義する必要がある
        action 送信先・遷移先
        method データの送信方法（HTTP GET送信・POST送信）
            GET送信：URLの末尾に?+パラメーター=値というURLが記載される
                サイトを閲覧した時や検索する時に使用される
            post送信：データを登録する時などに使用する
                サーバでデータを更新する時、個人情報を送る時、データ量が多い時
        パラメータ=値
    -->
    <!-- <form action="check.php" method="GET"> -->
    <form action="check.php" method="POST">
        <div>
            nickname<br>
            <input type="text" name="nickname">
        </div>
        <div>
            email<br>
            <input type="text" name="email">
        </div>
        <div>
            お問い合わせ内容<br>
            <textarea id="" cols="30" rows="10" name="content"></textarea>
        </div>
        <input type="submit" value="内容の確認">
    </form>
</body>
</html>