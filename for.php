<?php
require_once ('ForHTML.php');
$object = new ForHTML();
$a = $object->p('Message out to you.');
$b = $object->div('Someone');
$c = $object->span('letter from Moscow');
$object->get_all();
// p>div>span механизм, чтобы вкладывать элементы друг в друга
// добавление атрибутов к тегам
//$b1 = $object->