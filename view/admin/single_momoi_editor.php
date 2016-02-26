<div class="div-container">
    <div class="list-of-products">
        <div class="admin-goods" >
            <form method="post" action="/admin/single_momoi_editor" enctype="multipart/form-data">
                <table class="single-good-editor-table"><tr>
                        <td colspan="34">Редактор полотна</td></tr>
                    <tr>
                        <td><img src="/img/gallery/<?= $single_good['name'] ?>"></td>
                        <td colspan="1"><span class="mid-title"><?= $single_good['name'] ?></span></td>
                        <td colspan="2"><input type="file" name="pattern" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Імя</label><input type="text" name="name" value="<?= $single_good['name'] ?>" required="" ></td>
                        <td><label>Матеріал</label><input type="text" name="material" value="<?= $single_good['material'] ?>" required=""></td>
                        <td><label>Країна</label><input type="text" name="country" value="<?= $single_good['country'] ?>" required=""></td>
                        <td><label>Виробник</label><input type="text" name="manufacturer" value="<?= $single_good['manufacturer'] ?>" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Імя російською</label><input type="text" name="name_ru" value="<?= $single_good['name_ru'] ?>" required=""></td>
                        <td><label>Ціна</label><input type="text" name="price" value="<?= $single_good['name_ru'] ?>" required=""></td>
                    </tr>
                    <tr><td colspan="4"><label>Короткий опис</label><textarea name="short_desc" ><?= $single_good['short_desc'] ?></textarea></td></tr>
                    <tr><td colspan="4"><label>Повний опис</label><textarea name="full_desc" ><?= $single_good['full_desc'] ?></textarea></td></tr>
                    <tr>
                        <td colspan="4">
                            <input type="hidden" name="id" value="<?= $single_good['id'] ?>">
                            <input type="hidden" name="oldname" value="<?= $single_good['name'] ?>">
                            <input type="hidden" name="categoryId" value="<?= $url['5'] ?>">
                            <input type="submit" value="Зберегти" class="submit_btn" name="edited_good"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

