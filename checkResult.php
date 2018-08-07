<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 15:01
 */
include 'index.php';
    if (isset($_POST['go']))
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }