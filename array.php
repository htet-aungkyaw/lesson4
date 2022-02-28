<?php
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];

$drinks[] = 'コラ';
$drinks[0] = 'オレンジジュース';

$count = count($drinks);

array_pop($drinks);

array_shift($drinks);

array_unshift($drinks, 'コーヒー');
array_unshift($drinks,'ウーロン茶');

$index = array_search('コーヒー',$drinks);

$drinks[1] =null;

$is_array = is_array($drinks);
in_array('ウーロン茶',$drinks);

$foods = ['カレー','ラーメン'];
$items = array_merge($drinks,$foods);

$keys = array_keys($items);

$kana =['あ','い','う','え','お'];
rsort($kana);

$in_hands =['ブー','チョキ','パー'];
$hand_index = array_rand($in_hands);
$in_hand = $in_hands[$hand_index];
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
    <ul>
        <li><?= $drinks[0] ?></li>
        <li><?= $drinks[1] ?></li>
        <li><?= $drinks[2] ?></li>
        <li><?= $drinks[3] ?></li>

    </ul>
    <h2>ドリンク</h2>
    <P><?= $count ?></P>
    <h2>コーヒーを紅茶</h2>
    <p>インデックスは<?=$index?>です</p>

    <H2></H2>
    <P><?php var_dump($is_array)?></P>
    <h2>ウーロン茶がありますか?</h2>
    <p><?php var_dump($in_array)?></p>
    <h2></h2>
    <p><?php var_dump($items)?></p>
    <h2></h2>
    <p><?php var_dump($keys)?></p>
    <h2></h2>
    <p><?php var_dump($kana) ?></p>

    <h2>ブー・チョキ・パー</h2>
    <p><?=$in_hand ?></p>
</body>

</html>