<?php

$tpl = 'all_products_editor';
$categorys = $DB->query('SELECT * FROM category ');
if(!empty($url[3])){
    $goods = $DB->query('SELECT * FROM goods WHERE categoryId ='.$url[3]);
}

