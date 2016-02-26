<?php

$config = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'corona'
);
//$config = array(
//    'host' => '194.54.89.193',
//    'user' => 'deepwes_tak',
//    'password' => 'Aa676764088',
//    'database' => 'deepwes_corona'
//);

//$config = array(
//    'host' => '194.54.89.193',
//    'user' => 'deepwes_corona',
//    'password' => 'Aa676764088',
//    'database' => 'deepwes_corona'
//);

try {
    $DB = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['password']);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $DB->exec("SET names utf8");
} catch (PDOException $e) {
    echo 'DB Connection failed: ' . $e->getMessage();
    exit;
}
