<?php
class URL{
    public static function url(){
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        return $url;
    }
}