<?php

class Images
{
    const HOST = '127.0.0.1';
    const DB   = 'Graphics';
    const USER = 'root';
    const PASS = '';
    const CHARSET = 'utf8';

    private $db_conn;
    private $images;
    private $true_index;
    private $count_images;
    private $count_result;

    public function __construct($count_result)
    {
        $this->count_result = $count_result;
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;
        $this->db_conn = new PDO($dsn, self::USER, self::PASS);
        $query = 'SELECT * FROM question';
        $sth = $this->db_conn->query($query);
        $arr = [];
        while ($row = $sth->fetch())
        {
            $arr[] = $row;
        }
        $this->images = $arr;
        $this->count_images = count($arr);
    }
    public function get_true_image()
    {
        $var = rand(0, $this->count_images);
        $this->true_index = $var;
    }
    public function  get_indexes()
    {
        $rand_img = [];
        $rand_img[] = $this->true_index;
        while(count($rand_img) < $this->count_result)
        {
            $var2 = rand(0, $this->count_images);
            if(!in_array($var2, $rand_img))
            {
                $rand_img[] = $var2;
            }
        }
        return $rand_img;
    }
    public function get_all_image()
    {
        $arr_images = [];
        $arr_indexes = $this->get_indexes();
        foreach ($arr_indexes as $index)
        {
            $arr_images[] = $this->images[$index]['image'];
        }
        return $arr_images;
    }
    // make second index.php который работает на ООП
}