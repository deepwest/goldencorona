<?php
$categor = $DB->query('SELECT * FROM category WHERE cat_id=0');

function navigation(){
    $arg_list = func_get_argas();
    $numargs = func_num_argas();
    for ($i = 0; $i < $numargs; $i++) {
        echo '<li><span typeof="v:Breadcrumb"> <a href="' . $arg_list[$i][0] . '" rel="v:url" property="v:title">' . $arg_list[$i][1] . '</a> </span></li>';
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php if ($titleSeo) {
            echo $titleSeo;
        } else {
            echo 'Купить сетеполотно в Украине наложенным платежом в интернет-магазине GoldenCorona';
        } ?> </title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/img/site/favicon.png" type="image/x-icon">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php
    if ($descriptionSeo) {
        echo $descriptionSeo;
    } else {
        echo 'Хотите купить сетеполотно рыболовное по низкой цене? Продажа дешевого сетевого полотна роял в Украине. Заказать сетевое полотно оптом для рыбалки. Купить японские сетеполотна для промыслового лова из нити - ГолденКорона
';
    };
    ?>">
    <meta name="keywords" content="
              <?php
    if ($keywordsSeo) {
        echo $keywordsSeo;
    } else {
        echo 'купить сетеполотно Украина интернет магазин наложенный платеж цена корона рыболовный дешевый продажа роял недорого оптом нить заказать рыбалка почтой японский промысловый лов рыбацкий
';
    };
    ?>">
    <meta name="ROBOTS" content="INDEX,FOLLOW">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/clock.css">
    <link rel="stylesheet" href="/css/breadcrumbs.css">
    <link rel="stylesheet" href="/css/style.css?v=<?=time()?>">
    <link rel="stylesheet" href="/css/styleshort.css?v=2">

    <!--        Шрифт для текста-->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:400,700:latin,cyrillic' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })(); </script>
    <!--       / Шрифт для текста-->

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-58912878-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter34947575 = new Ya.Metrika({
                    id: 34947575,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/34947575" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<div class="us_menu clearfix">
    <ul class="best_menu f_left">
        <li class="trans us_men"><a href="<?= WEBURL ?>/" data-go="1" class="trans"><img src="/img/site/corona.png"
                                                                                         class="home-logo"></a></li>
        <li class="trans us_men"><a href="<?= WEBURL ?>/catalog" class="trans js_cotalog"><?= $lng['about_prod'] ?></a>
        </li>
        <li class="trans  us_men"><a class="trans us_li"><?= $lng['catalog'] ?></a>
            <ul class="inner_ul js_innerul">
                <li class="trans us_aa us_goods js_goods">
                    <a data-go="1" class="trans" href="<?= WEBURL ?>/colors"><?= $lng['colors'] ?></a>
                </li>
                <!--                        <li class="trans us_aa us_colors">
                            <a data-go="1" class="trans"  href="/list"><?= $lng['pricelist'] ?></a>
                        </li> -->
                <?php foreach ($categor as $val) {
                    echo '<li class="trans us_aa us_colors">
                            <a data-go="1" class="trans"  href="' . WEBURL . '/category/' . $val['id'] . '">' . $val['name'] . '</a>
                        </li> ';
                } ?>
            </ul>
        </li>
        <li class="trans us_men"><a data-go="1" href="<?= WEBURL ?>/fishing-nets-prices"
                                    class="trans"><?= $lng['pricelist'] ?></a></li>
        <!--<li class="trans us_men"><a href="/event" class="trans"><?= $lng['event'] ?></a></li>-->
        <li class="trans us_men"><a href="<?= WEBURL ?>/contact_us"
                                    class="trans js_contas"><?= $lng['contact_us'] ?></a></li>
        <li class="trans us_men"><a href="<?= WEBURL ?>/delivery_info"
                                    class="trans js_contas"><?= $lng['delivery_info'] ?></a></li>
        <li class="trans us_men"><a href="<?= WEBURL ?>/contact" class="trans js_contas"><?= $lng['contacts'] ?></a>
        </li>
    </ul>
    <ul class="f_right us_lang hide_short">
        <li>
            <strong>
                тел. <span>+48 787 88 7761</span><span ">, +380 99 669 33 96 </span>
            </strong>
        </li>
    </ul>
    <!--            <ul class="lang_bar us_lang">
                    <li ><a data-go="1" href="?lang=ru" class="trans">Rus</a></li>
                                    <li><a data-go="1" href="?lang=es" class="trans">Es</a></li>
                    <li><a data-go="1" href="?lang=us" class="trans">Eng</a></li>
                </ul>-->
</div>

<section>
    <? require 'view/client/' . $tpl . '.php'; ?>
</section>

<!--Jquery and UI-->
<script>window.jQuery || document.write('<script src="/js/jquery-2.1.1.min.js"><\/script>');</script>
<script src="/js/jquery-ui.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--Fancy Box-->
<script type="text/javascript" src="/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/js/prefixfree.min.js"></script>
<script src="/js/TweenMax.min.js"></script>
<script src="/js/momentJs.js"></script>
<script src="/js/clock.js"></script>
<script type="text/javascript" src="/js/share42/share42.js"></script>
<script src="/js/init.js"></script>
</body>
</html>