<?php
if (intval($url[2]) <= 1) {
    $selectedProd = 5;
} else {
    $selectedProd = intval($url[2]);
}
$tpl = 'detalnoe-opisanie-cat';
$selected_good = $DB->query('SELECT * FROM goods WHERE id=' . $selectedProd)->fetch();
$name = explode('.', $selected_good['name']);

$titleSeo = 'Сетевое полотно Golden Corona ' . $name[0] . ' - купить в Украине по доступной цене.';
$descriptionSeo = 'Интересует сетевое полотно ' . $name[0] . ' в Украине? Предлагаем заказать сетевое полотно ' . $name[0] . ' ' . $selected_good['manufacturer'] . ' в компании Golden Corona.';
$keywordsSeo = 'купить заказать сетевое полотно Golden Corona ' . $name[0] . ' цены фото.';

function func_get_argas() {
    global $selectedProd;
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/category/' . $_SESSION['cat_id'];;
    $crumbs[1][1] = 'Категория товара';
    $crumbs[2][0] = '/tovary-dlia-lovli/' . $selectedProd;
    $crumbs[2][1] = 'Описание товара';
    $crumbs[3][0] = '/detalnoe-opisanie';
    $crumbs[3][1] = 'Детали';

    return $crumbs;
}

function func_num_argas() {
    $deeplist = 4;
    return $deeplist;
}
