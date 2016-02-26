
<div class="top-container  top-distance background-blackfish js-adjust-hight">
    <div class="inner-container gallery top-distance">
        
           <?php require ROOT . '/view/client/breadcrumbs.php'; ?>

        <p class="theme color-black"><?= $lng['catalog_in'] ?></p><div class="share42init"></div>
        <div class="inner-list clearfix">
            <ul>
                <li><a href="<?=WEBURL?>/colors">Golden Corona</a> </li>
                <li><a href="<?=WEBURL?>/colors-momoi">Momoi</a> </li>
            </ul>
        </div>
        <div id="links" class="clearfix ">
            <div class="js_inside gal_view">
                <?php
                foreach ($goods as $key => $val) {
                    $name = explode('.', $val['name']);
                    if ($key / 28 == 1) {
                        echo '</div><div class="js_inside hidden">';
                    }
                    ?>

                    <div class="gal_wid background-white box-shadow-div">
                        <div class="title-center">
                            <p class="descript_name color-black"><?= $name[0] ?></p>
                        </div>
                        <div class="img_wrapper">
                            <a data-go="1" href="<?=WEBURL?>/setepolotno-dlia-ryby-setej/<?= $val['id'] ?>"  title="Color : <?= $name[0] ?>">
                                <img src="/img/gallery/<?= $val['name'] ?>" title="fishing-material-net-<?= $val['id'] ?>" class="img_gallery img_a" />
                            </a>
                        </div>
                        <div class="description_prod">
                            <p><?= $val['short_desc'] ?></p>
                        </div>
                        <div class="big_btn">
                            <a href="<?=WEBURL?>/setepolotno-dlia-ryby-setej/<?= $val['id'] ?>" class="">Детали</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="us_pageshift clearfix bottom-distance">
            <div class="marg_auto">
                <div class="js_left arraows f_left"><img src="/img/site/left.png"></div>
                <div class="js_right arraows f_right"><img src="/img/site/right.png"></div>
            </div>
        </div>
        <div class="seo_category_description">
            <article>
                <?=$nets['seotext']?>
            </article>
        </div>
    </div>
</div>

<div class="fixed-bar">
    <? require 'view/client/footer.php'; ?>
</div>
