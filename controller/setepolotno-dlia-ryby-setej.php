<?php

if (intval($url[2]) <= 1) {
    $selectedProd = 5;
} else {
    $selectedProd = intval($url[2]);
}

$tpl = 'setepolotno-dlia-ryby-setej';
$selected_good = $DB->query('SELECT * FROM goods WHERE id=' . $selectedProd)->fetch();
$name = explode('.', $selected_good['name']);
$titleSeo = 'Сетевое полотно Golden Corona ' . $name[0] . ' - купить в Украине по доступной цене.';
$descriptionSeo = 'Интересует сетевое полотно ' . $name[0] . ' в Украине? Предлагаем заказать сетевое полотно ' . $name[0] . ' ' . $selected_good['manufacturer'] . ' в компании Golden Corona.';
$keywordsSeo = 'купить заказать сетевое полотно Golden Corona ' . $name[0] . ' цены фото.';

function func_get_argas() {
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/colors';
    $crumbs[1][1] = 'Выбор цветов';
    $crumbs[2][0] = '/setepolotno-dlia-ryby-setej/';
    $crumbs[2][1] = 'Описание товара';
    return $crumbs;
}

function func_num_argas() {
    $deeplist = 3;
    return $deeplist;
}

?>