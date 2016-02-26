<?
session_start();
error_reporting(7); // 0 | 7 | 6143
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('WEBURL','http://'. $_SERVER['SERVER_NAME']);

$url = explode('?', $_SERVER['REQUEST_URI']);
$url = explode('/', $url[0]);

if (empty($url[1])) {
    $url[1] = 'home';
}
if (empty($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ru';
}
if (!empty($_GET['lang'])) {
    if (is_file(ROOT . '/lng/' . $_GET['lang'] . '.php')) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
define('LNG', $_SESSION['lang']);
require ROOT . '/lng/' . LNG . '.php';

//DB
require ROOT.'/model/db.php';

$gtpl = 'main';

if (is_file('controller/' . $url[1] . '.php')) {
    require 'controller/' . $url[1] . '.php';
} else {
    require 'controller/error404.php';
}

require 'view/' . $gtpl . '.php';
