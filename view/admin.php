<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/stylesMenu.css">
        <link rel="stylesheet" href="/css/admin.css">
    </head>
    <body>

        <article id="main" class="clearfix">

            <?
            if (!empty($_SESSION['admin'])) {
                echo 'Привіт, ' . $_SESSION['admin']['name'];
                ?> 
                <div class="top-menu-list clearfix">
                    <div id='cssmenu'>
                        <ul>
                            <li class='active'><a href="/admin">Головна</a> </li>
                            <li ><a href="/admin/goods_editor">Редагування сіткополотна</a> </li>
                            <li ><a href="/admin/momoi_editor">Редагування Momoi</a> </li>
                            <li ><a href="/admin/category_editor">Редагування категорій</a> </li>
                            <li ><a href="/admin/all_products_editor">Редагування товарів</a> </li>
                            <li><a href="/admin/exit">Вихід</a></li>
                        </ul>
                    </div>
                </div>
            <? } ?>

            <? require 'view/admin/' . $tpl . '.php'; ?>

        </article>

        <script src="/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea.textMcy'});</script>
    </body>
</html>