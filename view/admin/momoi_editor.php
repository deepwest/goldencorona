<div class="div-container">
    <div class="list-of-products">
        <div class="admin-goods" >
            <form method="POST">
                <table>
                    <tr>
                        <td><label>SEO Title</label><input type="text" name="seotitle" value="<?= $nets['seotitle'] ?>"></td>
                        <td><label>SEO Description</label><input type="text" name="seodescription" value="<?= $nets['seodescription'] ?>"></td>
                        <td><label>SEO Keywords</label><input type="text" name="seokeywords" value="<?= $nets['seokeywords'] ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p class="mid-title">SEO Опис категорії</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <textarea name="seotext" class="textMcy"><?= $nets['seotext'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="hidden" name="id" value="<?= $nets['id'] ?>">
                            <input type="submit" value="Зберегти" class="submit_btn mid-title" name="edited_color_category"></td>
                    </tr>

                </table>
            </form>
        </div>
        <hr>
        <div class="admin-goods" >
            <p class="btnAdd"><a href="/admin/goods_editor/add" >Додати новий</a></p>
            <hr>
            <table >
                <td colspan="4">Редактор полотна</td>
                <?php
                foreach ($goods as $val) {
                    ?>
                    <tr>
                        <td><img src="/img/gallery/<?= $val['name'] ?>"></td>
                        <td><span class="mid-title"><?= $val['name'] ?></span></td>
                        <td><a href="/admin/goods_editor/edit/<?= $val['id'] ?>" class="mid-title">Редагувати</a></td>
                        <td><a href="/admin/goods_editor/del/<?= $val['id'] ?>/<?= $val['name'] ?>" class="mid-title">Видалити</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

