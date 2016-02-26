<?

if (isset($_POST['save_article'])) {
    $DB->prepare('UPDATE main_article SET article=:article,seotitle=:seotitle,seodescription=:seodescription,seokeywords=:seokeywords, header=:header WHERE id=:id')->execute(array(':article' => $_POST['article'], ':seotitle' => $_POST['seotitle'],':seodescription' => $_POST['seodescription'],':seokeywords' => $_POST['seokeywords'], ':header' => $_POST['header'], ':id' => '1'));
}
if (isset($_POST['save_momoi_article'])) {
    $DB->prepare('UPDATE main_article SET article=:article,seotitle=:seotitle,seodescription=:seodescription,seokeywords=:seokeywords, header=:header WHERE id=:id')->execute(array(':article' => $_POST['article'], ':seotitle' => $_POST['seotitle'],':seodescription' => $_POST['seodescription'],':seokeywords' => $_POST['seokeywords'], ':header' => $_POST['header'], ':id' => '3'));
}

$tpl = 'home';
$article = $DB->query('SELECT * FROM main_article WHERE id=1')->fetch();
$momoiarticle = $DB->query('SELECT * FROM main_article WHERE id=3')->fetch();
