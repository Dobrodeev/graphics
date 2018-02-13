<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once ('Images.php');
    $images = new Images(4);
    $question = $images->get_question();
    //var_dump($question);
    echo '<h4>'.$question.'</h4>';
    $all = $images->get_all_image();
//    echo '<pre>';
//    echo var_dump($all);
//    echo '</pre>';
    foreach ($all as $img)
    {
        echo '<img src="images/'.$img.'"><br>';
    }
    ?>
</body>
</html>
