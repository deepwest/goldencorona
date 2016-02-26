<?php

$tpl = 'sitemap';
$category1 = $DB->query('SELECT * FROM category ');
$sitemapArr = [
    'Главная'=>WEBURL.'/',
    'О продукции'=>WEBURL.'/catalog',
    'Каталог'=>'',
    'Прайс лист'=>WEBURL.'/fishing-nets-prices',
    'Обратная связь'=>WEBURL.'/contact_us',
    'Оплата и доставка'=>WEBURL.'/delivery_info',
    'Контакты'=>WEBURL.'/contact' 
    ];

   