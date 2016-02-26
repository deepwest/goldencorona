<?php
if(isset($_POST['edited_color_category'])){
    $DB->prepare('UPDATE colorseo SET  seotitle=:seotitle, seodescription=:seodescription, seokeywords=:seokeywords, seotext=:seotext WHERE id=:id')->execute(array(':seotitle' => $_POST['seotitle'], ':seodescription' => htmlspecialchars($_POST['seodescription']), ':seokeywords' => htmlspecialchars($_POST['seokeywords']), ':seotext' => $_POST['seotext'], ':id' => '1'));
    header('Location: /admin/goods_editor');
}

//function delete($x) {
//    if(is_file(ROOT . '/img/gallery/'.$x)){
//    unlink(ROOT . '/img/gallery/'.$x);
//    }
//}
//
//function add($x) {
//    $filename = $x . '.jpg';
//    $img = new SimpleImage($_FILES['pattern']['tmp_name']);
//    $img->best_fit(850, 850)->save(ROOT . '/img/gallery/'. $filename);
//}

require ROOT . '/model/imagesaver.php';

switch ($url[3]):
    case 'edit':
        $single_good = $DB->query('SELECT * FROM goods WHERE id=' . $url[4])->fetch();
        $tpl = 'single_goods_editor';
        break;
    case 'del': 
            $DB->query('DELETE FROM goods WHERE id=' . $url[4]);
            clearFolder(ROOT . '/img/goodsgallery/' . $url[4]);
            header('Location: /admin/goods_editor');
        break;
    case 'add':
        $tpl = 'add_good';
        break;
    default :
        $goods = $DB->query('SELECT * FROM goods WHERE categoryId =0');
        $nets = $DB->query('SELECT * FROM colorseo WHERE id=1')->fetch();
        $tpl = 'goods_editor';
endswitch;
