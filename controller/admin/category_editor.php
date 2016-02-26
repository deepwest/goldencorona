<?php


switch ($url[3]):
    case 'edit':
        $single_category = $DB->query('SELECT * FROM category WHERE id=' . $url[4])->fetch();
        $tpl = 'single_category';
        break;
    case 'del': 
            $DB->query('DELETE FROM category WHERE id=' . $url[4]);
            header('Location: /admin/category_editor');
        break;
    case 'add':
        $tpl = 'add_category';
        break;
    default :
        $categorys = $DB->query('SELECT * FROM category ');
        $tpl = 'category_editor';
endswitch;


