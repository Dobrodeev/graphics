<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Graphics</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css ">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?
    $host = '127.0.0.1';
    $db   = 'Graphics';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $sth = new PDO($dsn, $user, $pass);
		$query = 'SELECT * FROM question';
		$q = $sth->query($query);
		$arr = [];// трехмерный массив массивов: массив { array1=>[id][вопрос][картинка], array2=>[id][][],...}
        while ($row = $q->fetch())
        {
            $arr[] = $row;
        }
//        echo '<pre>';
//        var_dump($arr);
//        echo '</pre>';
//        echo 'count($arr) = '.count($arr).'<br>';
    //$var = rand(0, 42);
    // избавляемся от магического числа 42. всего 43 картинки, а нумерация массива с 0 до 42.
    $count_images = count($arr);
    $var = rand(0, $count_images);
    echo '<h5>'.$arr[$var]['question'].'</h5>';
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
    <?
    $rand_img = [];
    $rand_img[] = $var;

        while(count($rand_img) < 4)
        {
            $var2 = rand(0, $count_images);
            if(!in_array($var2, $rand_img))
            {
                $rand_img[] = $var2;
            }
        }
        echo '<br><br>';

        function randValues($rand_array, $count_images)
        {
            $rand = rand(0, $count_images);
            if(in_array($rand, $rand_array)) $rand_array = randValues($rand_array);
            $rand_array[] = $rand;
            if(count($rand_array) < 4) $rand_array = randValues($rand_array);
            return $rand_array;
        }

    shuffle($rand_img);
    $i = 1;
        foreach ($rand_img as $key)
        {
            echo  '<img src="images/'.$arr[$key]['image'].'">';
            echo '<h4>График '.$i++.'</h4>';
        }
	?>
</body>
</html>