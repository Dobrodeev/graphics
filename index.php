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
/**
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
//        print_r($arr);
//        echo '</pre>';
//        echo 'count($arr) = '.count($arr).'<br>';
    $count_images = count($arr);
    $var = mt_rand(0, $count_images);
    echo '<h5>'.$arr[$var]['question'].'</h5>';
 */
spl_autoload_register(function ($className)
{
    include $className.'.php';
});
$questionGraphics = new Images(4);
$questionGraphics->get_true_image();
$questionGraphics->get_indexes();
$questionGraphics->get_all_image();
    ?>
<form action="#" method="post">
<!--    <div class="form-group">-->
<!--        <label for="exampleInputEmail1">Email address</label>-->
<!--        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputPassword1">Password</label>-->
<!--        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputFile">File input</label>-->
<!--        <input type="file" id="exampleInputFile">-->
<!--        <p class="help-block">Example block-level help text here.</p>-->
<!--    </div>-->
<!--    <div class="checkbox">-->
<!--        <label>-->
<!--            <input type="checkbox"> Check me out-->
<!--        </label>-->
<!--    </div>-->
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Graphic 1
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Graphic 2
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
            Graphic 3
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
            Graphic 4
        </label>
    </div>
<!--    <div class="radio disabled">-->
<!--        <label>-->
<!--            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>-->
<!--            Option three is disabled-->
<!--        </label>-->
<!--    </div>-->
    <button type="submit" class="btn btn-default" name="go">Submit</button>
</form>
    <?
    // сделать новый файл - обработчик результатов формы: 1 вопрос - верно, 2 вопрос - не верно и так до N-вопросов
    // результат занести в таблицу и провести анализ: из 20-ти вопрос верных ответов 13, тоесть 13%, оценка С или D
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    /**
    $rand_img = [];
    $rand_img[] = $var;

        while(count($rand_img) < 4)
        {
            $var2 = mt_rand(0, $count_images);
            if(!in_array($var2, $rand_img))
            {
                $rand_img[] = $var2;
            }
        }
        echo '<br><br>';

//        function randValues($rand_array, $count_images)
//        {
//            $rand = rand(0, $count_images);
//            if(in_array($rand, $rand_array)) $rand_array = randValues($rand_array);
//            $rand_array[] = $rand;
//            if(count($rand_array) < 4) $rand_array = randValues($rand_array);
//            return $rand_array;
//        }

    shuffle($rand_img);
    $counter = 1;
        foreach ($rand_img as $key)
        {
            echo  '<img src="images/'.$arr[$key]['image'].'">';
            echo '<h4>График '.$counter++.'</h4>';
        }
    */
	?>
</body>
</html>