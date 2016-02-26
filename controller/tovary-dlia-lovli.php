<?php

$tpl = 'tovary-dlia-lovli';
$selected_good = $DB->query('SELECT * FROM goods WHERE id=' . $url[2])->fetch();
$name = explode('.', $selected_good['name']);
$titleSeo = 'Товары для ловли рыби Golden Corona '.$name[0].' - купить в Украине по доступной цене.';
$descriptionSeo = 'Интересуют товары для ловли рыби '.$name[0].' в Украине? Предлагаем заказать товары для ловли рыби '.$name[0].' '.$selected_good['manufacturer'].' в компании Golden Corona.';
$keywordsSeo = 'купить заказать товары для ловли рыби Golden Corona '.$name[0].' цены фото.';


function func_get_argas() {
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/category/' . $_SESSION['cat_id'];
    $crumbs[1][1] = 'Категория товара';
    $crumbs[2][0] = '/tovary-dlia-lovli/';
    $crumbs[2][1] = 'Описание товара';
    return $crumbs;
}

function func_num_argas() {
    $deeplist = 3;
    return $deeplist;
}