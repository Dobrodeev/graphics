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
<?php
/**
 * количество ответов на вопрос
 */
define('COUNT_QUESTIONS', 4);
spl_autoload_register(/**
 * @param $className
 */ function ($className) {
    include $className.'.php';
});
$questionGraphics = new Images(COUNT_QUESTIONS);
// вопрос
$questionGraphics->get_true_image();
// варианты ответов
$questionGraphics->get_indexes();
?>
<form action="<!--checkResult.php-->" method="post">
    <?php $questionGraphics->get_all_image(); ?>
<!--    <input type="hidden" name="trueVariant" value="--><?// $questionGraphics->getTrueIndex() ?><!--">-->
    <button type="submit" class="btn btn-default" name="go">Submit</button>
</form>
<?php ?>
</body>
</html>