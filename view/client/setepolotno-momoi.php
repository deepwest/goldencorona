<div class="top-container  top-distance background-blackfish">
    <div class="inner-container top-distance">

        <?php require ROOT . '/view/client/breadcrumbs.php'; ?>

        <div>
            <h1 class="title">Momoi цвет - <?= $name[0] ?></h1>

            <h2>Сетевое полотно  "Momoi" из мульти-монофиламентной нити (скрученная леска)</h2>

            <p class="main_text paragraph-margin">

            </p>

        </div>
        <div class="clearfix paragraph-margin">
            <div class="img-wrapper f_left width-left-big">
                <img src="/img/gallery/<?= $selected_good['name'] ?>" class="main-image">
                <div class="">
                    <hr>
                    <p class="text_share">Поделитесь нами в соц сетях ...</p>
                    <div class="share42init"></div>
                </div>
            </div>
            <div class="f_right width-right-big">
                <div class="padding-bottom">
                <div class="button-wrap"><a href="<?=WEBURL?>/contact_us?col=momoi_<?= $name[0] ?>" class="button-regular yellow-btn">Оформить заказ</a></div>
                <div class="button-wrap"><a href="<?=WEBURL?>/momoi-opisanie/<?= $selected_good['id'] ?>" class="button-regular red-btn">Описание товара</a></div>
                </div>
                <div class="padding-bottom">
                    <table class="CSSTableGenerator">
                        <tr>
                            <td colspan="2">Характеристики</td>
                        </tr>
                        <tr>
                            <td>Производитель</td>
                            <td><?= $selected_good['manufacturer'] ?></td>
                        </tr>
                        <tr>
                            <td>Страна производитель </td>
                            <td><?= $selected_good['country'] ?></td>
                        </tr>
                        <tr>
                            <td>Материал </td>
                            <td><?= $selected_good['material'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>

<!--        <div class="padding-bottom">-->
<!--            <table class="CSSTableGenerator">-->
<!--                <tr>-->
<!--                    <td colspan="2">Характеристики</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Производитель</td>-->
<!--                    <td>--><?//= $selected_good['manufacturer'] ?><!--</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Страна производитель </td>-->
<!--                    <td>--><?//= $selected_good['country'] ?><!--</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Материал </td>-->
<!--                    <td>--><?//= $selected_good['material'] ?><!--</td>-->
<!--                </tr>-->
<!--            </table>-->
<!--        </div><div class="share42init"></div>-->
    </div>
</div>
<div class="fixed-bar">
    <? require 'view/client/footer.php'; ?>
</div>