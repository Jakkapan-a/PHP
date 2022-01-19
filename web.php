<?php

$url = URL::url();
// print_r($url);

if(empty($url[1])){
    require_once __DIR__ .'/view/index.php';
}else if(!empty($url[1])){
  
}
switch ($url[1]) {
    case 'index':
        require_once __DIR__ .'/view/index.php';
        break;
    case 'create':
        require_once __DIR__ .'/view/create.php';
        break;
    case 'update':
        require_once __DIR__ .'/view/update.php';
        break;
    case 'delete':
        require_once __DIR__ .'/view/delete.php';
        break;
    case 'show':
        require_once __DIR__ .'/view/show.php';
        break;
    default:
        require_once __DIR__ .'/view/index.php';
        break;
}