<?php
if(isset($_POST['edited_category'])){
    $DB->prepare('UPDATE category SET name=:name, seotitle=:seotitle, seodescription=:seodescription, seokeywords=:seokeywords, seotext=:seotext WHERE id=:id')->execute(array(':name' => $_POST['name'], ':seotitle' => $_POST['seotitle'], ':seodescription' => $_POST['seodescription'], ':seokeywords' => $_POST['seokeywords'], ':seotext' => $_POST['seotext'], ':id' => intval($_POST['id'])));
    
}

if(isset($_POST['added_category'])){
    $DB->prepare('INSERT INTO category (name,seotitle,seodescription,seokeywords,seotext) VALUES (:name,:seotitle,:seodescription,:seokeywords,:seotext)')->execute(array( ':name' => $_POST['name'], ':seotitle' => $_POST['seotitle'], ':seodescription' => $_POST['seodescription'], ':seokeywords' => $_POST['seokeywords'], ':seotext' => $_POST['seotext']));
    
}


header('Location: /admin/category_editor');