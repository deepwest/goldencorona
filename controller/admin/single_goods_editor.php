<?php
if (empty($_POST['categoryId'])) {
    $categoryId = 0;
} else {
    $categoryId = $_POST['categoryId'];
}

//function delete($x)
//{
//    if (is_file(ROOT . '/img/gallery/' . $x . '.jpg')) {
//        unlink(ROOT . '/img/gallery/' . $x . '.jpg');
//    }
//}
//
//function add($x)
//{
//    $filename = explode('.', $x);
//    $filename = $filename[0] . '.jpg';
//    $img = new SimpleImage($_FILES['pattern']['tmp_name']);
//    $img->best_fit(850, 850)->save(ROOT . '/img/gallery/' . $filename);
//}

if (isset($_POST['edited_good'])) {
    $name = explode('.', $_POST['name']);
    $name = $name[0] . '.jpg';


    require ROOT . '/model/imagesaver.php';
    require ROOT . '/model/SimpleImage.php';

    for($i=1;$i<6;$i++){
        if (is_file($_FILES['pattern'.$i]['tmp_name'])) {
            deleteImage(intval($_POST['id']),$i);
            addImage(intval($_POST['id']),$i);
        }
    }

//    if (is_file($_FILES['pattern']['tmp_name'])) {
//        require ROOT . '/model/SimpleImage.php';
//        delete($_POST['oldname']);
//        add($name);
//    }

    $DB->prepare('UPDATE goods SET name=:name, name_ru=:name_ru, diameter=:diameter, power=:power, weight=:weight, size=:size, price=:price, short_desc=:short_desc, full_desc=:full_desc, country=:country, manufacturer=:manufacturer, material=:material, categoryId=:categoryId WHERE id=:id')->execute(array(':name' => $name, ':name_ru' => $_POST['name_ru'], ':diameter' => $_POST['diameter'], ':power' => $_POST['power'], ':weight' => $_POST['weight'], ':size' => $_POST['size'], ':price' => $_POST['price'], ':short_desc' => $_POST['short_desc'], ':full_desc' => $_POST['full_desc'], ':country' => $_POST['country'], ':manufacturer' => $_POST['manufacturer'], ':material' => $_POST['material'], ':categoryId' => $categoryId, ':id' => $_POST['id']));

    header('Location: /admin/all_products_editor');
}

if (isset($_POST['new_good'])) {
    if (is_file($_FILES['pattern1']['tmp_name'])) {

        //last id for creating folder
        $lastId = $DB->query('SELECT * FROM goods ORDER by id DESC LIMIT 1')->fetch();
        $id = ++$lastId['id'];

        require ROOT . '/model/imagesaver.php';
        require ROOT . '/model/SimpleImage.php';

        for($i=1;$i<6;$i++){
            if (is_file($_FILES['pattern'.$i]['tmp_name'])) {
                deleteImage($id,$i);
                addImage($id,$i);
            }
        }

    }

    $name = explode('.', $_POST['name']);
    $name = $name[0] . '.jpg';
    $DB->prepare('INSERT INTO goods (name,name_ru,diameter,power,weight,size,price,short_desc,full_desc,country,manufacturer,material,categoryId) VALUES (:name,:name_ru,:diameter,:power,:weight,:size,:price,:short_desc,:full_desc,:country,:manufacturer,:material,:categoryId)')->execute(array(':name' => $name, ':name_ru' => $_POST['name_ru'],':diameter' => $_POST['diameter'],':power' => $_POST['power'],':weight' => $_POST['weight'],':size' => $_POST['size'], ':price' => $_POST['price'], ':short_desc' => $_POST['short_desc'], ':full_desc' => $_POST['full_desc'], ':country' => $_POST['country'], ':manufacturer' => $_POST['manufacturer'], ':material' => $_POST['material'], ':categoryId' => $categoryId));

    header('Location: /admin/all_products_editor');
}
