<?php

class require_auto_dir{
    public static function auto_load($dir_){
        $dir = __DIR__ .`/`. $dir_;
        // echo $dir;
        $files = scandir($dir);
        // print_r($files);
        foreach($files as $file){
            $name = explode('.', $file);
            if($file != '.' && $file != '..'&& $name[1] == 'php'){
                $file = str_replace('/', '\\',$dir .'\\'. $file);
                // echo $file;
                // echo '<br>';
                if(file_exists($file)){
                    require_once $file;
                }
            }
        }
    }
}