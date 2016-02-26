<div class="top-container  top-distance background-blackfish js-adjust-hight">
    <div class="inner-container gallery top-distance">
        <?php require ROOT . '/view/client/breadcrumbs.php'; ?>
        <h1 class="title">Товари Golden Corona - <?=$seoCat['name']?></h1><div class="share42init"></div>
        <div id="links" class="clearfix ">
            <div class="js_inside gal_view">
                <?php
                //проверка или пустая выборка. костиль исправить!
                if ($countGood['total']!=0) {
                    foreach ($goods as $key => $val) {
                        $name = explode('.', $val['name']);
                        if ($key / 28 == 1) {
                            echo '</div><div class="js_inside hidden">';
                        }
                        ?>
                        <div class="gal_wid_cat background-white box-shadow-div">
                            <div class="title-center">
                                <p class="descript_name color-black"><?= $val['name_ru'] ?></p>
                            </div>
                            <div class="img_wrapper_category">
                                <a data-go="1" href="/tovary-dlia-lovli/<?= $val['id'] ?>" class="" title="товары для ловли рыб : <?= $val['name_ru'] ?>">
                                    <?php if (is_file(ROOT . '/img/goodsgallery/' . $val['id'] . '/1.jpg')) {
                                        echo '<img src="/img/goodsgallery/' . $val['id'] . '/1.jpg" class="img_gallery_cat">';
                                    }else{ echo  '<img src="/img/gallery/' .$val['name'] . '" title="товары для ловли рыб" class="img_gallery_cat ">';} ?>
                                </a>
                            </div>
<!--                            <div class="description_prod">-->
<!--                                <p>--><?//= $val['short_desc'] ?><!--</p>-->
<!--                            </div>-->
                            <div class="big_btn">
                                <a href="/tovary-dlia-lovli/<?= $val['id'] ?>" class="">Детали</a>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo 'Товаров в даной категории пока нету.';
                }
                ?>
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
                <?=$seoCat['seotext']?>
            </article>
        </div>
    </div>
</div>

<div class="fixed-bar">
    <? require 'view/client/footer.php'; ?>
</div>

