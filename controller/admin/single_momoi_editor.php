<?php
if (empty($_POST['categoryId'])) {
    $categoryId = 0;
} else {
    $categoryId = $_POST['categoryId'];
}

function delete($x) {
    if (is_file(ROOT . '/img/momoi/' . $x . '.jpg')) {
        unlink(ROOT . '/img/momoi/' . $x . '.jpg');
    }
}

function add($x) {
    $filename = explode('.', $x);
    $filename = $filename[0] . '.jpg';
    $img = new SimpleImage($_FILES['pattern']['tmp_name']);
    $img->best_fit(850, 850)->save(ROOT . '/img/momoi/' . $filename);
}

if (isset($_POST['edited_good'])) {
    if (is_file($_FILES['pattern']['tmp_name'])) {
        require ROOT . '/model/SimpleImage.php';
        delete($_POST['oldname']);
        add($_POST['name']);
    }
    $name = explode('.', $_POST['name']);
    $name = $name[0] . '.jpg';
    $DB->prepare('UPDATE momoi SET name=:name, name_ru=:name_ru, price=:price, short_desc=:short_desc, full_desc=:full_desc, country=:country, manufacturer=:manufacturer, material=:material, categoryId=:categoryId WHERE id=:id')->execute(array(':name' => $name, ':name_ru' => $_POST['name_ru'], ':price' => $_POST['price'], ':short_desc' => $_POST['short_desc'], ':full_desc' => $_POST['full_desc'], ':country' => $_POST['country'], ':manufacturer' => $_POST['manufacturer'], ':material' => $_POST['material'], ':categoryId' => $categoryId, ':id' => $_POST['id']));

    header('Location: /admin/momoi_editor');
}

if (isset($_POST['new_good'])) {
    if (is_file($_FILES['pattern']['tmp_name'])) {
        require ROOT . '/model/SimpleImage.php';
        delete($_POST['name']);
        add($_POST['name']);
    }
    $name = explode('.', $_POST['name']);
    $name = $name[0] . '.jpg';
    $DB->prepare('INSERT INTO momoi (name,name_ru,price,short_desc,full_desc,country,manufacturer,material,categoryId) VALUES (:name,:name_ru,:price,:short_desc,:full_desc,:country,:manufacturer,:material,:categoryId)')->execute(array(':name' => $name, ':name_ru' => $_POST['name_ru'], ':price' => $_POST['price'], ':short_desc' => $_POST['short_desc'], ':full_desc' => $_POST['full_desc'], ':country' => $_POST['country'], ':manufacturer' => $_POST['manufacturer'], ':material' => $_POST['material'], ':categoryId' => $categoryId));

    header('Location: /admin/momoi_editor');
}
