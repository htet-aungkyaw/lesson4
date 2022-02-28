<?php

$rows = [
    [90, 78, 82,],
    [62, 70, 68,],
    [68, 88, 72,],
    ];

    $users = [
        [ 'id' => 1, 'name' => 'Alice' ],
        [ 'id' => 2, 'name' => 'Bob' ],
        [ 'id' => 3, 'name' => 'Criz' ],
        ];

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
    <h2>90データ</h2>
    <P><?=$rows[0][0] ?></P>
    <h2>88のデータ</h2>
    <p> <?-$rows[2][1] ?></p>
    <h2>ユーザーリスト</h2>
    <li><?= $users[0]['name'] ?></li>
    <li><?= $users[1]['name'] ?></li>
    <li><?= $users[2]['name'] ?></li>
</body>
</html>