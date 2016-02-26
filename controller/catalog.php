<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
   require ROOT.'/view/client/catalog.php';
    exit(); 
}else{
    $tpl = 'catalog';
}

$titleSeo = 'о продукции';
$descriptionSeo = 'о продукции';
$keywordsSeo = 'о продукции';

?>
