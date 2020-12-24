<?php

/**
 * Class Images
 * @package graphics
 * @author Rytov Anton
 * @copyright 2018
 */
class Images
{
    /**
     *
     */
    const HOST = '127.0.0.1';
    /**
     *
     */
    const DB = 'graphics';
    /**
     *
     */
    const USER = 'root';
    /**
     *
     */
    const PASS = '';
    /**
     *
     */
    const CHARSET = 'utf8';

    /**
     * @var PDO
     */
    private $db_conn;
    /**
     * @var array
     */
    private $images;
    /**
     * индекс правильного отвнта на вопрос
     * @var
     */
    private $true_index;
    /**
     * количество вариантов ответа на вопрос
     * @var int
     */
    private $count_images;
    /**
     * @var
     */
    private $count_result;

    /**
     * создает вопрос и $count_result например 4 варианта ответа
     * Всего есть $this->count_images графиков функций
     * Images constructor.
     * @param $count_result
     */
    public function __construct($count_result)
    {
        $this->count_result = $count_result;
        $dsn = "mysql:host=".self::HOST.";dbname=".self::DB.";charset=".self::CHARSET;
        $this->db_conn = new PDO($dsn, self::USER, self::PASS);
        $query = 'SELECT * FROM question';
        $sth = $this->db_conn->query($query);
        $arr = [];
        while ($row = $sth->fetch()) {
            $arr[] = $row;
        }
        $this->images = $arr;
        $this->count_images = count($arr);
    }

    /**
     * получаем правильный ответ на вопрос (в данном случае правильное изображение графика функции)
     */
    public function get_true_image()
    {
        $var = rand(0, $this->count_images);
        $this->true_index = $var;
        echo '<h5>'.$this->images[$var]['question'].'</h5>';
    }

    /**
     * получаем индекс правильного ответа на вопрос
     */
    public function getTrueIndex()
    {
        $index = $this->true_index;
        $index++;
        echo $index;
    }

    /**
     * генерируем неправильные ответы на вопрос
     * @return array
     */
    public function get_indexes()
    {
        $rand_img = [];
        $rand_img[] = $this->true_index;
        while (count($rand_img) < $this->count_result) {
            $var2 = rand(0, $this->count_images);
            if (!in_array($var2, $rand_img)) {
                $rand_img[] = $var2;
            }
        }
        return $rand_img;
    }

    /**
     * собирамем правильные и неправильные ответы вместе
     */
    public function getAllIndexes()
    {
        $arrIndexes = $this->get_indexes();
        $i = 1;
        foreach ($arrIndexes as $index) {
            echo '    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="'.++$index.'">
            Graphic '.$i++.'
        </label>
    </div>';
            echo $index.' ';
        }
    }

    /**
     * Используеим полученный массив случайных индексов картинок и выводим мх изображения
     */
    public function get_all_image()
    {
        $arrIndexes = $this->get_indexes();
        shuffle($arrIndexes);
        $i = 1;
        foreach ($arrIndexes as $index) {
            echo '    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="'.++$index.'">
            Graphic '.$i++.'
        </label>
    </div>';
            echo $index.' ';
        }
        echo '<h5>Выбираем график</h5>';
        $counter = 1;
        foreach ($arrIndexes as $index) {
            echo '<img src="images/'.$this->images[$index]['image'].'">';
            echo '<h4>График '.$counter++.'</h4>';
        }
        $arrIndexes = $this->get_indexes();
    }
}