<div class="div-container">
    <div>
        <div class="list-of-products input-decorator">
            <form method="post">
                <div><label>SEO Title</label><input type="text" name="seotitle" value="<?= $article['seotitle'] ?>"></div>
                <div><label>SEO Description</label><input type="text" name="seodescription" value="<?= $article['seodescription'] ?>"></div>
                <div><label>SEO Keywords</label><input type="text" name="seokeywords" value="<?= $article['seokeywords'] ?>"></div>
                <hr>
                <p class="color-red font-bold">Текст про компанию Golden Corona</p>
                <hr>
                <div><textarea name="header" class="textMcy"><?= $article['header'] ?></textarea></div>
                <div><textarea name="article" class="textMcy"><?= $article['article'] ?></textarea></div>
                <div><input type="hidden" name="id" value="<?= $article['id'] ?>"></div>
                <div><input type="submit" name="save_article"></div>
            </form>
            <hr>
            <p class="color-red font-bold">Текст про компанию Momoi</p>
            <hr>
            <form method="post">
                <input type="hidden" name="seotitle" value="<?= $momoiarticle['seotitle'] ?>">
                <input type="hidden" name="seodescription" value="<?= $momoiarticle['seodescription'] ?>">
                <input type="hidden" name="seokeywords" value="<?= $momoiarticle['seokeywords'] ?>">
                <div><textarea name="header" class="textMcy"><?= $momoiarticle['header'] ?></textarea></div>
                <div><textarea name="article" class="textMcy"><?= $momoiarticle['article'] ?></textarea></div>
                <div><input type="hidden" name="id" value="<?= $momoiarticle['id'] ?>"></div>
<!--                //TODO redo main article admin logic-->
                <div><input type="submit" name="save_momoi_article"></div>
            </form>
        </div>
    </div>
</div>