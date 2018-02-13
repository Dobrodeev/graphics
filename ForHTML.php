<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 12.02.2018
 * Time: 23:31
 */

class ForHTML
{
    // p, span, div
    public $string;

    public function __construct()
    {
        $this->string = '';
    }
    public function p($text)
    {
        $this->string .= '<p>'.$text.'</p>';
    }
    public function span($text)
    {
        $this->string .= '<span>'.$text.'</span>';
    }
    public function div($text)
    {
        $this->string .= '<div>'.$text.'<div>';
    }
    public function get_all()
    {
        echo $this->string;
    }
}