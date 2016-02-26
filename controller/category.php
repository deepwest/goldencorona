<?php

$tpl = 'category';
$goods = $DB->query('SELECT * FROM goods WHERE categoryId = ' . intval($url[2]));
$_SESSION['cat_id'] = intval($url[2]);

$countGood = $DB->query('SELECT COUNT(*) as total FROM goods WHERE categoryId = ' . intval($url[2]))->fetch();//проверка или пустая выборка. костиль исправить!
$seoCat = $DB->query('SELECT * FROM category WHERE Id = ' . intval($url[2]))->fetch();


$titleSeo = $seoCat['seotitle'];
$descriptionSeo = $seoCat['seodescription'];
$keywordsSeo = $seoCat['seokeywords'];

function func_get_argas() {
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/category/' . $_SESSION['cat_id'];
    $crumbs[1][1] = 'Категория товара';
    return $crumbs;
}

function func_num_argas() {
    $deeplist = 2;
    return $deeplist;
}