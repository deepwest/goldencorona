<?php
if(isset($_POST['edited_color_category'])){
    $DB->prepare('UPDATE momoiseo SET  seotitle=:seotitle, seodescription=:seodescription, seokeywords=:seokeywords, seotext=:seotext WHERE id=:id')->execute(array(':seotitle' => $_POST['seotitle'], ':seodescription' => htmlspecialchars($_POST['seodescription']), ':seokeywords' => htmlspecialchars($_POST['seokeywords']), ':seotext' => $_POST['seotext'], ':id' => '1'));
    header('Location: /admin/momoi_editor');
}
function delete($x) {
    if(is_file(ROOT . '/img/momoi/'.$x)){
        unlink(ROOT . '/img/momoi/'.$x);
    }
}

function add($x) {
    $filename = $x . '.jpg';
    $img = new SimpleImage($_FILES['pattern']['tmp_name']);
    $img->best_fit(850, 850)->save(ROOT . '/img/momoi/'. $filename);
}

switch ($url[3]):
    case 'edit':
        $single_good = $DB->query('SELECT * FROM momoi WHERE id=' . $url[4])->fetch();
        $tpl = 'single_momoi_editor';
        break;
    case 'del':
        $DB->query('DELETE FROM momoi WHERE id=' . $url[4]);
        delete($url[5]);
        header('Location: /admin/momoi_editor');
        break;
    case 'add':
        $tpl = 'add_momoi';
        break;
    default :
        $goods = $DB->query('SELECT * FROM momoi ');
        $nets = $DB->query('SELECT * FROM momoiseo WHERE id=1')->fetch();
        $tpl = 'momoi_editor';
endswitch;
