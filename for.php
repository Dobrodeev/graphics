<?php
//require_once ('ForHTML.php');
spl_autoload_register(function ($class_name)
{
    include $class_name.'.php';
});
$object = new ForHTML();
$a = $object->p('Message out to you.');
$b = $object->div('Someone');
$c = $object->span('letter from Moscow');
$object->get_all();
// p>div>span механизм, чтобы вкладывать элементы друг в друга
// добавление атрибутов к тегам
//$some_text = 'Some text and everything else.';
$d = $object->some_text = 'Some text and everything else.';
$object->get_all();
$e1 = $object->p('Somesing text for inner.');
$e2 = $object->div($e1);
$e3 = $object->span($e2);
$object->get_all();
