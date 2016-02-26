<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
   require ROOT.'/view/client/contact.php';
    exit(); 
}else{
    $tpl = 'contact';
	
	$titleSeo = 'Контакты';
	$descriptionSeo = 'Контакты';
	$keywordsSeo = 'Контакты';
	
}