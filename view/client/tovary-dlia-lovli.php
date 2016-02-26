<div class="top-container  top-distance background-blackfish">
    <div class="inner-container top-distance">
        <?php require ROOT . '/view/client/breadcrumbs.php'; ?>


        <div class="clearfix  padding-top">
            <div class="f_left width-left-big">
                <div class="img-descr">
                    <?php if (is_file(ROOT . '/img/goodsgallery/' . $selected_good['id'] . '/1.jpg')) {
                        echo '<img src="/img/goodsgallery/' . $selected_good['id'] . '/1.jpg" class="js-slider-show">';
                    }else{ echo  '<img src="/img/gallery/' .$selected_good['name'] . '">';} ?>
<!--                    <img src="/img/gallery/--><?//= $selected_good['name'] ?><!--">-->
                    <div>
                        <?php for ($i = 2; $i <= 5; $i++) {
                            if (is_file(ROOT . '/img/goodsgallery/' . $selected_good['id'] . '/' . $i . '.jpg')) {
                                ?>
                                <img src="/img/goodsgallery/<?= $selected_good['id'] ?>/<?=$i?>.jpg" class="small-image js-slider">
                                <?php } } ?>
                    </div>
                </div>
                <div class=" ">
                    <div class="articles">
                        <article>
                            <?= $selected_good['short_desc'] ?>
                        </article>
                    </div>
                    <div class="">
                        <hr>
                        <p class="text_share">Поделитесь нами в соц сетях ...</p>
                        <div class="share42init"></div>
                    </div>
                </div>
            </div>
            <div class="f_right width-right-big">
                <div>
                    <h1 class="main_text"><?= $selected_good['name_ru'] ?> Golden Corona</h1>

                    <h2>Товары для ловли рыб "Golden Corona" </h2>
                    <div>
                        <p class="main_text_price">Цена: <?php if (empty($selected_good['price'])) {
                                echo 'Звоните уточните.';
                            } else {
                                echo $selected_good['price'] . ' грн';
                            } ?></p>
                        <span class="text">Есть в наличии</span>
                    </div>
                    <div class="clearfix btn-area padding-top">
                        <a href="/contact_us?col=<?= $name[0] ?>"
                           class=" button-regular yellow-btn">Оформить заказ</a>
                        <a href="/detalnoe-opisanie-cat/<?= $selected_good['id'] ?>"
                           class=" button-regular red-btn">Описание товара</a>
                    </div>
                    <table class="CSSTableGenerator">
                        <tr>
                            <td colspan="2">Характеристики</td>
                        </tr>
                        <tr>
                            <td>Производитель</td>
                            <td><?= $selected_good['manufacturer'] ?></td>
                        </tr>
                        <tr>
                            <td>Страна</td>
                            <td><?= $selected_good['country'] ?></td>
                        </tr>

                        <?php if ($_SESSION['cat_id'] == 8) { ?>

                            <tr>
                                <td>Диаметр,мм</td>
                                <td><?= $selected_good['diameter'] ?></td>
                            </tr>
                            <tr>
                                <td>Тонущая сила г/м</td>
                                <td><?= $selected_good['power'] ?></td>
                            </tr>
                            <tr>
                                <td>Груз</td>
                                <td><?= $selected_good['weight'] ?></td>
                            </tr>
                            <tr>
                                <td>Длина</td>
                                <td><?= $selected_good['size'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php if ($_SESSION['cat_id'] != 8) { ?>
                            <tr>
                                <td>Материал</td>
                                <td><?= $selected_good['material'] ?></td>
                            </tr>

                        <?php } ?>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="fixed-bar">
    <? require 'view/client/footer.php'; ?>
</div>

