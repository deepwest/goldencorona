<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require ROOT . '/view/client/colors.php';
    exit();
} else {
    $goods = $DB->query('SELECT * FROM goods WHERE categoryId = 0');
    $tpl = 'colors';
}
$nets = $DB->query('SELECT * FROM colorseo WHERE id=1')->fetch();
$titleSeo = $nets['seotitle'];
$descriptionSeo = $nets['seodescription'];
$keywordsSeo = $nets['seokeywords'];

function func_get_argas() {
    $crumbs[0][0] = '/';
    $crumbs[0][1] = 'Главная';
    $crumbs[1][0] = '/colors';
    $crumbs[1][1] = 'Выбор цветов';
    return $crumbs;
}

function func_num_argas() {
    $deeplist = 2;
    return $deeplist;
}



;
?>
