<div class="div-container">
    <div>
        <div class="list-of-products">
            <div class="admin-goods" >
                <p class="btnAdd"><a href="/admin/category_editor/add" >Додати категорію</a></p>
                <table >
                    <td colspan="4">Редактор Категорій</td>
                    <?php
                    foreach ($categorys as $val) {
                        ?>
                        <tr>
                            <td><span class="mid-title"><?= $val['name'] ?></span></td>
                            <td><a href="/admin/category_editor/edit/<?= $val['id'] ?>" class="mid-title">Редагувати</a></td>
                            <td><a href="/admin/category_editor/del/<?= $val['id'] ?>/<?= $val['name'] ?>" class="mid-title">Видалити</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>











