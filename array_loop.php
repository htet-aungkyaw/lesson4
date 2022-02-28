<?php
$years = [2020, 2019, 2018, 2017];
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];
$select_years = range (date('Y'),1990);

$user = [
    'name' => '東京ー 都',
    'gender' => 'male',
    'age' => 21,
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
    <h2></h2>
    <p><?= count($years) ?></p>

    <?php
    for ($i = 0; $i < count($years); $i++) {
        echo $years[$i];
        echo '<br>';
    }


    // YATIKATA ONAJIDESU MICHIGAKUNARU
    foreach ($years as $year) {

        echo $year;
        echo '<br>';
    }
    ?>

    <ul>
        <?php
        foreach ($drinks as $drink) {
            echo "<li>{$drink}</li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($drinks as $drink) : ?>
            <li><?= $drink ?></li>
        <?php endforeach ?>
    </ul>
    <h2>ユーザデータ</h2>
    <dl>
        <?php foreach ($user as $key => $value) : ?>
            <dt><?= $key ?></dt>
            <dd><?= $value ?></dd>
        <?php endforeach ?>
    </dl>

    <h2>プルダウン</h2>
    <select name="year" id="">
        <option value="2020">2020年</option>
        <option value="2019">2019年</option>
        <option value="2018">2018年</option>
        <option value="2017">2017年</option>
    </select>

    <select name="year" id="">
        <?php foreach ($select_years as $year) : ?>
            <option value="<?= $year ?>"><?= $year ?>年</option>
        <?php endforeach ?>
    </select>
    <?php
    //現在の階層（かいそう）のすべてのPHPファイルをとる
    $files = glob('./*.php');
    var_dump($files);
    ?>

    <h2>ファイルリスト</h2>
    <ul>
        <?php foreach ($files as $file) : ?>
            <li><?= $file ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>