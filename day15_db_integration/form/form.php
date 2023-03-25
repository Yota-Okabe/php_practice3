<!-- 先ずはHTMLで見た目を学ぶ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>フォームの使い方</h1>

    <form action="" method="">
        <div>
            <input type="text">
        </div>
        <div>
            <input type="password">
        </div>
        <div>
            <input type="date">
        </div>
        <div>
            <input type="file">
        </div>
        <div>
            <input type="email">
        </div>
        <div>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        
        <!-- セレクトボックス -->
        <div>
            <select name="" id="">
                <option value="">アイテム1</option>
                <option value="">アイテム2</option>
            </select>
        </div>

        <!-- チェックボックス -->
        <div>
            <input type="checkbox" name="" id="">りんご
            <input type="checkbox" name="" id="">みかん
        </div>

        <!-- ラジオボックス -->
        <div>
            <input type="radio" name="" id="">関東
            <input type="radio" name="" id="">関西
            <input type="radio" name="" id="">東海
            <input type="radio" name="" id="">九州
        </div>
            <input type="range" name="" id="">満足度
        <div>
            <input type="submit" value="送信">
        </div>
        
    </form>
</body>
</html>