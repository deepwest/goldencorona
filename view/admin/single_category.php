<div class="div-container">
    <div>
        <div class="list-of-products">
            <div class="admin-goods" >
                <form method="post" action="/admin/category_edit_add" enctype="multipart/form-data">
                    <table class="single-good-editor-table"><tr>
                            <td colspan="3">Редактор категорій</td></tr>
                        <tr>
                            <td colspan="3"><label>Назва</label><input type="text" name="name" value="<?=$single_category['name']?>"></td>
                        </tr>
                        <tr>
                            <td><label>SEO Title</label><input type="text" name="seotitle" value="<?=$single_category['seotitle']?>"></td>
                            <td><label>SEO Description</label><input type="text" name="seodescription" value="<?=$single_category['seodescription']?>"></td>
                            <td><label>SEO Keywords</label><input type="text" name="seokeywords" value="<?=$single_category['seokeywords']?>"></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label>SEO Опис категорії
                                  <textarea name="seotext" class="textMcy"><?=$single_category['seotext']?></textarea></label>
                            </td>
                        </tr>
<!--                            <tr><td colspan="4"><label>Короткий опис</label><textarea name="short_desc" ></textarea></td></tr>
                        <tr><td colspan="4"><label>Повний опис</label><textarea name="full_desc" ></textarea></td></tr>-->
                        <tr>
                            <td colspan="4">
                                <input type="hidden" name="id" value="<?=$single_category['id']?>">
                                <input type="submit" value="Зберегти" class="submit_btn" name="edited_category"></td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>
