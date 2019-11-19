<?php

class Controller
{
    protected $dbh;


    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

    }

    protected function delete_from_db($table, $name_param, $value_param)
    {
//        $query="DELETE FROM $table WHERE $name_param='$value_param'";
        $query = 'DELETE FROM $table ';
        $sth = $this->dbh->query($query);
    }
}
