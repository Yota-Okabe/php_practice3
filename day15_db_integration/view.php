<?php

// phpmyadminのデータを見た目に表示する

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

        // 取得するとき　select文
    // fetchAll() データベースのデータを全権取得し、配列に格納する技
    // PDO phpコード上のデータベースという意味
    // FETCH_ASSOC 連想配列のかたちで
    // var_dump 配列・変数の中身を検証する関数　＝　検証する行為　＝　デバックする

    $sql = 'SELECT * FROM `survey`';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($records);


    foreach($records as $record){
        echo $record['id'] . '<br>';
        echo $record['nickname'] . '<br>';
        echo $record['email'] . '<br>';
        echo $record['content'] . '<br>';
        echo '<hr>';
    }

    // $test = ['id'=>1, 'mickname'=>'たろう'];
    // var_dump($test);

