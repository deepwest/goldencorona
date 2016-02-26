<div class="div-container">
    <div class="list-of-products clearfix">
        <div class="f_left left-nav clearfix"><ul>
                <?php
                foreach ($categorys as $val) {
                    ?><li><a href="/admin/all_products_editor/<?= $val['id'] ?>"><?= $val['name'] ?></a></li><?php
                }
                ?></ul>
        </div>
        <div class="f_right right-article">
            <div class="admin-goods" >
                <?php
                if(!empty($url[3])){
                   ?> <p class="btnAdd"><a href="/admin/goods_editor/add/<?=$url[3]?>" >Додати новий товар</a></p><?php
                }
                ?>
                
                <table >
                    <td colspan="4">Редактор товарів</td>
                    <?php
                    if ($goods!=0) {
                        foreach ($goods as $val) {
                            ?>
                            <tr>
                                <td><img src="/img/gallery/<?= $val['name'] ?>" class="small-img"></td>
                                <td class=""><span class="mid-title"><?= $val['name'] ?></span></td>
                                <td><a href="/admin/goods_editor/edit/<?= $val['id'] ?>/<?=$url[3]?>" class="mid-title">Редагувати</a></td>
                                <td><a href="/admin/goods_editor/del/<?= $val['id'] ?>/<?= $val['name'] ?>" class="mid-title">Видалити</a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

