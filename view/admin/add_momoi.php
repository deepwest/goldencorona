<div class="div-container">
    <div class="list-of-products">
        <div class="admin-goods" >
            <form method="post" action="/admin/single_momoi_editor" enctype="multipart/form-data">
                <table class="single-good-editor-table"><tr>
                        <td colspan="34">Редактор полотна</td></tr>
                    <tr>
                        <td><img src="/img/gallery/"></td>
                        <td colspan="1"><span class="mid-title"></span></td>
                        <td colspan="2"><input type="file" name="pattern" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Імя</label><input type="text" name="name" placeholder="" required=""></td>
                        <td><label>Матеріал</label><input type="text" name="material" placeholder="" required=""></td>
                        <td><label>Країна</label><input type="text" name="country" placeholder="" required=""></td>
                        <td><label>Виробник</label><input type="text" name="manufacturer" placeholder="" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Імя російською</label><input type="text" name="name_ru" value="" required=""></td>
                        <td><label>Ціна</label><input type="text" name="price" value="" required=""></td>
                    </tr>
                    <tr><td colspan="4"><label>Короткий опис</label><textarea name="short_desc" placeholder=""></textarea></td></tr>
                    <tr><td colspan="4"><label>Повний опис</label><textarea name="full_desc" placeholder=""></textarea></td></tr>
                    <tr>
                        <td colspan="4">
                            <input type="hidden" name="categoryId" value="<?= $url['4'] ?>">
                            <input type="submit" value="Зберегти" class="submit_btn" name="new_good"></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
</div>



