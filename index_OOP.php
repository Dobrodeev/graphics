<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Graphics</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css ">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
    ?>
<label class="radio">
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> График 1<br>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" > График 2<br>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" > График 3<br>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" > График 4<br>
</label>
<p>
    <button class="btn btn-primary" type="button">Кнопка по умолчанию</button>
    <button class="btn" type="button">Кнопка по умолчанию</button>
</p>
    <?php
    shuffle($all);
    $i = 1;
    foreach ($all as $img)
    {
        echo '<img src="images/'.$img.'"><br>';
        echo '<h4>График '.$i++.'</h4>';
    }
    ?>
</body>
</html>
