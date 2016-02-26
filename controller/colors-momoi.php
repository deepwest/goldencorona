<?php


$goods = $DB->query('SELECT * FROM momoi');
$tpl = 'colors-momoi';

$nets = $DB->query('SELECT * FROM momoiseo WHERE id=1')->fetch();
$titleSeo = $nets['seotitle'];
$descriptionSeo = $nets['seodescription'];
$keywordsSeo = $nets['seokeywords'];

function func_get_argas()
{
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/momoi-colors';
    $crumbs[1][1] = 'Выбор цветов';
    return $crumbs;
}

function func_num_argas()
{
    $deeplist = 2;
    return $deeplist;
}


;
?>
