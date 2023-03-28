<?php
    $chat = $_GET["chat"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <p><?php echo $chat; ?></p>
    <form action="" method="GET">
        <input type="text" name="chat">
        <input type="submit" value="送信">
    </form>
</body>
</html>
