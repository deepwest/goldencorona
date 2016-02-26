<?

$gtpl = 'admin';

if(!empty($_SESSION['admin'])){
    //залогінений
    
    if(empty($url[2])){
        $url[2] = 'home';
    }
    
    if(is_file(ROOT.'/controller/admin/'.$url[2].'.php')){
        require ROOT.'/controller/admin/'.$url[2].'.php';
    }else{
        require ROOT.'/controller/error404.php';
    }
    
}else{
    //не залогінений
    $tpl = 'login';
    if(!empty($_POST)){
        $pass = $_POST['pass'];
        $rezult = $DB->query('SELECT * FROM users WHERE login="'.$_POST['login'].'" AND pass=MD5("'.$pass.'")');
        $user = $rezult->fetch();
        
        if(!empty($user)){
            $_SESSION['admin'] = $user;
            header('Location: /admin');
        }else{
            $error = 'Неправильний логін/пароль';
        } 
    }
}